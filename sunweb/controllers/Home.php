<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('PartnerModel');
        $this->load->model('MenuModel');
        $this->load->model('SlideshowModel');
        $this->load->model('ServiceModel');
        $this->load->model('NewsModel');
       
    }
	/**
	This action method is the default action for the Home controller.
	This method will load Home page view.
	
	*/
	function index()
	{
            // pass title to the page
            $data['title'] = "Welcome to Sun Investment Business Global Co., Ltd";
            $data['partners'] = $this->PartnerModel->getPartners();
            $data['menus'] = $this->MenuModel->getMainMenu();
            $data['subs'] = $this->MenuModel->getSubMenu();
            $data['MyClass'] =  $this;
            $data['slides'] = $this->SlideshowModel->getSlide();
            $data['welcome'] = $this->SlideshowModel->getWelcome();
            $data['services'] = $this->ServiceModel->getService();
            $data['news'] = $this->NewsModel->getNews();
            $this->load->view("template/header",$data);
            $this->load->view("home/home",$data);
            $this->load->view("template/footer");
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
		// add new table
		public function x_install()
		{
			$con = mysqli_connect("localhost","chumsira_neti","w0rdnetist--7","chumsira_neti") or die("Cannot connect ot server");
			$sql ="insert into itdescription(description) values('sample')";
			$sql1 = "insert into softwaredescription(description) value('sample')";
			$x=mysqli_query($con,$sql1);
			$y=mysqli_query($con,$sql);
			var_dump($x);
			var_dump($y);
			mysqli_close($con);
		}
		public function getStatus()
		{
			$userid = $_POST["userid"];
			$r="0";
			$u = $this->db->get_where("online",array('userid'=>$userid))->result();
			if(count($u)>0)
			{
				$r = $u[0]->status;
			}
			echo $r;
		}
}