<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AboutUs
 *
 * @author Vongkol
 */
class AboutUs extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('AboutModel');
        $this->load->model('MenuModel');
    }
    public function index()
    {
        $data['title'] = "About Us";
        $data['about'] = $this->AboutModel->getAbout();
        $data['menus'] = $this->MenuModel->getMainMenu();
        $data['subs'] = $this->MenuModel->getSubMenu();
        $data['MyClass'] =  $this;
        $this->load->view('template/header', $data);
        $this->load->view('home/about-us',$data);
        $this->load->view('template/footer');
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
