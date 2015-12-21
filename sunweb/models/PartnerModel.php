<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PartnerModel extends CI_Model{
    
    private $partner = "partners";
    
    /*
     * This function is for counting data of partner
     * Author: Theary RIN
     */
    public function count_partner(){
        
        $this->db->select("{$this->partner}.partnerid");
        return $this->db->get($this->partner)->num_rows();
    }
    
    public function getPartners()
    {
        $this->db->order_by('orderno','asc');
        $query = $this->db->get('partners');
        return $query->result();
        
    }

    /*
     * This function is for get partner
     * Author: Theary RIN
     */
    public function get_partner($partner_id=NULL){
        
        $this->db->select("*");
        if($partner_id !=NULL){
            $this->db->where("{$this->partner}.partnerid",$partner_id);
        }
        $this->db->order_by("{$this->partner}.orderno","asc");
        
        return $this->db->get($this->partner);
        
    }
    /*
     * This function is for checking partnername exit
     * Author: Theary RIN
     */
    public function check_partner($name){
        
        $this->db->select("*");
        $this->db->where("{$this->partner}.partnername",$name);
        $result = $this->db->get($this->partner);
        if($result->num_rows()>0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    /*
     * This function is for add new partner
     * Author: Theary RIN
     */
    public function add_new_partner($data){
        
        $this->db->insert($this->partner,$data);
        return $this;
    }
    /*
     * This function is for filtering data partner
     * Author: Theary RIN
     */
    public function filter_by_id($partner_id){
        
        $this->db->select("*");
        $this->db->where("{$this->partner}.partnerid",$partner_id);
        return $this->db->get($this->partner)->row();
    }
    /*
     * This function is deleting data partner
     * Author: Theary RIN
     */
    public function delete_partner($partner_id){
        
        $get_partner = $this->filter_by_id($partner_id);
        $part_img = $get_partner->partimg;
        $img = $get_partner->img;
        unlink($part_img . $img);
        $this->db->where("{$this->partner}.partnerid", $partner_id);
        $this->db->delete($this->partner);
        return $this;
    }
    /*
     * This function is for updating data partner
     * Author: Theary RIN
     */
    public function edit_partner($data_update,$partner_id){
        
        $this->db->where("{$this->partner}.partnerid",$partner_id);
        $this->db->update($this->partner,$data_update);
        return $this;
    }
}