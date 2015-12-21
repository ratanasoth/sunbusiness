<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MobileSite
 *
 * @author Vongkol
 */
class MobileSite extends CI_Controller {
    //put your code here
    public  function __construct() {
        parent::__construct();
        $this->load->model('MenuModel');
        $this->load->model('MobileModel');
    }
    public function index(){
        $data['title']= "Mobile Site";
        $data['menus'] = $this->MenuModel->getMainMenu();
         $data['subs'] = $this->MenuModel->getSubMenu();
         $data['MyClass'] =  $this;
         $data['mobile']=  $this->MobileModel->getMobile();
         $data['slides']=  $this->MobileModel->getSlide();
        $this->load->view('template/header',$data);
        $this->load->view('home/mobile-site',$data);
        $this->load->view('template/footer');
                
    }
    public function service(){
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $data['title']= "Mobile Site";
        $data['mobile']= $this->MobileModel->getMobile();
        $this->load->view('master/header',$data);
        $this->load->view('master/mobile-list',$data);
        $this->load->view('master/footer');
    }
    public function edit(){
         if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $data['title']= "Edit Mobile Site";
        $data['mobile']= $this->MobileModel->getMobile();
        $this->load->view('master/header',$data);
        $this->load->view('master/mobile-edit',$data);
        $this->load->view('master/footer');
        
    }
    public function update(){
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $this->MobileModel->update();
        redirect(base_url('MobileSite/service'));
    }
    // show slide
    public function slide(){
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $data['title']= "Mobile Slide List";
        $data['slides']= $this->MobileModel->getSlide();
        $this->load->view('master/header',$data);
        $this->load->view('master/mobile-slide-list',$data);
        $this->load->view('master/footer');
    }
    // show add new slider form
    public function addSlide(){
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $data['title']= "New Mobile Slide";
        $data['sms']="";
        $this->load->view('master/header',$data);
        $this->load->view('master/mobile-slide-add');
        $this->load->view('master/footer');
        
    }
    // insert slide to database
    public function doInsert(){
         if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $config['upload_path']          = './assets/images/mobile/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 9000000;
        $config['max_width']            = 5024;
        $config['max_height']           = 5680;
        $fname1="";
        $this->load->library('upload', $config);
        $data['sms']="";
        $data['title']="New Mobile Slide";
        if ( ! $this->upload->do_upload('img1'))
        {
            $data['sms']="Data has not been saved.";
        }
        else
        {
            
            $d1= $this->upload->data();
            $data['sms']="Data has been saved.";
            $fname1=$d1['file_name'];
            //upload second image
            $this->upload->do_upload('img2');
            $d2 = $this->upload->data();
            $fname2=$d2['file_name'];
            // insert to table
            $this->MobileModel->insertSlide($fname1,$fname2);
        }
       
        $this->load->view('master/header',$data);
        $this->load->view('master/mobile-slide-add',$data);
        $this->load->view('master/footer');
     }
     // delete mobile slide by its id
     public function delete(){
         $id = $this->uri->segment(3);
         $img1=  $this->uri->segment(4);
         $img2=  $this->uri->segment(5);
         $p1 = "assets/images/mobile/".$img1;
         $p2 = "assets/images/mobile/".$img2;
         $this->MobileModel->deleteSlide($id);
         unlink($p1);
         unlink($p2);
         redirect(base_url('MobileSite/slide'));
     }
    public function isContainSub($pid)
    {
        $count = $this->MenuModel->countSub($pid);
        $state=false;
        if($count>0){
            $state='yes';
        }
        else{
            $state='no';
        }
        return $state;
    }
}
