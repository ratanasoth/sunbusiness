<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Footer
 *
 * @author Vongkol
 */
class Footer extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('FooterModel');
    }
    // get footer
    public function index(){
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $data['title']="Footer List";
        $data['footer']=  $this->FooterModel->getFooter();
        $this->load->view('master/header',$data);
        $this->load->view('master/footer-list');
        $this->load->view('master/footer');
    }
    // save upate footer
    public function save(){
        $this->FooterModel->update();
        redirect(base_url('footer'));
    }
}
