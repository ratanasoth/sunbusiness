<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CareerModel
 *
 * @author Vongkol
 */
class CareerModel extends CI_Model{
    
     public function __construct() {
        parent::__construct();
    }
    private $t_career = "career";
    public function getCareer()
    {
        $this->db->order_by('orderno','asc');
        return $this->db->get('career')->result();
    }
    /*
     * This function is for getting data from table career to show at view
     * Author: Theary RIN
     */
    public function get_career($id=null){
        
        $this->db->select("*");
        
        if($id !=NULL){
            $this->db->where("{$this->t_career}.careerid",$id);
        }
        $this->db->order_by("{$this->t_career}.orderno","asc");
        return $this->db->get($this->t_career);
    }
    /*
     * This function is for doing edit career
     * Author: Theary RIN
     */
    public function do_edit_career($career_id){
        
        if ($career_id != null) {
            $this->db->where("{$this->t_career}.careerid", $career_id);
        }
       
        $data_edit = array(
            "position" => $this->input->post("positionname"),
            "description" => $this->input->post("description"),
            "orderno" => $this->input->post("orderno")
        );

        $this->db->update($this->t_career, $data_edit);
        return $this;
    }
    /*
     * This function is for add new career
     * Author: Theary RIN
     */
    public function do_new_career(){
        
        $data_insert = array(
            "position" => $this->input->post("position"),
            "description" => $this->input->post("description"),
            "orderno" => $this->input->post("orderno")
        );
        $this->db->insert($this->t_career,$data_insert);
        return $this;
    }
    /*
     * This function is for delete career
     * Author: Theary RIN
     */
    public function delete_career($career_id){
        
        $this->db->where("{$this->t_career}.careerid",$career_id);
        $this->db->delete($this->t_career);
        return $this;
    }
    
}
