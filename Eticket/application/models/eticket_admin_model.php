<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Eticket_Admin_Model extends CI_Model {
    
    public function check_forgot_password($data)
    {
        $sql="select * from tbl_admin where admin_email='$data'";
        $result = $this->db->query($sql)->row();
        return $result;
    }
    
    public function admin_login_check($data)
    {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_email', $data['admin_email']);
        $this->db->where('admin_password', $data['admin_password']);
        $this->db->where('admin_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    
    public function select_all_customer($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_customer ORDER BY customer_id DESC LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function search_the_customer($search)
    {
        $sql = "SELECT * FROM tbl_customer WHERE customer_mobile LIKE '%$search%' OR customer_email LIKE '%$search%'";
        $result = $this->db->query($sql)->result();
        return $result;   
    }
    
    public function deactive_customer_by_id($customer_id)
    {
        $this->db->set('customer_status',0);
        $this->db->where('customer_id',$customer_id);
        $this->db->update('tbl_customer');
    }
    
    public function active_customer_by_id($customer_id)
    {
        $this->db->set('customer_status',1);
        $this->db->where('customer_id',$customer_id);
        $this->db->update('tbl_customer');
    }
        
    public function delete_customer_by_id($customer_id)
    {
        $this->db->where('customer_id',$customer_id);
        $this->db->delete('tbl_customer');
    }
    
    public function save_bus_info()
    {
        $data=array();
        $data['bus_name'] = $this->input->post('bus_name', true);
        $this->db->insert('tbl_bus',$data);
    }
    
    public function select_all_bus($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_bus ORDER BY bus_id DESC LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_bus_by_id($bus_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_bus');
        $this->db->where('bus_id',$bus_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_bus_info()
    {
        $data=array();
        $data['bus_name'] = $this->input->post('bus_name', true);
        $bus_id = $this->input->post('bus_id', true);
        $this->db->where('bus_id',$bus_id);
        $this->db->update('tbl_bus',$data);
    }
    
    public function delete_bus_by_id($bus_id)
    {
        $this->db->where('bus_id',$bus_id);
        $this->db->delete('tbl_bus');
    }
    
    public function save_bus_type_info()
    {
        $data=array();
        $data['bus_type_name'] = $this->input->post('bus_type_name', true);
        $this->db->insert('tbl_bus_type',$data);
    }
    
    public function select_all_bus_type($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_bus_type ORDER BY bus_type_id DESC LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_bus_type_by_id($bus_type_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_bus_type');
        $this->db->where('bus_type_id',$bus_type_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_bus_type_info()
    {
        $data=array();
        $data['bus_type_name'] = $this->input->post('bus_type_name', true);
        $bus_type_id = $this->input->post('bus_type_id', true);
        $this->db->where('bus_type_id',$bus_type_id);
        $this->db->update('tbl_bus_type',$data);
    }
    
    public function delete_bus_type_by_id($bus_type_id)
    {
        $this->db->where('bus_type_id',$bus_type_id);
        $this->db->delete('tbl_bus_type');
    }
    
    public function save_brand_info()
    {
        $data=array();
        $data['brand_name'] = $this->input->post('brand_name', true);
        $this->db->insert('tbl_brand',$data);
    }
    
    public function select_all_brand($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_brand ORDER BY brand_id DESC LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_brand_by_id($brand_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_brand');
        $this->db->where('brand_id',$brand_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_brand_info()
    {
        $data=array();
        $data['brand_name'] = $this->input->post('brand_name', true);
        $brand_id = $this->input->post('brand_id', true);
        $this->db->where('brand_id',$brand_id);
        $this->db->update('tbl_brand',$data);
    }
    
    public function delete_brand_by_id($brand_id)
    {
        $this->db->where('brand_id',$brand_id);
        $this->db->delete('tbl_brand');
    }
    
    public function save_route_info()
    {
        $data=array();
        $data['route_startpoint'] = $this->input->post('route_startpoint', true);
        $data['route_endpoint'] = $this->input->post('route_endpoint', true);
        $this->db->insert('tbl_route',$data);
    }
    
    public function select_all_route($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_route ORDER BY route_id DESC LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_route_by_id($route_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_route');
        $this->db->where('route_id',$route_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_route_info()
    {
        $data=array();
        $data['route_startpoint'] = $this->input->post('route_startpoint', true);
        $data['route_endpoint'] = $this->input->post('route_endpoint', true);
        $route_id = $this->input->post('route_id', true);
        $this->db->where('route_id',$route_id);
        $this->db->update('tbl_route',$data);
    }
    
    public function delete_route_by_id($route_id)
    {
        $this->db->where('route_id',$route_id);
        $this->db->delete('tbl_route');
    }
    
    public function save_news_info()
    {
        $data=array();
        $data['news_title'] = $this->input->post('news_title', true);
        $data['news_type'] = 2;
        $this->db->insert('tbl_news',$data);
    }
    
    public function select_all_news($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_news WHERE news_type='2' ORDER BY news_id DESC LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_news_by_id($news_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('news_id',$news_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_news_info()
    {
        $data=array();
        $data['news_title'] = $this->input->post('news_title', true);
        $data['news_type'] = 2;
        $news_id = $this->input->post('news_id', true);
        $this->db->where('news_id',$news_id);
        $this->db->update('tbl_news',$data);
    }
    
    public function delete_news_by_id($news_id)
    {
        $this->db->where('news_id',$news_id);
        $this->db->delete('tbl_news');
    }
    
    public function save_coach_info()
    {
        $data=array();
        $data['coach_name'] = $this->input->post('coach_name', true);
        $this->db->insert('tbl_coach',$data);
    }
    
    public function select_all_coach($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_coach ORDER BY coach_id DESC LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_coach_by_id($coach_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_coach');
        $this->db->where('coach_id',$coach_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_coach_info()
    {
        $data=array();
        $data['coach_name'] = $this->input->post('coach_name', true);
        $coach_id = $this->input->post('coach_id', true);
        $this->db->where('coach_id',$coach_id);
        $this->db->update('tbl_coach',$data);
    }
    
    public function delete_coach_by_id($coach_id)
    {
        $this->db->where('coach_id',$coach_id);
        $this->db->delete('tbl_coach');
    }
    
    public function save_ticket_info()
    {
        $data=array();
        $data['ticket_price'] = $this->input->post('ticket_price', true);
        $this->db->insert('tbl_ticket',$data);
    }
    
    public function select_all_ticket($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_ticket ORDER BY ticket_id DESC LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_ticket_by_id($ticket_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_ticket');
        $this->db->where('ticket_id',$ticket_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_ticket_info()
    {
        $data=array();
        $data['ticket_price'] = $this->input->post('ticket_price', true);
        $ticket_id = $this->input->post('ticket_id', true);
        $this->db->where('ticket_id',$ticket_id);
        $this->db->update('tbl_ticket',$data);
    }
    
    public function delete_ticket_by_id($ticket_id)
    {
        $this->db->where('ticket_id',$ticket_id);
        $this->db->delete('tbl_ticket');
    }

    public function save_banner_info($data)
    {
        $this->db->insert('tbl_banner',$data);
    }
    
    public function select_banner_by_id($banner_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_banner');
        $this->db->where('banner_id',$banner_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_banner_info($data)
    {
        $slide_id=$this->input->post('banner_id',true);
        $this->db->where('banner_id',$slide_id);
        $this->db->update('tbl_banner',$data);
    }
    
    public function select_all_banner()
    {
        $this->db->select('*');
        $this->db->from('tbl_banner');
        $this->db->where('banner_type','2');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function delete_banner_by_id($banner_id)
    {
        $this->db->where('banner_id',$banner_id);
        $this->db->delete('tbl_banner');
    }
    
    public function save_coupon_info()
    {
        $data=array();
        $data['coupon_code'] = $this->input->post('coupon_code', true);
        $data['coupon_amount'] = $this->input->post('coupon_amount', true);
        $data['coupon_validity'] = $this->input->post('coupon_validity', true);
        $data['coupon_status'] = $this->input->post('coupon_status', true);
        $data['coupon_type'] = 2;
        $this->db->insert('tbl_coupon',$data);
    }
    
    public function select_all_coupon($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_coupon WHERE coupon_type='2' ORDER BY coupon_id DESC LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_coupon_by_id($coupon_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_coupon');
        $this->db->where('coupon_id',$coupon_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_coupon_info()
    {
        $data=array();
        $data['coupon_code'] = $this->input->post('coupon_code', true);
        $data['coupon_amount'] = $this->input->post('coupon_amount', true);
        $data['coupon_validity'] = $this->input->post('coupon_validity', true);
        $data['coupon_status'] = $this->input->post('coupon_status', true);
        $data['coupon_type'] = 2;
        $coupon_id = $this->input->post('coupon_id', true);
        $this->db->where('coupon_id',$coupon_id);
        $this->db->update('tbl_coupon',$data);
    }
    
    public function delete_coupon_by_id($coupon_id)
    {
        $this->db->where('coupon_id',$coupon_id);
        $this->db->delete('tbl_coupon');
    }
    
    public function save_seat_info()
    {
        $data=array();
        $data['available_seat'] = $this->input->post('available_seat', true);
        $data['seat_name'] = $this->input->post('seat_name', true);
        $data['seat_row'] = $this->input->post('seat_row', true);
        $data['seat_column'] = $this->input->post('seat_column', true);
        $data['a1'] = $this->input->post('a1', true);
        $data['a2'] = $this->input->post('a2', true);
        $data['a3'] = $this->input->post('a3', true);
        $data['a4'] = $this->input->post('a4', true);
        $data['a5'] = $this->input->post('a5', true);
        $data['b1'] = $this->input->post('b1', true);
        $data['b2'] = $this->input->post('b2', true);
        $data['b3'] = $this->input->post('b3', true);
        $data['b4'] = $this->input->post('b4', true);
        $data['b5'] = $this->input->post('b5', true);
        $data['c1'] = $this->input->post('c1', true);
        $data['c2'] = $this->input->post('c2', true);
        $data['c3'] = $this->input->post('c3', true);
        $data['c4'] = $this->input->post('c4', true);
        $data['c5'] = $this->input->post('c5', true);
        $data['d1'] = $this->input->post('d1', true);
        $data['d2'] = $this->input->post('d2', true);
        $data['d3'] = $this->input->post('d3', true);
        $data['d4'] = $this->input->post('d4', true);
        $data['d5'] = $this->input->post('d5', true);
        $data['e1'] = $this->input->post('e1', true);
        $data['e2'] = $this->input->post('e2', true);
        $data['e3'] = $this->input->post('e3', true);
        $data['e4'] = $this->input->post('e4', true);
        $data['e5'] = $this->input->post('e5', true);
        $data['f1'] = $this->input->post('f1', true);
        $data['f2'] = $this->input->post('f2', true);
        $data['f3'] = $this->input->post('f3', true);
        $data['f4'] = $this->input->post('f4', true);
        $data['f5'] = $this->input->post('f5', true);
        $data['g1'] = $this->input->post('g1', true);
        $data['g2'] = $this->input->post('g2', true);
        $data['g3'] = $this->input->post('g3', true);
        $data['g4'] = $this->input->post('g4', true);
        $data['g5'] = $this->input->post('g5', true);
        $data['h1'] = $this->input->post('h1', true);
        $data['h2'] = $this->input->post('h2', true);
        $data['h3'] = $this->input->post('h3', true);
        $data['h4'] = $this->input->post('h4', true);
        $data['h5'] = $this->input->post('h5', true);
        $data['i1'] = $this->input->post('i1', true);
        $data['i2'] = $this->input->post('i2', true);
        $data['i3'] = $this->input->post('i3', true);
        $data['i4'] = $this->input->post('i4', true);
        $data['i5'] = $this->input->post('i5', true);
        $data['j1'] = $this->input->post('j1', true);
        $data['j2'] = $this->input->post('j2', true);
        $data['j3'] = $this->input->post('j3', true);
        $data['j4'] = $this->input->post('j4', true);
        $data['j5'] = $this->input->post('j5', true);
        $data['k1'] = $this->input->post('k1', true);
        $data['k2'] = $this->input->post('k2', true);
        $data['k3'] = $this->input->post('k3', true);
        $data['k4'] = $this->input->post('k4', true);
        $data['k5'] = $this->input->post('k5', true);
        $this->db->insert('tbl_seat',$data);
    }
    
    public function select_all_seat($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_seat ORDER BY seat_id DESC LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
        
    public function select_seat_by_id($seat_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_seat');
        $this->db->where('seat_id',$seat_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_seat_info()
    {
        $data=array();
        $data['available_seat'] = $this->input->post('available_seat', true);
        $data['seat_name'] = $this->input->post('seat_name', true);
        $data['seat_row'] = $this->input->post('seat_row', true);
        $data['seat_column'] = $this->input->post('seat_column', true);
        $data['a1'] = $this->input->post('a1', true);
        $data['a2'] = $this->input->post('a2', true);
        $data['a3'] = $this->input->post('a3', true);
        $data['a4'] = $this->input->post('a4', true);
        $data['a5'] = $this->input->post('a5', true);
        $data['b1'] = $this->input->post('b1', true);
        $data['b2'] = $this->input->post('b2', true);
        $data['b3'] = $this->input->post('b3', true);
        $data['b4'] = $this->input->post('b4', true);
        $data['b5'] = $this->input->post('b5', true);
        $data['c1'] = $this->input->post('c1', true);
        $data['c2'] = $this->input->post('c2', true);
        $data['c3'] = $this->input->post('c3', true);
        $data['c4'] = $this->input->post('c4', true);
        $data['c5'] = $this->input->post('c5', true);
        $data['d1'] = $this->input->post('d1', true);
        $data['d2'] = $this->input->post('d2', true);
        $data['d3'] = $this->input->post('d3', true);
        $data['d4'] = $this->input->post('d4', true);
        $data['d5'] = $this->input->post('d5', true);
        $data['e1'] = $this->input->post('e1', true);
        $data['e2'] = $this->input->post('e2', true);
        $data['e3'] = $this->input->post('e3', true);
        $data['e4'] = $this->input->post('e4', true);
        $data['e5'] = $this->input->post('e5', true);
        $data['f1'] = $this->input->post('f1', true);
        $data['f2'] = $this->input->post('f2', true);
        $data['f3'] = $this->input->post('f3', true);
        $data['f4'] = $this->input->post('f4', true);
        $data['f5'] = $this->input->post('f5', true);
        $data['g1'] = $this->input->post('g1', true);
        $data['g2'] = $this->input->post('g2', true);
        $data['g3'] = $this->input->post('g3', true);
        $data['g4'] = $this->input->post('g4', true);
        $data['g5'] = $this->input->post('g5', true);
        $data['h1'] = $this->input->post('h1', true);
        $data['h2'] = $this->input->post('h2', true);
        $data['h3'] = $this->input->post('h3', true);
        $data['h4'] = $this->input->post('h4', true);
        $data['h5'] = $this->input->post('h5', true);
        $data['i1'] = $this->input->post('i1', true);
        $data['i2'] = $this->input->post('i2', true);
        $data['i3'] = $this->input->post('i3', true);
        $data['i4'] = $this->input->post('i4', true);
        $data['i5'] = $this->input->post('i5', true);
        $data['j1'] = $this->input->post('j1', true);
        $data['j2'] = $this->input->post('j2', true);
        $data['j3'] = $this->input->post('j3', true);
        $data['j4'] = $this->input->post('j4', true);
        $data['j5'] = $this->input->post('j5', true);
        $data['k1'] = $this->input->post('k1', true);
        $data['k2'] = $this->input->post('k2', true);
        $data['k3'] = $this->input->post('k3', true);
        $data['k4'] = $this->input->post('k4', true);
        $data['k5'] = $this->input->post('k5', true);
        $seat_id = $this->input->post('seat_id', true);
        $this->db->where('seat_id',$seat_id);
        $this->db->update('tbl_seat',$data);
    }
    
    public function delete_seat_by_id($seat_id)
    {
        $this->db->where('seat_id',$seat_id);
        $this->db->delete('tbl_seat');
    }
    
    public function select_all_active_bus()
    {
        $this->db->select('*');
        $this->db->from('tbl_bus');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function select_all_active_bus_type()
    {
        $this->db->select('*');
        $this->db->from('tbl_bus_type');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function select_all_active_brand()
    {
        $this->db->select('*');
        $this->db->from('tbl_brand');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function select_all_active_coach()
    {
        $this->db->select('*');
        $this->db->from('tbl_coach');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function select_all_active_seat()
    {
        $this->db->select('*');
        $this->db->from('tbl_seat');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function select_all_active_ticket()
    {
        $this->db->select('*');
        $this->db->from('tbl_ticket');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function select_all_active_route()
    {
        $this->db->select('*');
        $this->db->from('tbl_route');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function save_trip_info()
    {
        $data=array();
        $data['bus_id'] = $this->input->post('bus_id', true);
        $data['bus_type_id'] = $this->input->post('bus_type_id', true);
        $data['brand_id'] = $this->input->post('brand_id', true);
        $data['coach_id'] = $this->input->post('coach_id', true);
        $data['seat_id'] = $this->input->post('seat_id', true);
        $data['ticket_id'] = $this->input->post('ticket_id', true);
        $data['ticket_old_price'] = $this->input->post('ticket_old_price', true);
        $data['route_id'] = $this->input->post('route_id', true);
        $data['trip_date'] = $this->input->post('trip_date', true);
        $data['trip_time'] = $this->input->post('trip_time', true);
        $data['trip_arrival_time'] = $this->input->post('trip_arrival_time', true);
        $this->db->insert('tbl_trip',$data);
    }
    
    public function select_all_trip($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_trip AS t, tbl_bus AS b, tbl_bus_type AS y, tbl_brand AS d, tbl_coach AS c, tbl_seat AS s, tbl_ticket AS p, tbl_route AS r WHERE t.bus_id=b.bus_id AND t.bus_type_id=y.bus_type_id AND t.brand_id=d.brand_id AND t.coach_id=c.coach_id AND t.seat_id=s.seat_id AND t.ticket_id=p.ticket_id AND t.route_id=r.route_id ORDER BY t.trip_id DESC LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_trip_by_id($trip_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_trip');
        $this->db->where('trip_id',$trip_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_trip_info()
    {
        $data=array();
        $data['bus_id'] = $this->input->post('bus_id', true);
        $data['bus_type_id'] = $this->input->post('bus_type_id', true);
        $data['brand_id'] = $this->input->post('brand_id', true);
        $data['coach_id'] = $this->input->post('coach_id', true);
        $data['seat_id'] = $this->input->post('seat_id', true);
        $data['ticket_id'] = $this->input->post('ticket_id', true);
        $data['ticket_old_price'] = $this->input->post('ticket_old_price', true);
        $data['route_id'] = $this->input->post('route_id', true);
        $data['trip_date'] = $this->input->post('trip_date', true);
        $data['trip_time'] = $this->input->post('trip_time', true);
        $data['trip_arrival_time'] = $this->input->post('trip_arrival_time', true);
        $trip_id = $this->input->post('trip_id', true);
        $this->db->where('trip_id',$trip_id);
        $this->db->update('tbl_trip',$data);
    }
    
    public function delete_trip_by_id($trip_id)
    {
        $this->db->where('trip_id',$trip_id);
        $this->db->delete('tbl_trip');
    }

    public function select_sales_report_info($start,$end)
    {
        $sql = "SELECT * FROM tbl_order AS o, tbl_customer AS c WHERE o.customer_id=c.customer_id AND order_status=1 AND order_type='2' AND invoice_date BETWEEN '$start' AND '$end' ";
        $result = $this->db->query($sql)->result();
        return $result;   
    }
    
    public function select_total_amount($start,$end)
    {
        $sql = "SELECT SUM(order_total) AS total FROM tbl_order WHERE order_status=1 AND order_type='2' AND (invoice_date BETWEEN '$start' AND '$end')";
        $result = $this->db->query($sql)->row();
        return $result;   
    }
   
    public function select_all_sale($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_order AS o, tbl_customer AS c, tbl_payment AS p WHERE o.customer_id=c.customer_id AND o.payment_id=p.payment_id AND order_status='1' AND order_type='2' ORDER BY o.order_id DESC LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function delete_sale_by_id($sale_id)
    {
        $this->db->where('order_id',$sale_id);
        $this->db->delete('tbl_order');
    }
    
    public function select_all_order($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_order AS o, tbl_customer AS c, tbl_payment AS p WHERE o.customer_id=c.customer_id AND o.payment_id=p.payment_id AND order_status='0' AND order_type='2' ORDER BY o.order_id DESC LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_order_by_id($order_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_eticket_order_details');
        $this->db->where('order_id',$order_id);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function select_invoice_info($order_id)
    {
        $sql = "SELECT * FROM tbl_order AS o, tbl_customer AS c, tbl_shipping AS s, tbl_payment AS p WHERE o.customer_id=c.customer_id AND o.payment_id=p.payment_id AND o.shipping_id=s.shipping_id AND o.order_status='0' AND o.order_type='2' AND o.order_id='$order_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }
    
    public function paid($order_id)
    {
        $this->db->set('order_status',1);
        $this->db->where('order_id',$order_id);
        $this->db->update('tbl_order');
    }
    
    public function delete_order_by_id($order_id)
    {
        $this->db->where('order_id',$order_id);
        $this->db->delete('tbl_order');
    }
}