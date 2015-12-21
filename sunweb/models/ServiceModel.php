<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ServiceModel extends CI_Model{
    
    private $service = "service";
    /*
     * This function is for add new service
     * Author: Theary RIN
     */
    public function add_new_service($data){
        
        $this->db->insert($this->service,$data);
        return $this;
    }
    public function getService(){
        $this->db->order_by('orderno','asc');
        return $this->db->get('service')->result();
    }
    /*
     * This function is for selecting data service
     * Author: Theary RIN
     */
    public function get_service($id=null){
        
        $this->db->select("*");
        if ($id != NULL) {
            $this->db->where("{$this->service}.serviceid", $id);
        }
        $this->db->order_by("{$this->service}.orderno", "DESC");
        return $this->db->get($this->service);
    }
    /*
     * This function is for editting service
     * Author: Theary RIN
     */
    public function edit_service($data,$service_id){
        
        $this->db->where("{$this->service}.serviceid",$service_id);
        $this->db->update($this->service,$data);
        return $this;
    }
    /*
     * This function is for filtering data service
     * Author: Theary RIN
     */
    public function filter_by_id($service_id){
        
        $this->db->select("*");
        $this->db->where("{$this->service}.serviceid",$service_id);
        return $this->db->get($this->service)->row();
    }
    /*
     * This function is for deleting service
     * Author: Theary RIN
     */
    public function delete_service($service_id){
        
        $get_partner = $this->filter_by_id($service_id);
        $part_img = $get_partner->partimg;
        $img = $get_partner->img;
        unlink($part_img . $img);
        $this->db->where("{$this->service}.serviceid", $service_id);
        $this->db->delete($this->service);
        return $this;
    }
}