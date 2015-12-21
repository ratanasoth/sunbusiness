<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('WelcomeModel');
    }

    /**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            if ($this->session->userid==false) {
                redirect(base_url('admin/login'));
            }
            $data['title'] = "Welcome";
            $data['welcome'] = $this->WelcomeModel->getWelcome();
            $this->load->view('master/header', $data);
            $this->load->view('master/welcome-list', $data);
            $this->load->view('master/footer');
	}
        public function edit(){
             if ($this->session->userid==false) {
                redirect(base_url('admin/login'));
            }
            $data['title'] = "Welcome";
            $data['welcome'] = $this->WelcomeModel->getWelcome();
            $this->load->view('master/header', $data);
            $this->load->view('master/welcome-edit', $data);
            $this->load->view('master/footer');
        }
        public function save(){
           if ($this->session->userid==false) {
                redirect(base_url('admin/login'));
            }
            $this->WelcomeModel->update();
            redirect(base_url('welcome'));
        }
}
