<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class News extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model("NewsModel");
    }
    /*
     * This function is default function
     * Author: Theary RIN
     */
    public function index(){
        
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $data['title'] = "News List";
        $data['news'] = $this->NewsModel->get_news();
        $this->load->view('master/header', $data);
        $this->load->view('master/news_list', $data);
        $this->load->view('master/footer');
    }
    /*
     * This function is for add new news
     * Author: Theary RIN
     */
    public function newnews(){
        
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $data['title'] = "Add New News";
        $data['sms'] = "";
        $this->load->view('master/header', $data);
        $this->load->view('master/news_add', $data);
        $this->load->view('master/footer');
    }
    
    /*
     * This function is for do add new news
     * Author: Theary RIN
     */
    public function do_news(){
        
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $data['title'] = "Add New News";
        $data['sms'] = "";
        
            $data_insert = array(
                
                "newsname" => $this->input->post("name"),
                "description" => $this->input->post("description"),
                "orderno" => $this->input->post("order")
            );

           $insert =  $this->NewsModel->add_new_news($data_insert);
           
           if($insert){
               $data["sms"] = "<span class='text-info'>Data has been saved.</span>";
           }else{
               $data["sms"] = "<span class='text-danger'>Cannot add new news. Please check your data again</span>";
           }
        
        $this->load->view('master/header', $data);
        $this->load->view('master/news_add', $data);
        $this->load->view('master/footer');
    }
    /*
     * This function is edit page news
     * Author: Theary RIN
     */
    public function editnews($news_id){
        
         if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        
        $data["title"] = "Edit News";
        $data["news"] = $this->NewsModel->get_news($news_id);
        $this->load->view('master/header', $data);
        $this->load->view('master/news_edit', $data);
        $this->load->view('master/footer');
    }
    /*
     * This function is for do editting news
     * Author: Theary RIN
     */
    public function do_edit_news($news_id){
     
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
            
        $data_edit = array(

            "newsname" => $this->input->post("name"),
            "description" => $this->input->post("description"),
            "orderno" => $this->input->post("order")
        );

       $result =  $this->NewsModel->edit_news($data_edit,$news_id);
       if($result){
           redirect("news");
       }else{
           redirect("news/editnews/".$news_id);
       }
    }
    /**
     * This function is for deleting
     * Author: Theary RIN
     */
    public function delete($newsid){
        
        $this->NewsModel->delete_news($newsid);
        redirect("news");
    }
}
