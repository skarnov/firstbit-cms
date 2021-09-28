<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bkash extends CI_Controller {
    
    public function index()
    {
        $data = array();
        $data['title'] = 'Bkash';
        $data['home'] = $this->load->view('bkash', $data, true);
        $this->load->view('master', $data);
    }
}