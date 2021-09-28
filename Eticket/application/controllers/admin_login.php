<?php defined('BASEPATH') OR exit('No direct script access allowed');

session_start();

class Admin_Login extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $admin_level = $this->session->userdata('admin_level');
        if ($admin_level == '3')
        {
            redirect('eticket_admin', 'refresh');
        }
    }
    
    public function index()
    {
        $this->load->view('admin/admin_login');
    }

    public function check_admin_login()
    {
        $data = array();
        $data['admin_email'] = $this->input->post('admin_email', true);
        $data['admin_password'] = $this->input->post('admin_password', true);
        $this->form_validation->set_rules('admin_email', 'Email', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('admin_password', 'Password', 'trim|required|min_length[6]|max_length[250]|xss_clean');
        if($this->form_validation->run() == False)
        {
            $this->load->view('admin/admin_login');
        }
        else
        {
            $result = $this->eticket_admin_model->admin_login_check($data);
            $sdata = array();
            if ($result)
            {
                $sdata['admin_id'] = $result->admin_id;
                $sdata['admin_name'] = $result->admin_name;
                $sdata['admin_level'] = $result->admin_level;
                $sdata['admin_date_time'] = $result->admin_date_time;
                $this->session->set_userdata($sdata);
                redirect('eticket_admin');
            } 
            else
            {
                $sdata['exception'] = 'Your Email / Password Invalide !';
                $this->session->set_userdata($sdata);
                redirect('admin_login');
            }
        }
    }
    
    public function forgot_password() 
    {
        $this->load->view('admin/forgot_password');
    }
    
    public function reset_password()
    {
        $this->load->library('email');
        $this->load->model('mailer_model');
        $data = $this->input->post('admin_email', true);
        $result = $this->eticket_admin_model->check_forgot_password($data);
        $password = $result->admin_password;
        if ($password) {
            $mdata = array();
            $mdata['from_address'] = '';
            $mdata['admin_full_name'] = '';
            $mdata['to_address'] = $data;
            $mdata['subject'] = '';
            $mdata['admin_password'] = $password;
            $this->mailer_model->forget_password($mdata, 'forget_password_email');
            redirect('admin_login/forgot_password');
        } else {
            echo 'Your password is not exists our Database';
            redirect('admin_login/forgot_password');
        }
    }
}