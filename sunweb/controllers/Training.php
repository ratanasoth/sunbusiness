<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Training
 *
 * @author Vongkol
 */
class Training extends CI_Controller {
    //put your code here
    public  function __construct() {
        parent::__construct();
        $this->load->model('MenuModel');
        $this->load->model('TrainingModel');
        
    }
    // default action
    public function index(){
        $data['title'] = "IT Edution and Training";
        $data['menus'] = $this->MenuModel->getMainMenu();
        $data['subs'] = $this->MenuModel->getSubMenu();
        $data['MyClass'] =  $this;
        $data['training'] = $this->TrainingModel->getTraining();
        $data['centers'] = $this->TrainingModel->getCenter();
        $data['slide'] = $this->TrainingModel->getTrainingSlide();
        $this->load->view('template/header',$data);
        $this->load->view('home/ittraining',$data);
        $this->load->view('template/footer');
    }
    // show all training information
    public function trainingList(){
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $data['title']= "Training List";
        $data['training']= $this->TrainingModel->getTraining();
        $this->load->view('master/header',$data);
        $this->load->view('master/training-list',$data);
        $this->load->view('master/footer');
    }
    // show form for editing training
    public function edit(){
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
         $data['title']= "Edit Training Description";
        $data['training']= $this->TrainingModel->getTraining();
        $this->load->view('master/header',$data);
        $this->load->view('master/training-edit',$data);
        $this->load->view('master/footer');
    }
    // update training description, offer, and pictures
    public function update(){
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $config['upload_path']          = './assets/images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 900000;
        $config['max_width']            = 5024;
        $config['max_height']           = 5680;
        $fname1="";
        $fname2="";
        $this->load->library('upload', $config);
        
            if($this->upload->do_upload('img1')){
                $d1= $this->upload->data();
                // $data['sms']="Data has been saved.";
                $fname1=$d1['file_name'];
                
            }
            if($this->upload->do_upload('img2')){
                //upload second image
                //$this->upload->do_upload('img2');
                $d2 = $this->upload->data();
                $fname2=$d2['file_name'];
            }
      
            // insert to table
            $this->TrainingModel->update($fname1,$fname2);
            redirect(base_url('training/traininglist'));

    }
    // get all testing centers
    public function centerList(){
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $data['title']= "Test Center List";
        $data['center']= $this->TrainingModel->getTestCenter();
        $this->load->view('master/header',$data);
        $this->load->view('master/center-list',$data);
        $this->load->view('master/footer');
    }
    // delete a center by its id
    public function deletecenter(){
        $id = $this->uri->segment(3);
        $fname = $this->uri->segment(4);
        $this->TrainingModel->deletecenter($id);
        $path = 'assets/images/'.$fname;
        unlink($path);
        redirect(base_url('training/centerlist'));
    }
    // show add center form
    public function addcenter(){
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $data['title']= "New Center";
        $this->load->view('master/header',$data);
        $this->load->view('master/center-add');
        $this->load->view('master/footer');
        
    }
    // insert center
    public function insertcenter(){
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $config['upload_path']          = './assets/images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 900000;
        $config['max_width']            = 5024;
        $config['max_height']           = 5680;
        $fname1="";

        $this->load->library('upload', $config);
        
            if($this->upload->do_upload('img')){
                $d1= $this->upload->data();
                // $data['sms']="Data has been saved.";
                $fname1=$d1['file_name'];
                
            }
            // insert to table
            $this->TrainingModel->insertcenter($fname1);
            redirect(base_url('training/centerlist'));
    }
    // get all training slides
    public function slidelist(){
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $data['title']= "Training Slide List";
        $data['trainingslide']=  $this->TrainingModel->getTrainingSlide();
        $this->load->view('master/header',$data);
        $this->load->view('master/trainingslide-list',$data);
        $this->load->view('master/footer');
    }
    // show add new form for training slide
    public function addtraingslide(){
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $data['title']= "New Training Slider";
        $data['sms']="";
        $this->load->view('master/header',$data);
        $this->load->view('master/trainingslide-add',$data);
        $this->load->view('master/footer');
    }
    // insert training slide to database
    public function insertslide(){
        $fname = "";
        $data['title']="New Training Slide";
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $config['upload_path']          = './assets/images/training/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 900000;
        $config['max_width']            = 5024;
        $config['max_height']           = 5680;
        $this->load->library('upload', $config);
        if($this->upload->do_upload('img')){
            $d1= $this->upload->data();
            // $data['sms']="Data has been saved.";
            $fname=$d1['file_name'];
            $data['sms']="Data has been savee.";
        }
        else{
            $data['sms']="Data has not been saved.";
        }
        $this->TrainingModel->insertslide($fname);
        $this->load->view('master/header',$data);
        $this->load->view('master/trainingslide-add',$data);
        $this->load->view('master/footer');    
    }
    // delete a training slide by its id
    public function deleteSlide(){
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $id = $this->uri->segment(3);
        $img = $this->uri->segment(4);
        $path ='assets/images/training/'.$img;
        $this->TrainingModel->deleteSlide($id);
        unlink($path);
        redirect(base_url('training/slidelist'));
    }
    // show update training slide form
    public function updateSlide(){
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $id=  $this->uri->segment(3);
        $data['title']="Edit Training Slide";
        $data['sl']=  $this->TrainingModel->getSlideById($id);
        $this->load->view('master/header',$data);
        $this->load->view('master/trainingslide-edit',$data);
        $this->load->view('master/footer'); 
    }
    // do upate training slide
    public function doupdate(){
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $fname="";
        $config['upload_path']          = './assets/images/training/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 900000;
        $config['max_width']            = 5024;
        $config['max_height']           = 5680;
        $this->load->library('upload', $config);
        if($this->upload->do_upload('img')){
            $d1= $this->upload->data();
            // $data['sms']="Data has been saved.";
            $fname=$d1['file_name'];
        }
        $this->TrainingModel->updateSlide($fname);
        redirect(base_url('training/slidelist'));
    }
    
    // check submenu
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
