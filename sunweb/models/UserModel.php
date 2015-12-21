<?php
/**
 * This is User Model.
 * This model will contain all related functions to the user processing.
 * For example, add new user, delete user and update user.
 * Author: Mr. HENG vongkol
 * Email: henvongkol@gmail.com
 * Phone: 097 5589 097
 */
class UserModel extends CI_Model {
    // invoke parent constructor
    public function __construct() {
        parent::__construct();
    }
    /**
     * getUsers is a function to select all users from table users.
     * It shows only users that are not deleted.
     * This function will return a list of users.
     */
    public function getUsers()
    {
        $query = $this->db->get_where('users',array('status'=>1));
        return $query->result();
    }
    /**
     * Delete user by its id
     */
    public function deleteUser($id)
    {
        $this->db->delete('users', array('userid'=>$id));
    }
    /**
     * Add new user to tables.
     */
    public function addUser()
    {
        $fname = $this->input->post('firstname');
        $lname = $this->input->post('lastname');
        $gender = $this->input->post('gender');
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $pass = $this->input->post('pass');
        $type = $this->input->post('type');
        $status = 1;
        /**
         * We need to check if the user already exist or not.
         * If user already exist, we cannot add new user with the same user name.
         */
        $query = $this->db->get_where('users',array('username'=>$username));
        $result = false;
        if (count($query->result())>=1) {
            // user already exist
           $result = false;
        }
        else{
            $data = array(
                'firstname'=>$fname,
                'lastname'=>$lname,
                'gender'=>$gender,
                'email'=>$email,
                'username'=>$username,
                'password'=>  md5($pass),
                'type'=>$type,
                'status'=>$status
            );
        $result = $this->db->insert('users',$data);
        }
        return $result;
    }
    /**
     * This function is get user by its id.
     * It needs one argument as the user id.
     */
    public function getUserById($id)
    {
        $query = $this->db->get_where('users',array('userid'=>$id));
        return $query->result();
    }
    /**
     * Thi function will return a user by its user nmae.
     */
    public function getUserByName($username)
    {
        
        $query = $this->db->get_where('users',array('username'=>$username));
        return $query->result();
    }
    /**
     * Update a user by its id
     */
    public function editUser($id)
    {
        $fname = $this->input->post('firstname');
        $lname = $this->input->post('lastname');
        $gender = $this->input->post('gender');
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $pass = $this->input->post('pass');
        $type = $this->input->post('type');
        $status = 1;
        $data=array();
        /**
         * If the password is not empty, we also update the password as well.
         * If the password is empty, we don't update it, we keep the old password.
         */
        if ($pass!="") {
             $data = array(
                'firstname'=>$fname,
                'lastname'=>$lname,
                'gender'=>$gender,
                'email'=>$email,
                'username'=>$username,
                'password'=>  md5($pass),
                'type'=>$type,
                'status'=>$status
            );
        }
        else
        {
           $data = array(
                'firstname'=>$fname,
                'lastname'=>$lname,
                'gender'=>$gender,
                'email'=>$email,
                'username'=>$username,
                'type'=>$type,
                'status'=>$status
            ); 
        }
        $this->db->where('userid', $id); 
        $this->db->update('users',$data);
    }
    // change password
    public function changePassword($userid){
        $pass = md5($this->input->post('pass'));
        $data=array(
            'password'=>$pass
        );
        $this->db->where('userid',$userid);
        $this->db->update('users',$data);
    }
}
