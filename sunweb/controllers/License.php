<?php
class License extends CI_Controller{
	 public function __construct() {
        parent::__construct();
        $this->load->model('LicenseModel');
    }
	public function index(){
		if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
		$data['title'] = "License Logo List";
		$data['logo'] = $this->LicenseModel->getLogo();
		$this->load->view('master/header',$data);
		$this->load->view('master/licenselogo-list',$data);
		$this->load->view('master/footer');
	}
	// show logo add form
	public function add(){
		if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
		$data['title'] = "New License Logo";
		$this->load->view('master/header',$data);
		$this->load->view('master/licenselogo-add');
		$this->load->view('master/footer');
	}
	// insert new logo to database
	public function insert()
	{
		if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
		$config['upload_path']          = './assets/images/license/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 900000;
        $config['max_width']            = 5024;
        $config['max_height']           = 5680;
        $fname="";
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('img'))
        {
            $d= $this->upload->data();
            $fname=$d['file_name'];
            //inser to database
            $this->LicenseModel->insert($fname);
        }
		redirect(base_url('license'));
	}
	// delete a logo by its id
	public function delete()
	{
		if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
		$id = $this->uri->segment(3);
		$fname = $this->uri->segment(4);
		$path = 'assets/images/license/'.$fname;
		$this->LicenseModel->delete($id);
		unlink($path);
		redirect(base_url('license'));
	}
}
?>