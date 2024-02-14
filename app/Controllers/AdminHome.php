<?php

namespace App\Controllers;

use App\Models\AddHome;

class AdminHome extends BaseController
{
    public function home()
    {
        return view('AdminLTE/home.html');
    }

    public function allhome()
    {
        $homeModel = new AddHome();
        $data['homes'] = $homeModel->findAll();
        return view('AdminLTE/all_home.html', $data);
    }

    public function submitFormData()
    {
         // Get form data
        $slider_img1 = $this->request->getFile('slider_img1');
        $filePath1 = 'uploads/' ;
        
        $text1 = $this->request->getPost('text1');
        
        $slider_img2 = $this->request->getFile('slider_img2');
        $filePath2 = 'uploads/';

        $text2 = $this->request->getPost('text2');
        
        $slider_img3 = $this->request->getFile('slider_img3');
        $filePath3 = 'uploads/';

        $text3 = $this->request->getPost('text3');
        
        $title = $this->request->getPost('title');
        
        $description = $this->request->getPost('description');
        
        $img4 = $this->request->getFile('img4');
        $filePath4 = 'uploads/';
        $img5 = $this->request->getFile('img5');
        $filePath5 = 'uploads/';
        // // Move uploaded files to writable directory
        
        // // Load model
        
        $formDataModel = new AddHome();
       
        // // Prepare data
        
        $data = [
                'slider_img_1' => $filePath1,
                 'text_1' => $text1,
                 'slider_img_2' => $filePath2,
                'text_2' => $text2,
                 'slider_img-3' => $filePath3,
                 'text_3' => $text3,
                 'title' => $title,
                 'description' => $description,
                 'img4' => $filePath4,
                 'img5' => $filePath5
             ];  
             $database = \Config\Database::connect();
             $insert = $database->table('home')->insert($data);
             
             if ($insert) {
                print_r('hi');
                } else {
                    print_r('Data storage is failed ');
                }
    }

    public function edithome($id){
        $homeModel = new AddHome();
        $data['home'] = $homeModel->find($id);
        return view('AdminLTE/edithome.html', $data);
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

        $homeModel = new AddHome();
        $homeModel->update($id, $updatedData);
        print_r('hi');
    }
    public function deletehome($id){

       $homeModel = new AddHome();

        $home = $homeModel->find($id);
        if ($home === null) {
            return redirect()->to('/home')->with('error', 'Home record not found.');
        }

        $homeModel->delete($id);
        $homeModel = new AddHome();
        $data['homes'] = $homeModel->findAll();
        return view('AdminLTE/all_home.html',$data); 
        //return redirect()->to('/home')->with('success', 'Home record deleted successfully.');   
    }
}

