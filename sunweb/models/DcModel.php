<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DcModel extends CI_Model{
// get it description
    public function getItDescription()
	{
		$query = $this->db->get("itdescription");
		return $query->result();
	}
 // get software description
	public function getSoftwareDescription()
	{
		$query = $this->db->get("softwaredescription");
		return $query->result();
	}
	// update it description
	public function udpate1()
	{
		$dc = $this->input->post("description");
		$this->db->where("id","1");
		$this->db->update("itdescription",array('description'=>$dc));
	}	
	public function udpate2()
	{
		$dc = $this->input->post("description");
		$this->db->where("id","1");
		$this->db->update("softwaredescription",array('description'=>$dc));
	}
}