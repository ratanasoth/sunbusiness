<?php


/**
 * This controller will contain all actions related to page requests.
 *
 * @author Vongkol
 * @email hengvongkol@gmail.com
 */
class Page extends CI_Controller{
    //invoke parent's constructor
    public function __construct() {
        parent::__construct();
        $this->load->model('PageModel');
        $this->load->model('MenuModel');
    }
    /**
     * Default action will list all created pages.
     */
    public function index()
    {
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $data['title'] = "Page List";
        $data['pages'] = $this->PageModel->getPages();
        $this->load->view('master/header', $data);
        $this->load->view('master/page-list');
        $this->load->view('master/footer');
                
    }
    /**
     * Function to show new page form
     */
    public function newPage()
    {
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $data['title'] = "New Page";
        $data['sms'] ="";
        $this->load->view('master/header', $data);
        $this->load->view('master/page-add');
        $this->load->view('master/footer');
    }
    /**
     * Add new page to database.
     */
    public function add()
    {
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[3]|max_length[255]');
        if ($this->form_validation->run()==FALSE) {
            redirect(base_url('page/newpage'));
        }
        else{
            $result = $this->PageModel->addPage();
            $data['title'] = "New Page";
            $data['sms'] = $result;
            $this->load->view('master/header', $data);
            $this->load->view('master/page-add');
            $this->load->view('master/footer');
        }
    }
    /**
     * View all pages here...
     */
    public function view()
    {
        $id = $this->uri->segment(3);
       
        $data['menus'] = $this->MenuModel->getMainMenu();
        $data['page'] = $this->PageModel->getPageById($id);
        $data['subs'] = $this->MenuModel->getSubMenu();
		$page = $data['page'];
		$data['title'] = $page[0]->title;
        $data['MyClass'] =  $this;
        $this->load->view('template/header', $data);
        $this->load->view('template/page-view');
        $this->load->view('template/footer');
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
    /**
     * Action function to delete a page by its id
     */
    public function delete()
    {
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $id = $this->uri->segment(3);
        $this->PageModel->delete($id);
        redirect(base_url('page'));
    }
    /**
     * Edit a page by its id
     */
    public function editPage()
    {
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $id = $this->uri->segment(3);
        $data['title'] = "Edit Page";
        $data['sms'] = "";
        $data['page'] = $this->PageModel->getPageById($id);
        $this->load->view('master/header',$data);
        $this->load->view('master/page-edit',$data);
        $this->load->view('master/footer');
        
    }
    public function edit(){
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $this->PageModel->edit();
        redirect(base_url('page'));
    }
}
