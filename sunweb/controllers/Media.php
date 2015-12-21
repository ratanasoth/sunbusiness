<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Media
 *
 * @author Vongkol
 */
class Media extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('MediaModel');
       // $this->load->library('upload');
    }
    public function index(){
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $data['title'] = "Media List";
        $data['media'] = $this->MediaModel->getMedia();
        $this->load->view('master/header',$data);
        $this->load->view('master/media-list',$data);
        $this->load->view('master/footer');
    }
    // show upload form
    public function add(){
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $data['sms'] ="";
        $data['title'] = "Add Media";
        $this->load->view('master/header',$data);
        $this->load->view('master/media-add',$data);
        $this->load->view('master/footer');
    }
    // do upload file to server
    public function doUpload(){
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $config['upload_path']          = './assets/media/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 9000000;
        $config['max_width']            = 5024;
        $config['max_height']           = 5680;
        $fname="";
        $this->load->library('upload', $config);
        $data['sms']="";
        $data['title']="Add Media";
        if ( ! $this->upload->do_upload('img'))
        {
            $data['sms']="Fail to upload your file...";
        }
        else
        {
            $d= $this->upload->data();
            $data['sms']="Your file has beend uploaded successfully.";
            $fname=$d['file_name'];
            $url=base_url('assets/media/'.$fname);
            //inser to database
            $this->MediaModel->insert($url,$fname);
        }
       
        $this->load->view('master/header',$data);
        $this->load->view('master/media-add',$data);
        $this->load->view('master/footer');
    }
    public function delete(){
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $id = $this->uri->segment(3);
        $name = $this->uri->segment(4);
        $path = "assets/media/".$name;
        $this->MediaModel->delete($id);
        unlink($path);
        redirect(base_url('media'));
    }
}
