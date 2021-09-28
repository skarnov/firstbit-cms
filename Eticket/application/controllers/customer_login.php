<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_Login extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $customer_id = $this->session->userdata('customer_id');
        if ($customer_id != NULL)
        {
            redirect('checkout', 'refresh');
        }
    }
    
    public function index()
    {
        $data = array();
        $data['title'] = 'Login';
        $data['home'] = $this->load->view('customer_login', $data, true);
        $this->load->view('master', $data);
    }
    
    public function customer_login_check()
    { 
        $data = array();
        $data['customer_email'] = $this->input->post('customer_email', true);
        $data['customer_password'] = $this->input->post('customer_password', true);
        $result = $this->eticket_model->user_login_check($data);    
        $sdata = array();
        if ($result != NULL)
        {
            $sdata['customer_id'] = $result->customer_id;
            $sdata['customer_name'] = $result->customer_name;
            $this->session->set_userdata($sdata);
            redirect('checkout');
        } 
        if ($result == NULL)
        {
            $sdata['exception'] = 'Your Email addresses or password do not match';
            $this->session->set_userdata($sdata);
            redirect('customer_login');
        }
    } 
}