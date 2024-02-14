<?php

namespace App\Controllers;

use App\Models\AddAbout;

class AdminAboutUs extends BaseController
{
    
    public function all_about()
    { 
        $homeModel = new AddAbout();
        $data['homes'] = $homeModel->findAll();
        return view('AdminLTE/all_about.html', $data);
    }

    public function aboutus()
    {
        return view('AdminLTE/about.html');
    }

    public function submitAboutFormData()
    {

        $title = $this->request->getPost('title');

        $description = $this->request->getPost('description');

        $img4 = $this->request->getFile('img4');
        $filePath4 = 'uploads/';
        $img5 = $this->request->getFile('img5');
        $filePath5 = 'uploads/';
        // // Move uploaded files to writable directory

        // // Load model

        $formDataModel = new AddAbout();

        // Prepare data

        $data = [
            'title' => $title,
            'description' => $description,
            'img4' => $filePath4,
            'img5' => $filePath5
        ];
        $database = \Config\Database::connect();
        $insert = $database->table('about')->insert($data);

        if ($insert) {
            print_r('hi');
        } else {
            print_r('Data storage is failed ');
        }
    }

    public function editabout($id)
    {
        $homeModel = new AddAbout();
        $data['home'] = $homeModel->find($id);
        return view('AdminLTE/editabout.html', $data);
    }

    public function update($id)
    {
        $updatedData = [
            'text_1' => $this->request->getPost('text1'),
            'text_2' => $this->request->getPost('text2'),
            'text_3' => $this->request->getPost('text3'),
            'slider_img_1' => $this->request->getPost('slider_img1'),
            'slider_img_2' => $this->request->getPost('slider_img2'),
            'slider_img_3' => $this->request->getPost('slider_img3'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'img_4' => $this->request->getPost('img4'),
            'img_5' => $this->request->getPost('img5'),
        ];

        $homeModel = new AddAbout();
        $homeModel->update($id, $updatedData);
        print_r('hi');
    }
    public function deleteabout($id)
    {

        $homeModel = new AddAbout();

        $home = $homeModel->find($id);
        if ($home === null) {
            return redirect()->to('/home')->with('error', 'Home record not found.');
        }

        $homeModel->delete($id);
        $homeModel = new AddAbout();
        $data['homes'] = $homeModel->findAll();
        return view('AdminLTE/all_about.html', $data);
        //return redirect()->to('/home')->with('success', 'Home record deleted successfully.');   
    }
}
