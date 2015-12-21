<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class CustomerModel extends CI_Model{
    
    private $customer = "customers";
    
    /*
     * This function is for get all of data customer
     * Author: Theary RIN
     */
    public function get_customer($customer_id=NULL){
        
        $this->db->select("*");
        if ($customer_id != NULL) {
            $this->db->where("{$this->customer}.customerid", $customer_id);
        }
        $this->db->order_by("{$this->customer}.orderno","asc");
        return $this->db->get($this->customer);
    }
    public function getCustomers()
    {
        $this->db->order_by('orderno','asc');
        $query = $this->db->get('customers');
        return $query->result();
    }
    /*
     * This function is for checking customer name
     * Author: Theary RIN
     */
    public function check_customer($customer_name){
        
        $this->db->select("*");
        $this->db->where("{$this->customer}.customername",$customer_name);
        $result = $this->db->get($this->customer);
        if($result->num_rows()>0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    /*
     * This function is for insert data customer
     * Author: Theary RIN
     */
    public function add_new_customer($data){
        $this->db->insert($this->customer,$data);
        return $this;
    }
    
    /*
     * This function is for filtering data customer
     * Author: Theary RIN
     */
    public function filter_by_id($customer_id){
        
        $this->db->select("*");
        $this->db->where("{$this->customer}.customerid",$customer_id);
        return $this->db->get($this->customer)->row();
    }
    /*
     * This function is deleting data customer
     * Author: Theary RIN
     */
    public function delete_customer($customer_id){
        
        $get_customer = $this->filter_by_id($customer_id);
        $part_img = $get_customer->partimg;
        $img = $get_customer->img;
        unlink($part_img . $img);
        $this->db->where("{$this->customer}.customerid", $customer_id);
        $this->db->delete($this->customer);
        return $this;
    }
    /*
     * This function is for edit customer
     * Author: Theary RIN
     */
    public function edit_customer($data_insert, $customer_id) {
        $this->db->where("{$this->customer}.customerid", $customer_id);
        $this->db->update($this->customer, $data_insert);
        return $this;
    }

}
