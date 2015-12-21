<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Slideshow extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model("SlideshowModel");
    }
    /*
     * This function is default function
     * Author: Theary RIN
     */
    public function index(){
        
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $data['title'] = "Slideshow List";
        $data['slide'] = $this->SlideshowModel->get_slideshow();
        $this->load->view('master/header', $data);
        $this->load->view('master/slideshow_list', $data);
        $this->load->view('master/footer');
    }
    /*
     * This function is for add new slideshow
     * Author: Theary RIN
     */
    public function newslideshow(){
        
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $data['title'] = "Add New Slideshow";
        $data['sms'] = "";
        $this->load->view('master/header', $data);
        $this->load->view('master/slideshow_add', $data);
        $this->load->view('master/footer');
    }
    
    /*
     * This function is for do add new slideshow
     * Author: Theary RIN
     */
    public function do_slideshow(){
        
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $data['title'] = "Add New Slideshow";
        $data['sms'] = "";
        
        $config['upload_path'] = 'assets/images/slideshow/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library("upload", $config);
        
            if ($this->upload->do_upload("image")) {
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
                $part = $config['upload_path'];
            } else {
                $error = array('error' => $this->upload->display_errors());
                $file_name = "";
                $part = "";
            }
            
            $data_insert = array(
                
                "slideshowname" => $this->input->post("name"),
                "description" => $this->input->post("description"),
                "partimg" => $part,
                "img" => $file_name,
                "orderno" => $this->input->post("order")
            );

           $insert =  $this->SlideshowModel->add_new_slideshow($data_insert);
           
           if($insert){
               $data["sms"] = "<span class='text-info'>Data has been saved.</span>";
           }else{
               $data["sms"] = "<span class='text-danger'>Cannot add new slideshow. Please check your data again</span>";
           }
        
        $this->load->view('master/header', $data);
        $this->load->view('master/slideshow_add', $data);
        $this->load->view('master/footer');
    }
    /*
     * This function is edit page slideshow
     * Author: Theary RIN
     */
    public function editslideshow($slideshow_id){
        
         if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        
        $data["title"] = "Edit Slide Show";
        $data["slide"] = $this->SlideshowModel->get_slideshow($slideshow_id);
        $this->load->view('master/header', $data);
        $this->load->view('master/slideshow_edit', $data);
        $this->load->view('master/footer');
    }
    /*
     * This function is for do editting slideshow
     * Author: Theary RIN
     */
    public function do_edit_slide($slideshow_id){
     
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $config['upload_path'] = 'assets/images/slideshow/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library("upload", $config);
        
            if ($this->upload->do_upload("image")) {
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
                unlink($config['upload_path'].$this->input->post("old_img"));
            } else {
                $error = array('error' => $this->upload->display_errors());
                $file_name = $this->input->post("old_img");
            }
            
            $data_insert = array(
                
                "slideshowname" => $this->input->post("name"),
                "description" => $this->input->post("description"),
                "img" => $file_name,
                "orderno" => $this->input->post("order")
            );

           $result =  $this->SlideshowModel->edit_slideshow($data_insert,$slideshow_id);
           if($result){
               redirect("slideshow");
           }else{
               redirect("slideshow/editslideshow/".$slideshow_id);
           }
    }
    /**
     * This function is for deleting
     * Author: Theary RIN
     */
    public function delete($slideshowid){
        
        $this->SlideshowModel->delete_slideshow($slideshowid);
        redirect("slideshow");
    }
}
