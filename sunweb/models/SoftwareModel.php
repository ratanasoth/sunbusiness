<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SoftwareModel
 *
 * @author Vongkol
 */
class SoftwareModel extends CI_Model {
    //put your code here
    public function getSoftware(){
        $this->db->order_by('orderno','asc');
        return $this->db->get('software')->result();      
    }
    public function getSoftwareById($id){
        
        return $this->db->get_where('software',array('id'=>$id))->result();        
    }
    public function insert($img){
        $data=array(
            'title'=>  $this->input->post('title'),
            'img'=>$img,
            'description'=>  $this->input->post('description'),
            'orderno'=>  $this->input->post('order')
        );
        $this->db->insert('software',$data);
    }
    public function delete($id){
        $this->db->delete('software',array('id'=>$id));
    }
     public function update($id,$img){
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $order = $this->input->post('order');
        $this->db->where('id',$id);
        $data = array();
        if($img==""){
            $data = array(
                'title'=>$title,
                'description'=>$description,
                'orderno'=>$order
            );
        }
        else {
            $data = array(
                'title'=>$title,
                'img'=>$img,
                'description'=>$description,
                'orderno'=>$order
            );    
        }
        $this->db->update('software',$data);
    }
}
