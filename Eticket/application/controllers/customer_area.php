<?php defined('BASEPATH') OR exit('No direct script access allowed');

session_start();

class Customer_Area extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $customer_id = $this->session->userdata('customer_id');
        if ($customer_id == NULL)
        {
            redirect('customer_login', 'refresh');
        }
    }
    
    public function index() 
    {
        $data = array();
        $data['title'] = 'Dashboard';
        $data['home'] = $this->load->view('dashboard', $data, true);
        $this->load->view('master', $data);
    }
    
 
    
}