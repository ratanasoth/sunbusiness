<?php

/*
 * The Career controll will contain all action functions that are used for managing
 * career page.
 * @Author: 
 * @Email: 
 * @Phone: 
 */

class Career extends CI_Controller{
   
    // invoke parent's constructor
    public function __construct() {
        parent::__construct();
        $this->load->model("CareerModel");
        $this->load->helper("html");
        $this->load->model('MenuModel');
        $this->load->model('CareerModel');
        
    }
    //list available careers
    public function openJob()
    {
        $data['title'] = "Careers";
        $data['menus'] = $this->MenuModel->getMainMenu();
        $data['subs'] = $this->MenuModel->getSubMenu();
        $data['MyClass'] =  $this;
        $data['careers'] = $this->CareerModel->getCareer();
        $this->load->view('template/header', $data);
        $this->load->view('home/career',$data);
        $this->load->view('template/footer');
    }
    // default action
    public function index()
    {
         if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        // load some views
        $data['title']="Career Page";
        $data["career"] = $this->CareerModel->get_career();
        $this->load->view('master/header',$data);
        $this->load->view('master/career-list',$data);
        $this->load->view('master/footer');
    }
    /*
     * This function is for add new career page
     * Author: Theary RIN
     */
    public function addcareer(){
        
        if ($this->session->userid == false) {
            redirect(base_url('admin/login'));
        }
        
        $data["title"] = "Add New Career";
        $data["sms"] = "";
        $this->load->view('master/header',$data);
        $this->load->view('master/career_add',$data);
        $this->load->view('master/footer');
    }
    
    /*
     * This function for do new career
     * Author: Theary RIN
     */
    public function donewcareer(){
        
        if ($this->session->userid == false) {
            redirect(base_url('admin/login'));
        }
        
        $data["title"] = "Add New Career";
        $data["sms"] = "";
        $return = $this->CareerModel->do_new_career();
        if($return){
            $data["sms"] = "<span class='text-info'>Data has been saved.</span>";
        }else{
            $data["sms"] = "<span class='text-danger'>Cannot add new partner. Please check your data again</span>";
        }
        $this->load->view('master/header',$data);
        $this->load->view('master/career_add',$data);
        $this->load->view('master/footer');
    }
    /*
     * This function for view data career
     * Author: Theary RIN
     */
    public function view_career($career_id){
        
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        
        $data["title"] = "View Data Career";
        $data["view_data"] = $this->CareerModel->get_career($career_id);
        $this->load->view('master/header',$data);
        $this->load->view('master/career_view',$data);
        $this->load->view('master/footer');
    }

    //Function edit career page
    public function edit_career($id=null){
        
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        // load some views
        $data['title']="Edit Career Page";
        $data["edit_career"] = $this->CareerModel->get_career($id);
        $this->load->view('master/header',$data);
        $this->load->view('master/career-edit',$data);
        $this->load->view('master/footer');
    }
    
    //Function for do editting career
    public function do_edit($career_id=null){
        
        $result = $this->CareerModel->do_edit_career($career_id);
        if ($result) {
            redirect("career");
        } else {
            redirect("career/edit_career/" . $career_id);
        }
    }
    /*
     * This function is for delete career
     * Author: Theary RIN
     */
    public function delete_careerr($career_id){
        
        $delete = $this->CareerModel->delete_career($career_id);
        redirect("career");
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
