<?php
class Admin_products extends CI_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('products_model');

    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index()
    {
        //load the view
        $data['main_content'] = 'admin/products/list';
        $this->load->view('includes/template', $data);  

    }//index

    public function service()
    {
        //load the view
        $data['main_content'] = 'admin/products/service';
        $this->load->view('includes/template', $data);  
    }

    public function about()
    {
        //load the view
        $data['main_content'] = 'admin/products/about';
        $this->load->view('includes/template', $data);
    }

    public function contact()
    {
        //load the view
        $data['main_content'] = 'admin/products/contact';
        $this->load->view('includes/template', $data);
    }

    public function blog()
    {
        //load the view
        $data['main_content'] = 'admin/products/blog';
        $this->load->view('includes/template', $data);
    }
    public function blog_1()
    {
        //load the view
        $data['main_content'] = 'admin/products/blog_details_1';
        $this->load->view('includes/template', $data);
    }
    public function blog_2()
    {
        //load the view
        $data['main_content'] = 'admin/products/blog_details_2';
        $this->load->view('includes/template', $data);
    }
    public function blog_3()
    {
        //load the view
        $data['main_content'] = 'admin/products/blog_details_3';
        $this->load->view('includes/template', $data);
    }
    public function event()
    {
        //load the view
        $data['main_content'] = 'admin/products/event';
        $this->load->view('includes/template', $data);
    }
    public function purchase()
    {
        //load the view
        $data['main_content'] = 'admin/products/purchase';
        $this->load->view('includes/template', $data);
    }
    public function project_1()
    {
        //load the view
        $data['main_content'] = 'admin/products/project_1';
        $this->load->view('includes/template', $data);
    }
    public function project_2()
    {
        //load the view
        $data['main_content'] = 'admin/products/project_2';
        $this->load->view('includes/template', $data);
    }
    public function project_3()
    {
        //load the view
        $data['main_content'] = 'admin/products/project_3';
        $this->load->view('includes/template', $data);
    }
    public function project_4()
    {
        //load the view
        $data['main_content'] = 'admin/products/project_4';
        $this->load->view('includes/template', $data);
    }
    public function purchase_1()
    {
        //load the view
        $data['main_content'] = 'admin/products/purchase_1';
        $this->load->view('includes/template', $data);
    }
    public function purchase_2()
    {
        //load the view
        $data['main_content'] = 'admin/products/purchase_2';
        $this->load->view('includes/template', $data);
    }
    public function purchase_3()
    {
        //load the view
        $data['main_content'] = 'admin/products/purchase_3';
        $this->load->view('includes/template', $data);
    }
    public function purchase_4()
    {
        //load the view
        $data['main_content'] = 'admin/products/purchase_4';
        $this->load->view('includes/template', $data);
    }
    public function purchase_5()
    {
        //load the view
        $data['main_content'] = 'admin/products/purchase_5';
        $this->load->view('includes/template', $data);
    }
    public function join()
    {
        //load the view
        $data['main_content'] = 'admin/products/join';
        $this->load->view('includes/template', $data);
    }
    
    

}