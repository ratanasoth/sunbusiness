<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Email
 *
 * @author Vongkol
 */
class Email extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('EmailModel');
    }
    public function index(){
        $data['title']="Email Settings";
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $data['settings']=  $this->EmailModel->getSettings();
        $this->load->view('master/header',$data);
        $this->load->view('master/email-setting',$data);
        $this->load->view('master/footer');
    }
    public function update(){
        $this->EmailModel->update();
        redirect('email');
    }
}
