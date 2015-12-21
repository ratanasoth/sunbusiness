<?php

/**
 * Description of User
 *
 * @author Vongkol
 */
class User extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
    }
    /**
     * The default function to get all users from table users.
     */
    public function index(){
         if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $data['title'] = "User List";
        $data['users'] = $this->UserModel->getUsers();
        $this->load->view('master/header', $data);
        $this->load->view('master/user-list', $data);
        $this->load->view('master/footer');
    }
    /**
     * A function to delete a user by its id.
     */
    public function delete()
    {
         if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $id = $this->uri->segment(3);
        $this->UserModel->deleteUser($id);
        redirect(base_url('user'));
    }
    /**
     * A function to show add new user form
     */
    public function newUser()
    {
         if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $data['title'] = "Add New User";
        $data['sms']="";
        $this->load->view('master/header', $data);
        $this->load->view('master/user-add');
        $this->load->view('master/footer');
    }
    /**
     * Action function to add user to table users.
     * The form needs some validations.
     */
    public function add()
    {
         if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
       $this->form_validation->set_rules('firstname', 'First Name', 'trim|required|min_length[3]|max_length[50]');
       $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|min_length[3]|max_length[50]');
       $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]|max_length[60]');
       $this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[3]|max_length[30]');
       $this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[3]|max_length[16]');
       if ($this->form_validation->run()==FALSE) {
            $data['title'] = "Add New User";
            $data['sms'] = "<span class='text-danger'></span>";
            $this->load->view('master/header', $data);
            $this->load->view('master/user-add');
            $this->load->view('master/footer');
       }
       else {
        $r=$this->UserModel->addUser();
        $data['title'] = "Add New User";
        if ($r) {
            $data['sms'] = "<span class='text-info'>Data has been saved.</span>";
        }
        else{
             $data['sms'] = "<span class='text-danger'>Data has not been saved. User may already exist!</span>";
        }
        $this->load->view('master/header', $data);
        $this->load->view('master/user-add');
        $this->load->view('master/footer');
         
       }
    }
    /**
     * Action function to load edit user form.
     */
    public function editUser()
    {
         if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $id =  $this->uri->segment(3);
        $data['user'] = $this->UserModel->getUserById($id);
        $data['title'] = "Edit User";
        $data['sms']="";
        $this->load->view('master/header', $data);
        $this->load->view('master/user-edit',$data);
        $this->load->view('master/footer');
    }
    /**
     * Function to edit the selected user.
     */
    public function edit()
    {
         if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        // validate basic information
       $this->form_validation->set_rules('firstname', 'First Name', 'trim|required|min_length[3]|max_length[50]');
       $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|min_length[3]|max_length[50]');
       $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]|max_length[60]');
       $this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[3]|max_length[50]');
       /**
        * If the input information does not meet the validation rule,
        * load the edit form again and show message error.
        * If everything is ok, update to database
        */
       $id = $this->input->post('userid');
       if ($this->form_validation->run()==FALSE) {
          
            $data['title'] = "Edit User";
            $data['sms'] = "<span class='text-danger'></span>";
            $this->load->view('master/header', $data);
            $data['user'] = $this->UserModel->getUserById($id);
            $this->load->view('master/user-edit',$data);
            $this->load->view('master/footer');
       }
       else{
           $this->UserModel->editUser($id);
           redirect(base_url('user'));
       }
    }
    // load change password form
    public function changepassword(){
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
            $data['title'] = "Change Password";
            $data['sms'] = "";
            $this->load->view('master/header', $data);
            $this->load->view('master/password-change',$data);
            $this->load->view('master/footer');
    }
    public function chagePass(){
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $this->UserModel->changePassword($this->session->userid);
        $data['title'] = "Change Password";
        $data['sms'] = "Your password has been changed.";
        $this->load->view('master/header', $data);
        $this->load->view('master/password-change',$data);
        $this->load->view('master/footer');
    }
}
