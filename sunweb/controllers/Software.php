<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Software
 *
 * @author Vongkol
 */
class Software extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('MenuModel');
        $this->load->model('SoftwareModel');
		$this->load->model('DcModel');
    }
    public function index(){
        $data['title'] = "Software Development";
        $data['menus'] = $this->MenuModel->getMainMenu();
        $data['subs'] = $this->MenuModel->getSubMenu();
        $data['MyClass'] =  $this;
        $data['software']=  $this->SoftwareModel->getSoftware();
		$data['dc'] = $this->DcModel->getSoftwareDescription();
        $this->load->view('template/header',$data);
        $this->load->view('home/software-development');
        $this->load->view('template/footer');
                
    }
    // list software solution
    public function listSoftware(){
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $data['title']="Software List";
        $data['software']=  $this->SoftwareModel->getSoftware();
        $this->load->view('master/header',$data);
        $this->load->view('master/software-list',$data);
        $this->load->view('master/footer');
    }
    public function add(){
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $data['title']="Add Software";
        $data['sms']="";
        $this->load->view('master/header',$data);
        $this->load->view('master/software-add',$data);
        $this->load->view('master/footer');
    }
    public function doInsert(){
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $config['upload_path']          = './assets/images/software/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 9000000;
        $config['max_width']            = 5024;
        $config['max_height']           = 5680;
        $fname="";
        $this->load->library('upload', $config);
        $data['sms']="";
        $data['title']="New Software";
        if ( ! $this->upload->do_upload('img'))
        {
            $data['sms']="Data has not been saved.";
        }
        else
        {
            $d= $this->upload->data();
            $data['sms']="Data has been saved.";
            $fname=$d['file_name'];
            //inser to database
            $this->SoftwareModel->insert($fname);
        }
       
        $this->load->view('master/header',$data);
        $this->load->view('master/software-add',$data);
        $this->load->view('master/footer');
    }
    public function edit(){
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $id=  $this->uri->segment(3);
        $data['title']="Edit Software";
        $data['software']=  $this->SoftwareModel->getSoftwareById($id);
        $this->load->view('master/header',$data);
        $this->load->view('master/software-edit',$data);
        $this->load->view('master/footer');
    }
    public function update(){
        $id = $this->input->post('id');
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $config['upload_path']          = './assets/images/software/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 9000000;
        $config['max_width']            = 5024;
        $config['max_height']           = 5680;
        $fname="";
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('img'))
        {
            $this->SoftwareModel->update($id,"");
        }
        else
        {
            $d= $this->upload->data();
            $fname=$d['file_name'];
            //inser to database
            $this->SoftwareModel->update($id,$fname);
        }
       // if success,redirect to solution list
       redirect(base_url('software/listsoftware'));
    }
    public function delete(){
         
         $id = $this->uri->segment(3);
         $img = $this->uri->segment(4);
         unlink('assets/images/software/'.$img);
         $this->SoftwareModel->delete($id);
         redirect(base_url('software/listsoftware'));
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
