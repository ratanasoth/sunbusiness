<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ItSolution
 *
 * @author Vongkol
 */
class ItSolution extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('MenuModel');
        $this->load->model('SolutionModel');
		$this->load->model('LicenseModel');
		$this->load->model('DcModel');
    }
    public function index()
    {
        $data['title']= "IT System Integration";
        $data['menus'] = $this->MenuModel->getMainMenu();
        $data['subs'] = $this->MenuModel->getSubMenu();
        $data['solutions']=  $this->SolutionModel->getSolution();
        $data['lc']=  $this->SolutionModel->getLicense();
		$data['logo']= $this->LicenseModel->getLogo();
		$data['dc']=$this->DcModel->getItDescription();
        $data['MyClass'] =  $this;
        $this->load->view('template/header',$data);
        $this->load->view('home/it-solution',$data);
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
    // get all solution
     public function getSolution(){
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $data['title']= "Solution List";
        $data['solutions']= $this->SolutionModel->getSolution();
        $this->load->view('master/header',$data);
        $this->load->view('master/solution-list',$data);
        $this->load->view('master/footer');
     }
     // show add new solution form
     public function add(){
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $data['title']= "New Solution";
        $data['sms']="";
        $this->load->view('master/header',$data);
        $this->load->view('master/solution-add',$data);
        $this->load->view('master/footer');
     }
     // insert solution to database and upload image to service folder
     public function doInsert(){
         if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $config['upload_path']          = './assets/images/service/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 9000000;
        $config['max_width']            = 5024;
        $config['max_height']           = 5680;
        $fname="";
        $this->load->library('upload', $config);
        $data['sms']="";
        $data['title']="New Solution";
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
            $this->SolutionModel->insert($fname);
        }
       
        $this->load->view('master/header',$data);
        $this->load->view('master/solution-add',$data);
        $this->load->view('master/footer');
     }
     // delete a solution by its id
     public function delete(){
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
         $id = $this->uri->segment(3);
         $img = $this->uri->segment(4);
         unlink('assets/images/service/'.$img);
         $this->SolutionModel->delete($id);
         redirect(base_url('ItSolution/getsolution'));
     }
     // show update form
     public function edit(){
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $data['title']= "Edit Solution";
        $id = $this->uri->segment(3);
        $data['s']=  $this->SolutionModel->getSolutionById($id);
        $this->load->view('master/header',$data);
        $this->load->view('master/solution-edit',$data);
        $this->load->view('master/footer');
     }
     // do update solution by its id
     public function update(){
         $id = $this->input->post('id');
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $config['upload_path']          = './assets/images/service/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 9000000;
        $config['max_width']            = 5024;
        $config['max_height']           = 5680;
        $fname="";
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('img'))
        {
            $this->SolutionModel->update($id,"");
        }
        else
        {
            $d= $this->upload->data();
            $fname=$d['file_name'];
            //inser to database
            $this->SolutionModel->update($id,$fname);
        }
       // if success,redirect to solution list
       redirect(base_url('ItSolution/getsolution'));
     }
     // show license form
     public function getlicense(){
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $data['title']= "Software license";
        $data['lc']= $this->SolutionModel->getLicense();
        $this->load->view('master/header',$data);
        $this->load->view('master/license-list',$data);
        $this->load->view('master/footer');
     }
     public function editlicense(){
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
         $data['title']= "Edit license";
        $data['lc']= $this->SolutionModel->getLicense();
        $this->load->view('master/header',$data);
        $this->load->view('master/license-edit',$data);
        $this->load->view('master/footer');
     }
     public function updatelicense(){
         if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $this->SolutionModel->updateLicense();
        redirect('ItSolution/getlicense');
     }
}
