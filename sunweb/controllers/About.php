<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class About extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('AboutModel');
      
    }
    
    //Default function
    public function index(){
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $data['title'] = "About Us";
        $data['about'] = $this->AboutModel->get_about();
        $this->load->view('master/header', $data);
        $this->load->view('master/about_list', $data);
        $this->load->view('master/footer');
    }
    
    /*
     * This function is for edit about us page
     * Author: Theary RIN
     */
    public function edit_about($id=NULL){
        
         if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $data['title'] = "About Us";
        $data['about'] = $this->AboutModel->get_about($id);
        $this->load->view('master/header', $data);
        $this->load->view('master/about_edit', $data);
        $this->load->view('master/footer');
    }
    
    /*
     * This function is for editting about us
     * Author: Theary RIN
     */
    public function do_edit($id=NULL){
        
        $title = $this->input->post("title");
        $des = $this->input->post("description");
        $result = $this->AboutModel->do_edit_about($title, $des, $id);
        if ($result) {
            redirect("about");
        } else {
            redirect("about/edit_about/" . $id);
        }
    }
}
