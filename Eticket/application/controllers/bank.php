<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller {
    
    public function index()
    {
        $data = array();
        $data['title'] = 'Bank Transfer';
        $data['home'] = $this->load->view('bank', $data, true);
        $this->load->view('master', $data);
    }
}