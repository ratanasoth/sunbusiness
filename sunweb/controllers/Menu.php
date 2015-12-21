<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Menu
 *
 * @author Vongkol
 */
class Menu extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('MenuModel');
    }
    public function index(){
        $data['title'] = "Menu List";
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $data['menus'] = $this->MenuModel->getMenu();
        $this->load->view('master/header', $data);
        $this->load->view('master/menu-list',$data);
        $this->load->view('master/footer');
    }
    public function newMenu(){
         $data['title'] = "New Menu";
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $data['sms']="";
        $data['parents'] = $this->MenuModel->getMainMenu();
        $this->load->view('master/header', $data);
        $this->load->view('master/menu-add',$data);
        $this->load->view('master/footer');
    }
    public function delete()
    {
         if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $id=  $this->uri->segment(3);
        $this->MenuModel->delete($id);
        redirect(base_url('menu'));
    }
    // add new menu
    public function add(){
         if($this->session->userid==false)
        {
            redirect('admin/login');
        }
       
        if($this->MenuModel->insert()){
            $this->session->set_userdata("sms","Data has been saved!");
        }
        else{
            $this->session->set_userdata("sms","Data has not been saved!");
        }
        redirect(base_url('menu/newmenu'));
    }
    public function editMenu(){
       if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $data['title'] = "Edit Menu";
        $id = $this->uri->segment(3);
        $data['parents'] = $this->MenuModel->getMainMenu();
        $data['menu']=  $this->MenuModel->getMenuById($id);
        $this->load->view('master/header', $data);
        $this->load->view('master/menu-edit',$data);
        $this->load->view('master/footer');
    }
    public function edit(){
        
        $this->MenuModel->edit();
        redirect(base_url('menu'));
    }
    public function filter()
    {
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $type = $this->input->post('type');
        $data['menus'] = $this->MenuModel->getMenuByType($type);
        $data['title'] = "Menu List";
        $this->load->view('master/header', $data);
        $this->load->view('master/menu-list',$data);
        $this->load->view('master/footer');
    }
}
