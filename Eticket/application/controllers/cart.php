<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class Cart extends CI_Controller {
        
    public function add_to_cart($seat_number,$seat_id)
    {
        $seat_booking = $this->eticket_model->select_seat_info_by_id($seat_id);   
        $data = array(
            'id' => $seat_number,
            'name' => $seat_id,
            'qty' => 1,
            'price' =>$seat_booking->ticket_price
        );
        $this->cart->insert($data);
        echo $this->load->view('cart');
    }
}