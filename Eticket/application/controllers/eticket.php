<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Eticket extends CI_Controller {
    
    public function index()
    {
        $data = array();
        $data['title'] = 'Home';        
        $data['home'] = $this->load->view('home', $data, true);
        $this->load->view('master', $data);
    }
    
    public function route_startpoint_search()
    {
        $data = array();
        $data['search_startpoint'] = $this->eticket_model->search_the_startpoint();
        $this->load->view('startpoint-suggesstion-box',$data);
    }
    
    public function route_endpoint_search()
    {
        $data = array();
        $data['search_startpoint'] = $this->eticket_model->search_the_endpoint();
        $this->load->view('endpoint-suggesstion-box',$data);
    }
    
    public function search_bus()
    {
        $data = array();
        $data['title'] = 'Bus Ticket';
        $data['search_bus'] = $this->eticket_model->search_the_bus();
        $data['home'] = $this->load->view('search_bus', $data, true);
        $this->load->view('master',$data);
    }
    
    public function manage_bus_ticket($seat_id) 
    {
        $data = array();
        $data['title'] = 'Manage Bus Ticket';
        $data['seat_info'] = $this->eticket_model->select_seat_info_by_id($seat_id);
        $data['home'] = $this->load->view('manage_bus_ticket', $data, true);
        $this->load->view('master', $data);
    }
    
    public function login()
    {
        $data = array();
        $data['title'] = 'Login';        
        $data['home'] = $this->load->view('Login', $data, true);
        $this->load->view('master', $data);
    }
    
    public function register() 
    {
        $data = array();
        $data['title'] = 'Register';
        $data['home'] = $this->load->view('register', $data, true);
        $this->load->view('master', $data);
    }
    
    public function save_customer()
    {
        $this->form_validation->set_rules('customer_name', 'Name', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('customer_email', 'Email', 'required|valid_email|is_unique[tbl_customer.customer_email]');
        $this->form_validation->set_rules('customer_password', 'Password', 'trim|required|min_length[6]|max_length[250]|matches[confirm_password]|xss_clean');
        $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required');
        if ($this->form_validation->run() == False)
        {
            $data = array();
            $data['title'] = 'Register';
            $data['home'] = $this->load->view('register', $data, true);
            $this->load->view('master', $data);
        } 
        else 
        {
            $this->eticket_model->save_customer_info();
            $sdata = array();
            $sdata['save_customer'] = 'Success!';
            $this->session->set_userdata($sdata);
            redirect('eticket/register');
        }
    }
    
    public function logout()
    {
        $this->session->unset_userdata('customer_id');
        $this->session->unset_userdata('customer_name');
        $sdata['exception'] = 'You are Successfully Logout ';
        $this->session->set_userdata($sdata);
        redirect('eticket');
    }
}