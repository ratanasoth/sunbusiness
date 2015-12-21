<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContactModel
 *
 * @author Vongkol
 */
class ContactModel extends CI_Model {
    //put your code here
    public function getContact(){
        return $this->db->get('contact')->result();
    }
    // update contact
    public function update(){
        $this->db->where('id','1');
        $data = array(
          'address'=>  $this->input->post('address'),
          'working'=> $this->input->post('workinghour')
        );
        $this->db->update('contact',$data);
    }
}
