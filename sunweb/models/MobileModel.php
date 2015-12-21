<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MobileModel
 *
 * @author Vongkol
 */
class MobileModel extends CI_Model {
    //put your code here
    public function getMobile(){
        return $this->db->get('mobile')->result();
    }
    public function update(){
        $this->db->where('id','1');
        $data = array('description'=>  $this->input->post('description'));
        $this->db->update('mobile',$data);
    }
    // get slide from table mobileslide
    public function getSlide(){
        $this->db->order_by('orderno','asc');
        return $this->db->get('mobileslide')->result();
    }
    // delete a slide by its id
    public function deleteSlide($id){
        $this->db->delete('mobileslide',array('id'=>$id));
    }
    
    // insert new slider
    public function insertSlide($fname1,$fname2){
        $data = array(
            'title'=>  $this->input->post('title'),
            'img1'=>$fname1,
            'cap1'=>  $this->input->post('cap1'),
            'img2'=> $fname2,
            'cap2'=>  $this->input->post('cap2'),
            'orderno'=>  $this->input->post('order')
        );
        $this->db->insert('mobileslide',$data);
    }
}
