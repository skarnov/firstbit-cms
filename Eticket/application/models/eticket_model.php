<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Eticket_Model extends CI_Model {
    
    public function search_the_startpoint()
    {
        $search=$this->input->post('search', true);
        if($search==NULL)
        {
            
        }
        else
        {
            $sql = "SELECT * FROM tbl_route WHERE route_startpoint LIKE '" . $search . "%' ORDER BY route_startpoint";
            $result = $this->db->query($sql)->result();
            return $result; 
        }
    }
    
    public function search_the_endpoint()
    {
        $search=$this->input->post('endpoint_search', true);
        if($search==NULL)
        {
            
        }
        else
        {
            $sql = "SELECT * FROM tbl_route WHERE route_endpoint LIKE '" . $search . "%' ORDER BY route_endpoint";
            $result = $this->db->query($sql)->result();
            return $result; 
        }
    }
    
    public function search_the_bus()
    {
        $search=$this->input->post('search', true);
        $endpoint_search=$this->input->post('endpoint_search', true);
        $date_of_journey=$this->input->post('date_of_journey', true);
        $sql = "SELECT * FROM tbl_trip AS t, tbl_bus AS b, tbl_bus_type AS y, tbl_brand AS d, tbl_coach AS c, tbl_seat AS s, tbl_ticket AS p, tbl_route AS r WHERE t.bus_id=b.bus_id AND t.bus_type_id=y.bus_type_id AND t.brand_id=d.brand_id AND t.coach_id=c.coach_id AND t.seat_id=s.seat_id AND t.ticket_id=p.ticket_id AND t.route_id=r.route_id AND r.route_startpoint='$search' AND r.route_endpoint='$endpoint_search' AND t.trip_date='$date_of_journey'";
        $result = $this->db->query($sql)->result();
        return $result; 
    }
    
    public function select_seat_info_by_id($seat_id)
    {
        $sql = "SELECT * FROM tbl_trip AS t, tbl_bus AS b, tbl_bus_type AS y, tbl_brand AS d, tbl_coach AS c, tbl_seat AS s, tbl_ticket AS p, tbl_route AS r WHERE t.bus_id=b.bus_id AND t.bus_type_id=y.bus_type_id AND t.brand_id=d.brand_id AND t.coach_id=c.coach_id AND t.seat_id=s.seat_id AND t.ticket_id=p.ticket_id AND t.route_id=r.route_id AND s.seat_id='$seat_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }
    
    public function user_login_check($data)
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('customer_email',$data['customer_email']);
        $this->db->where('customer_password', $data['customer_password']);
	$this->db->where('customer_status',1);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function save_customer_info()
    {
        $data=array();
        $data['customer_name'] = $this->input->post('customer_name', true);
        $data['customer_email'] = $this->input->post('customer_email', true);
        $data['customer_gender'] = $this->input->post('customer_gender', true);
        $data['customer_password'] = $this->input->post('customer_password', true);
        $data['customer_mobile'] = $this->input->post('customer_mobile', true);
        $data['customer_address'] = $this->input->post('customer_address', true);
        $this->db->insert('tbl_customer',$data);
    }
    
    public function select_customer_shipping_info($customer_id)
    {
        $sql = "SELECT * FROM tbl_customer WHERE customer_id='$customer_id' ";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }
    
    public function save_order_info($shipping_info)
    {
        $this->db->insert('tbl_shipping',$shipping_info);
        $shipping_id=$this->db->insert_id();
        $payment_data=array();
        $payment_data['payment_type'] = 2;
        $payment_data['payment_method'] = $this->session->userdata('payment_method', true);
        $payment_data['customer_id'] = $this->session->userdata('customer_id', true);
        $payment_data['shipping_id'] = $shipping_id;
        $this->db->insert('tbl_payment',$payment_data);
        $payment_id=$this->db->insert_id();        
        $data=array();
        $data['customer_id']=$this->session->userdata('customer_id', true);
        $data['shipping_id']=$shipping_id;
        $data['payment_id']=$payment_id;
        $data['order_total']= $this->session->userdata('grand_total', true);
        $data['invoice_date']= date('Y-m-d');
        $data['order_type']= 2;
        $this->db->insert('tbl_order',$data);
        $order_id=$this->db->insert_id();
        $ticket=$this->session->userdata('ticket');
        
        if($ticket['cart_1'] !=NULL)
        {
            $oddata=array();
            $oddata['order_id']=$order_id;
            $oddata['seat_id']=$ticket['seat_id'];
            $oddata['seat_name']=$ticket['cart_1'];
            $oddata['coach_name']=$ticket['coach_name'];
            $oddata['bus_name']=$ticket['bus_name'];
            $oddata['seat_price']=$ticket['price_1'];
            $oddata['seat_sales_quantity']=1;
            $this->db->insert('tbl_eticket_order_details',$oddata);   
            $sql = "UPDATE tbl_seat, tbl_eticket_order_details
            SET tbl_seat.available_seat = tbl_seat.available_seat - tbl_eticket_order_details.seat_sales_quantity 
            WHERE tbl_seat.seat_id = tbl_eticket_order_details.seat_id
            AND tbl_eticket_order_details.order_id = '$order_id' ";
            $this->db->query($sql);
            
            $seat=$oddata['seat_name'];
            $seat_id=$oddata['seat_id'];
            $seat_update = "UPDATE tbl_seat SET $seat='2' WHERE seat_id= '$seat_id'";
            $this->db->query($seat_update);
        }
        if($ticket['cart_2'] !=NULL)
        {
            $oddata=array();
            $oddata['order_id']=$order_id;
            $oddata['seat_id']=$ticket['seat_id'];
            $oddata['seat_name']=$ticket['cart_2'];
            $oddata['coach_name']=$ticket['coach_name'];
            $oddata['bus_name']=$ticket['bus_name'];
            $oddata['seat_price']=$ticket['price_2'];
            $oddata['seat_sales_quantity']=1;
            $this->db->insert('tbl_eticket_order_details',$oddata);   
            $sql = "UPDATE tbl_seat, tbl_eticket_order_details
            SET tbl_seat.available_seat = tbl_seat.available_seat - tbl_eticket_order_details.seat_sales_quantity 
            WHERE tbl_seat.seat_id = tbl_eticket_order_details.seat_id
            AND tbl_eticket_order_details.order_id = '$order_id' ";
            $this->db->query($sql);
            
            $seat=$oddata['seat_name'];
            $seat_id=$oddata['seat_id'];
            $seat_update = "UPDATE tbl_seat SET $seat='2' WHERE seat_id= '$seat_id'";
            $this->db->query($seat_update);
        }
        if($ticket['cart_3'] !=NULL)
        {
            $oddata=array();
            $oddata['order_id']=$order_id;
            $oddata['seat_id']=$ticket['seat_id'];
            $oddata['coach_name']=$ticket['coach_name'];
            $oddata['bus_name']=$ticket['bus_name'];
            $oddata['seat_name']=$ticket['cart_3'];
            $oddata['seat_price']=$ticket['price_3'];
            $oddata['seat_sales_quantity']=1;
            $this->db->insert('tbl_eticket_order_details',$oddata);    
            $sql = "UPDATE tbl_seat, tbl_eticket_order_details
            SET tbl_seat.available_seat = tbl_seat.available_seat - tbl_eticket_order_details.seat_sales_quantity 
            WHERE tbl_seat.seat_id = tbl_eticket_order_details.seat_id
            AND tbl_eticket_order_details.order_id = '$order_id' ";
            $this->db->query($sql);
            
            $seat=$oddata['seat_name'];
            $seat_id=$oddata['seat_id'];
            $seat_update = "UPDATE tbl_seat SET $seat='2' WHERE seat_id= '$seat_id'";
            $this->db->query($seat_update);
        }
        if($ticket['cart_4'] !=NULL)
        {
            $oddata=array();
            $oddata['order_id']=$order_id;
            $oddata['seat_id']=$ticket['seat_id'];
            $oddata['seat_name']=$ticket['cart_4'];
            $oddata['coach_name']=$ticket['coach_name'];
            $oddata['bus_name']=$ticket['bus_name'];
            $oddata['seat_price']=$ticket['price_4'];
            $oddata['seat_sales_quantity']=1;
            $this->db->insert('tbl_eticket_order_details',$oddata);    
            $sql = "UPDATE tbl_seat, tbl_eticket_order_details
            SET tbl_seat.available_seat = tbl_seat.available_seat - tbl_eticket_order_details.seat_sales_quantity 
            WHERE tbl_seat.seat_id = tbl_eticket_order_details.seat_id
            AND tbl_eticket_order_details.order_id = '$order_id' ";
            $this->db->query($sql);
            
            $seat=$oddata['seat_name'];
            $seat_id=$oddata['seat_id'];
            $seat_update = "UPDATE tbl_seat SET $seat='2' WHERE seat_id= '$seat_id'";
            $this->db->query($seat_update);
        }
        if($ticket['cart_5'] !=NULL)
        {
            $oddata=array();
            $oddata['order_id']=$order_id;
            $oddata['seat_id']=$ticket['seat_id'];
            $oddata['seat_name']=$ticket['cart_5'];
            $oddata['coach_name']=$ticket['coach_name'];
            $oddata['bus_name']=$ticket['bus_name'];
            $oddata['seat_price']=$ticket['price_5'];
            $oddata['seat_sales_quantity']=1;
            $this->db->insert('tbl_eticket_order_details',$oddata);  
            $sql = "UPDATE tbl_seat, tbl_eticket_order_details
            SET tbl_seat.available_seat = tbl_seat.available_seat - tbl_eticket_order_details.seat_sales_quantity 
            WHERE tbl_seat.seat_id = tbl_eticket_order_details.seat_id
            AND tbl_eticket_order_details.order_id = '$order_id' ";
            $this->db->query($sql);
            
            $seat=$oddata['seat_name'];
            $seat_id=$oddata['seat_id'];
            $seat_update = "UPDATE tbl_seat SET $seat='2' WHERE seat_id= '$seat_id'";
            $this->db->query($seat_update);
        }
        if($ticket['cart_6'] !=NULL)
        {
            $oddata=array();
            $oddata['order_id']=$order_id;
            $oddata['seat_id']=$ticket['seat_id'];
            $oddata['seat_name']=$ticket['cart_6'];
            $oddata['coach_name']=$ticket['coach_name'];
            $oddata['bus_name']=$ticket['bus_name'];
            $oddata['seat_price']=$ticket['price_6'];
            $oddata['seat_sales_quantity']=1;
            $this->db->insert('tbl_eticket_order_details',$oddata);   
            $sql = "UPDATE tbl_seat, tbl_eticket_order_details
            SET tbl_seat.available_seat = tbl_seat.available_seat - tbl_eticket_order_details.seat_sales_quantity 
            WHERE tbl_seat.seat_id = tbl_eticket_order_details.seat_id
            AND tbl_eticket_order_details.order_id = '$order_id' ";
            $this->db->query($sql);
            
            $seat=$oddata['seat_name'];
            $seat_id=$oddata['seat_id'];
            $seat_update = "UPDATE tbl_seat SET $seat='2' WHERE seat_id= '$seat_id'";
            $this->db->query($seat_update);
        }
        if($ticket['cart_7'] !=NULL)
        {
            $oddata=array();
            $oddata['order_id']=$order_id;
            $oddata['seat_id']=$ticket['seat_id'];
            $oddata['seat_name']=$ticket['cart_7'];
            $oddata['coach_name']=$ticket['coach_name'];
            $oddata['bus_name']=$ticket['bus_name'];
            $oddata['seat_price']=$ticket['price_7'];
            $oddata['seat_sales_quantity']=1;
            $this->db->insert('tbl_eticket_order_details',$oddata);  
            $sql = "UPDATE tbl_seat, tbl_eticket_order_details
            SET tbl_seat.available_seat = tbl_seat.available_seat - tbl_eticket_order_details.seat_sales_quantity 
            WHERE tbl_seat.seat_id = tbl_eticket_order_details.seat_id
            AND tbl_eticket_order_details.order_id = '$order_id' ";
            $this->db->query($sql);
            
            $seat=$oddata['seat_name'];
            $seat_id=$oddata['seat_id'];
            $seat_update = "UPDATE tbl_seat SET $seat='2' WHERE seat_id= '$seat_id'";
            $this->db->query($seat_update);
        }
        if($ticket['cart_8'] !=NULL)
        {
            $oddata=array();
            $oddata['order_id']=$order_id;
            $oddata['seat_id']=$ticket['seat_id'];
            $oddata['seat_name']=$ticket['cart_8'];
            $oddata['coach_name']=$ticket['coach_name'];
            $oddata['bus_name']=$ticket['bus_name'];
            $oddata['seat_price']=$ticket['price_8'];
            $oddata['seat_sales_quantity']=1;
            $this->db->insert('tbl_eticket_order_details',$oddata);   
            $sql = "UPDATE tbl_seat, tbl_eticket_order_details
            SET tbl_seat.available_seat = tbl_seat.available_seat - tbl_eticket_order_details.seat_sales_quantity 
            WHERE tbl_seat.seat_id = tbl_eticket_order_details.seat_id
            AND tbl_eticket_order_details.order_id = '$order_id' ";
            $this->db->query($sql);
            
            $seat=$oddata['seat_name'];
            $seat_id=$oddata['seat_id'];
            $seat_update = "UPDATE tbl_seat SET $seat='2' WHERE seat_id= '$seat_id'";
            $this->db->query($seat_update);
        } 
    }
    
    public function select_invoice_info($customer_id) 
    {
        $sql = "SELECT * FROM tbl_customer AS c, tbl_order AS o WHERE c.customer_id = '$customer_id' AND c.customer_id = o.customer_id ORDER BY o.order_id DESC LIMIT 1";
        $result = $this->db->query($sql)->row();
        return $result;
    }
   
}