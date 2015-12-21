<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WelcomeModel
 *
 * @author Vongkol
 */
class WelcomeModel extends CI_Model {
    //put your code here
        // get welcome text from welcome table
    public function getWelcome(){
        return $this->db->get('welcome')->result();
    }
    public function getWelcomeById($id){
        return $this->db->get_where('welcome',array('id'=>$id))->result();
    }
    public function update(){
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $desc = $this->input->post('desc');
        $data = array(
            'title'=>$title,
            'description'=>$desc
        );
        $this->db->where('id',$id);        
        $this->db->update('welcome',$data);
                
    }
}
