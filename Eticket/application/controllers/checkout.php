<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class Checkout extends CI_Controller {

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
        $customer_id = $this->session->userdata('customer_id');
        $cart = array(
            'cart_1' => $this->input->post('cart_1'),
            'cart_2' => $this->input->post('cart_2'),
            'cart_3' => $this->input->post('cart_3'),
            'cart_4' => $this->input->post('cart_4'),
            'cart_5' => $this->input->post('cart_5'),
            'cart_6' => $this->input->post('cart_6'),
            'cart_7' => $this->input->post('cart_7'),
            'cart_8' => $this->input->post('cart_8'),
            'price_1' => $this->input->post('price_1'),
            'price_2' => $this->input->post('price_2'),
            'price_3' => $this->input->post('price_3'),
            'price_4' => $this->input->post('price_4'),
            'price_5' => $this->input->post('price_5'),
            'price_6' => $this->input->post('price_6'),
            'price_7' => $this->input->post('price_7'),
            'price_8' => $this->input->post('price_8'),
            'seat_id' => $this->input->post('seat_id'),
            'coach_name' => $this->input->post('coach_name'),
            'bus_name' => $this->input->post('bus_name'),
        );
        $this->session->set_userdata('ticket', $cart); 
        $data = array();
        $data['title'] = 'Checkout';
        $data['shipping_info'] = $this->eticket_model->select_customer_shipping_info($customer_id);
        $data['home'] = $this->load->view('shipping_form', $data, true);
        $this->load->view('master', $data);
    }
    
    public function save_shipping_form()
    {
        $shipping_data=array();
        $shipping_data['customer_id'] = $this->session->userdata('customer_id');
        $shipping_data['shipping_name'] = $this->input->post('shipping_name', true);
        $shipping_data['shipping_email'] = $this->input->post('shipping_email', true);
        $shipping_data['shipping_mobile'] = $this->input->post('shipping_mobile', true);
        $shipping_data['shipping_address'] = $this->input->post('shipping_address', true);   
        $this->session->set_userdata($shipping_data);
        redirect('checkout/payment_form');
    }
    
    public function payment_form() 
    {
        $shipping_data=$this->session->userdata('shipping_name');
        if($shipping_data !=NULL)
        {
            $data = array();
            $data['title'] = 'Payment';
            $data['home'] = $this->load->view('payment_form', $data, true);
            $this->load->view('master', $data);
        }
        else
        {
            redirect('checkout');
        }
    }
    
    public function save_payment_form()
    {
        $payment_data=array();
        $payment_data['payment_method'] = $this->input->post('payment_method', true);  
        $this->session->set_userdata($payment_data);
        if($payment_data['payment_method']=='Bkash')
        {
            redirect('bkash');
        }
        if($payment_data['payment_method']=='Bank')
        {
            redirect('bank');
        }
        else
        {
            redirect('checkout/confirm_order');
        }
    }
    
    public function confirm_order() 
    {
        $payment_data=$this->session->userdata('payment_method');
        if($payment_data !=NULL)
        {
            $shipping_data=array();
            $shipping_data['customer_id'] = $this->session->userdata('customer_id');
            $shipping_data['shipping_name'] = $this->session->userdata('shipping_name', true);
            $shipping_data['shipping_email'] = $this->session->userdata('shipping_email', true);
            $shipping_data['shipping_mobile'] = $this->session->userdata('shipping_mobile', true);
            $shipping_data['shipping_address'] = $this->session->userdata('shipping_address', true);
            $shipping_data['shipping_type'] = 2;
            $this->eticket_model->save_order_info($shipping_data);
//            $mdata = array();
//            $mdata['invoice_info'] = $this->eticket_model->select_invoice_info($shipping_data['customer_id']);     
//            $mdata['from_address'] = 'info@sds.com';
//            $mdata['admin_full_name'] = 'Invoice';
//            $mdata['to_address'] = $mdata['invoice_info']->customer_email;
//            $mdata['cc_address'] = 'info@sds.com';
//            $mdata['subject'] = 'Order Invoice';
//            $this->mailer_model->sendEmail($mdata, 'invoice');
            redirect('checkout/order_complete');
        }
        else
        {
            redirect('checkout/payment_form');
        }
    }

    public function order_complete() 
    {
        $this->cart->destroy();
        $this->session->unset_userdata('coupon_amount');
        $data = array();
        $data['title'] = 'Checkout';
        $data['home'] = $this->load->view('order_complete', $data, true);
        $this->load->view('master', $data);
    }
}