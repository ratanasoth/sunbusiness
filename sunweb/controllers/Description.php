<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Description extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('DcModel');
    }
	// show it description
	public function getItDesc()
	{
		$data['title'] = "IT Description";
		$data['dc'] = $this->DcModel->getItDescription();
		$this->load->view('master/header',$data);
		$this->load->view('master/dc-list');
		$this->load->view('master/footer');
	}
	// show software description
	public function getSoftwareDesc()
	{
		$data['title'] = "Software Description";
		$data['dc'] = $this->DcModel->getSoftwareDescription();
		$this->load->view('master/header',$data);
		$this->load->view('master/sdc-list');
		$this->load->view('master/footer');
	}
	// show edit form for it description
	public function edit()
	{
		$data['title']="Edit IT Description";
		$data['dc'] = $this->DcModel->getItDescription();
		$this->load->view('master/header',$data);
		$this->load->view('master/dc-edit');
		$this->load->view('master/footer');
	}
	// show update form for software description
	public function edit1()
	{
		$data['title']="Edit Software Description";
		$data['dc'] = $this->DcModel->getSoftwareDescription();
		$this->load->view('master/header',$data);
		$this->load->view('master/sdc-edit');
		$this->load->view('master/footer');
	}
	// update it description
	public function update()
	{
		$this->DcModel->udpate1();
		redirect(base_url("Description/getitdesc"));
	}
	public function update1()
	{
		$this->DcModel->udpate2();
		redirect(base_url("Description/getsoftwaredesc"));
	}
}
