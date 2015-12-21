<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmailModel
 *
 * @author Vongkol
 */
class EmailModel extends CI_Model{
    //put your code here
    // get email settings
    public function getSettings(){
        return $this->db->get('email')->result();
    }
    public function update(){
        
        $smtp = $this->input->post('smtp');
        $port = $this->input->post('port');
        $user = $this->input->post('username');
        $pass = $this->input->post('pass');
        $to = $this->input->post('to');
        $data=array(
            'smtp'=>$smtp,
            'port'=>$port,
            'username'=>$user,
            'password'=>$pass,
            'to'=>$to
        );
        $this->db->where('id','1');
        $this->db->update('email',$data);
    }
}
