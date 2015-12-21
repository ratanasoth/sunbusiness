<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Service extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model("ServiceModel");
    }
    /*
     * This function is default function
     * Author: Theary RIN
     */
    public function index(){
        
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $data['title'] = "Service List";
        $data['service'] = $this->ServiceModel->get_service();
        $this->load->view('master/header', $data);
        $this->load->view('master/service_list', $data);
        $this->load->view('master/footer');
    }
    /*
     * This function is for add new service
     * Author: Theary RIN
     */
    public function newservice(){
        
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $data['title'] = "Add New Service";
        $data['sms'] = "";
        $this->load->view('master/header', $data);
        $this->load->view('master/service_add', $data);
        $this->load->view('master/footer');
    }
    
    /*
     * This function is for do add new service
     * Author: Theary RIN
     */
    public function do_service(){
        
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $data['title'] = "Add New Service";
        $data['sms'] = "";
        
        $config['upload_path'] = 'assets/images/service/';
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
                
                "servicename" => $this->input->post("name"),
                "description" => $this->input->post("description"),
                "url" => $this->input->post("url"),
                "partimg" => $part,
                "img" => $file_name,
                "orderno" => $this->input->post("order")
            );

           $insert =  $this->ServiceModel->add_new_service($data_insert);
           
           if($insert){
               $data["sms"] = "<span class='text-info'>Data has been saved.</span>";
           }else{
               $data["sms"] = "<span class='text-danger'>Cannot add new service. Please check your data again</span>";
           }
        
        $this->load->view('master/header', $data);
        $this->load->view('master/service_add', $data);
        $this->load->view('master/footer');
    }
    /*
     * This function is edit page service
     * Author: Theary RIN
     */
    public function editservice($service_id){
        
         if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        
        $data["title"] = "Edit Slide Show";
        $data["service"] = $this->ServiceModel->get_service($service_id);
        $this->load->view('master/header', $data);
        $this->load->view('master/service_edit', $data);
        $this->load->view('master/footer');
    }
    /*
     * This function is for do editting service
     * Author: Theary RIN
     */
    public function do_edit_service($service_id){
     
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $config['upload_path'] = 'assets/images/service/';
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
            
            $data_edit = array(
                
                "servicename" => $this->input->post("name"),
                "description" => $this->input->post("description"),
                "url" => $this->input->post("url"),
                "img" => $file_name,
                "orderno" => $this->input->post("order")
            );

           $result =  $this->ServiceModel->edit_service($data_edit,$service_id);
           if($result){
               redirect("service");
           }else{
               redirect("service/editservice/".$service_id);
           }
    }
    /**
     * This function is for deleting
     * Author: Theary RIN
     */
    public function delete($serviceid){
        
        $this->ServiceModel->delete_service($serviceid);
        redirect("service");
    }
}
