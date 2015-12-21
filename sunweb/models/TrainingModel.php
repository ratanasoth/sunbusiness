<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TrainingModel
 *
 * @author Vongkol
 */
class TrainingModel extends CI_Model{
    //put your code here
    // get all training information from table training
    public function getTraining()
    {
        return $this->db->get('training')->result();
    }
    // get all test cetners from center table
    public function getTestCenter()
    {
        return $this->db->get('center')->result();
    }
    // delete a center by its id
    public function deletecenter($id){
        $this->db->delete('center',array('id'=>$id));
    }
    // insert new center
    public function insertcenter($f){
        $data = array('img'=>$f);
        $this->db->insert('center',$data);
    }
    // get all testing centers from center table
    public function getCenter(){
        return $this->db->get('center')->result();
    }
    // get all training slider images from table trainingslide
    public function getTrainingSlide(){
        $this->db->order_by("orderno",'asc');
        return $this->db->get('trainingslide')->result();
    }
    // insert training slide to database
    public function insertslide($fname){

        $data= array(
            'title'=>  $this->input->post('title'),
            'img'=>$fname,
            'url'=>  $this->input->post('url'),
            'orderno'=>  $this->input->post('order')
        );
        $this->db->insert('trainingslide',$data);
    }
    // delete a training slide by its id
    public function deleteSlide($id){
        $this->db->delete('trainingslide',array('id'=>$id));
    }
    // update a training slide by its id
    public function updateSlide($fname){
        $data;
        $id = $this->input->post('id');
        if($fname==""){
            $data = array(
                'title'=>  $this->input->post('title'),
                'url'=>  $this->input->post('url'),
                'orderno'=>  $this->input->post('order')
            );
        }
        else{
            $data = array(
                'title'=>  $this->input->post('title'),
                'img'=>  $fname,
                'url'=>  $this->input->post('url'),
                
                'orderno'=>  $this->input->post('order')
            );
        }
        $this->db->where('id',$id);
        $this->db->update('trainingslide',$data);
    }
    // get a training slide by its id
    public function getSlideById($id){
        return $this->db->get_where('trainingslide',array('id'=>$id))->result();
    }
    public function update($f1, $f2){
        
        $description = $this->input->post("description");
        $offer = $this->input->post("offer");
        $data;
        if($f1!="" && $f2!=""){
            $data = array(
                'description'=>$description,
                'offer'=>$offer,
                'img1'=>$f1,
                'img2'=>$f2
            );
        }
        else if($f1!="" && $file2==""){
            $data = array(
                'description'=>$description,
                'offer'=>$offer,
                'img1'=>$f1
            );
        }
        else if($f1=="" && $f2!="")
        {
            $data = array(
                'description'=>$description,
                'offer'=>$offer,
                'img2'=>$f2
            );
        }
        else{
            $data = array(
                'description'=>$description,
                'offer'=>$offer
            );
        }
        $this->db->where('id','1');
        $this->db->update('training',$data);
    }
}
