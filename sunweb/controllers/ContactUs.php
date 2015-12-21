<?php
require_once("phpmailer/PHPMailerAutoload.php");
/**
 * Description of ContactUs
 *
 * @author Vongkol
 */
class ContactUs extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('MenuModel');
        $this->load->model('ContactModel');
        $this->load->model('EmailModel');
    }
    // default action
    public function index()
    {
        $data['title'] = "Contact Us";
        $data['menus'] = $this->MenuModel->getMainMenu();
        $data['subs'] = $this->MenuModel->getSubMenu();
        $data['MyClass'] =  $this;
        $data['sms']="";
        $data['c']=  $this->ContactModel->getContact();
        $this->load->view('template/header',$data);
        $this->load->view('home/contact-us',$data);
        $this->load->view('template/footer',$data);
    }
    // send email
    public function email(){
        $mail = $this->input->post('email');
        $sub = $this->input->post('subject');
        $sms = $this->input->post('message');
        $settings = $this->EmailModel->getSettings();
        $fsms ="<b>User Email's: $mail</b><br/><br/>".$sms;
        $data['title'] = "Contact Us";
        $data['menus'] = $this->MenuModel->getMainMenu();
        $data['subs'] = $this->MenuModel->getSubMenu();
        $data['MyClass'] =  $this;
        $data['sms']=$this->sendEmail($settings[0]->smtp,$settings[0]->port,$settings[0]->username,$settings[0]->password,$settings[0]->to,$sub,$fsms);
        $data['c']=  $this->ContactModel->getContact();
        $this->load->view('template/header',$data);
        $this->load->view('home/contact-us',$data);
        $this->load->view('template/footer',$data);
    }
    public function viewcontact(){
         if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $data['title'] = "Contact Us";
        $data['contact']= $this->ContactModel->getContact();
        $this->load->view('master/header',$data);
        $this->load->view('master/contact-list',$data);
        $this->load->view('master/footer');
        
    }
    public function edit(){
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $data['title'] = "Edit Contact";
        $data['contact']= $this->ContactModel->getContact();
        $this->load->view('master/header',$data);
        $this->load->view('master/contact-edit',$data);
        $this->load->view('master/footer');
    }
    public function update(){
        if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        $this->ContactModel->update();
        redirect('ContactUs/viewcontact');
    }
    public function isContainSub($pid)
        {
            $count = $this->MenuModel->countSub($pid);
            $state=false;
            if($count>0){
                $state='yes';
            }
            else{
                $state='no';
            }
            return $state;
        }
        // function to send email
        public function sendEmail($smtp,$port,$username,$password,$to,$sub,$sms){
            // create a new mail object
            $mail = new PHPMailer(); 
            // enable SMTP
            $mail->IsSMTP(); 
            // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPDebug = 0; 
            // authentication enabled
            $mail->SMTPAuth = true; 
            // secure transfer enabled REQUIRED for GMail
            $mail->SMTPSecure = 'ssl'; 
            $mail->Host = $smtp;
            $mail->Port = $port;
            $mail->IsHTML(true);
            $mail->Username = $username;
            $mail->Password = $password;
            $mail->SetFrom($username);
            $mail->Subject = $sub;
            $mail->Body = $sms;
            // send to email address
            $mail->AddAddress($to);
            $sms="";
            if(!$mail->Send())
            {
               $sms="Cannot send your message.";
            }
            else
            {
                $sms="Your message has been sent.";
            }
            return $sms;
        }
}
