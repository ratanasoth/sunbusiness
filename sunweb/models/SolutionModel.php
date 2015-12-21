<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SolutionModel
 *
 * @author Vongkol
 */
class SolutionModel extends CI_Model {
    //get all solutions
    public function getSolution(){
        $this->db->order_by('orderno','asc');
        return $this->db->get('itsolution')->result();
    }
    // get a solution by its id
    public function getSolutionById($id){
        return $this->db->get_where('itsolution',array('id'=>$id))->result();
    }
    // get license
    public function getLicense(){
        return $this->db->get('license')->result();
    }
    public function updateLicense(){
        
        $data = array(
            'description'=>  $this->input->post('description')
        );
        $this->db->where('id','1');
        $this->db->update('license',$data);
    }
    // insert new solution
    public function insert($img){
        $data = array(
            'title'=>  $this->input->post('title'),
            'img'=>$img,
            'description'=>  $this->input->post('description'),
            'orderno'=>  $this->input->post('order')
        );
        $this->db->insert('itsolution',$data);
    }
    // delete solution by its id
    public function delete($id){
        $this->db->delete('itsolution',array('id'=>$id));
    }
    // update solution by its id
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
        $this->db->update('itsolution',$data);
    }
}
