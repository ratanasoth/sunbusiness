<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FooterModel
 *
 * @author Vongkol
 */
class FooterModel extends CI_Model{
    //put your code here
    // get footer information
    public function  getFooter(){
        return $this->db->get('footer')->result();
    }
    // update footer
    public function update()
    {
        $this->db->where('id','1');
        $data = array(
            'address'=>  $this->input->post('address'),
            'copyright'=>  $this->input->post('copyright')
        );
        $this->db->update('footer',$data);
    }
}
