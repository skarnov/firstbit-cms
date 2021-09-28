<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Eticket_Admin extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $admin_level = $this->session->userdata('admin_level');
        if ($admin_level != '3') 
        {
            redirect('admin_login', 'refresh');
        }
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
    
    public function index()
    {
        $data = array();
        $data['title'] = 'Dashboard';        
        $data['dashboard'] = $this->load->view('admin/dashboard', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function logout()
    {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('admin_level');
        $this->session->unset_userdata('admin_date_time');
        $sdata['exception'] = 'You are Successfully Logout ';
        $this->session->set_userdata($sdata);
        redirect('admin_login');
    }
    
    public function manage_customer()
    {
        $data = array();
        $data['title'] = 'Manage Customer';
        $config['base_url'] = base_url() . 'eticket_admin/manage_customer/';
        $config['total_rows'] = $this->db->count_all('tbl_customer');
        $config['per_page'] = '8';
        /** STYLE PAGINATION **/
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /** END STYLE PAGINATION **/
        $this->pagination->initialize($config);
        $data['all_customer'] = $this->eticket_admin_model->select_all_customer($config['per_page'], $this->uri->segment(3));
        $data['dashboard'] = $this->load->view('admin/manage_customer', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function customer_search($search)
    {
        $data = array();
        $data['search_customer'] = $this->eticket_admin_model->search_the_customer($search);
        $this->load->view('admin/search_customer',$data);
    }
    
    public function deactive_customer($customer_id) 
    {
        $this->eticket_admin_model->deactive_customer_by_id($customer_id);
        redirect('eticket_admin/manage_customer');
    }

    public function active_customer($customer_id)
    {
        $this->eticket_admin_model->active_customer_by_id($customer_id);
        redirect('eticket_admin/manage_customer');
    }

    public function delete_customer($customer_id) 
    {
        $this->eticket_admin_model->delete_customer_by_id($customer_id);
        redirect('eticket_admin/manage_customer');
    }
    
    public function add_bus()
    {
        $data = array();
        $data['title'] = 'New Bus';
        $data['dashboard'] = $this->load->view('admin/add_bus', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_bus()
    {
        $this->eticket_admin_model->save_bus_info();
        $sdata = array();
        $sdata['save_bus'] = 'Bus Saved';
        $this->session->set_userdata($sdata);
        redirect('eticket_admin/add_bus');
    }
    
    public function manage_bus()
    {
        $data = array();
        $data['title'] = 'Manage Bus';
        $config['base_url'] = base_url() . 'eticket_admin/manage_bus/';
        $config['total_rows'] = $this->db->count_all('tbl_bus');
        $config['per_page'] = '8';
        /** STYLE PAGINATION **/
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /** END STYLE PAGINATION **/
        $this->pagination->initialize($config);
        $data['all_bus'] = $this->eticket_admin_model->select_all_bus($config['per_page'], $this->uri->segment(3));
        $data['dashboard'] = $this->load->view('admin/manage_bus', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function edit_bus($bus_id) 
    {
        $data = array();
        $data['title'] = 'Edit Bus';
        $data['bus_info'] = $this->eticket_admin_model->select_bus_by_id($bus_id);
        $data['dashboard'] = $this->load->view('admin/edit_bus', $data, true);
        $sdata = array();
        $sdata['edit_bus'] = 'Update Bus Product Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }

    public function update_bus() 
    {
        $this->eticket_admin_model->update_bus_info();
        redirect('eticket_admin/manage_bus');
    }
    
    public function delete_bus($bus_id) 
    {
        $this->eticket_admin_model->delete_bus_by_id($bus_id);
        redirect('eticket_admin/manage_bus');
    }
    
    public function add_bus_type()
    {
        $data = array();
        $data['title'] = 'New Bus Type';
        $data['dashboard'] = $this->load->view('admin/add_bus_type', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_bus_type()
    {
        $this->eticket_admin_model->save_bus_type_info();
        $sdata = array();
        $sdata['save_bus_type'] = 'Bus Type Saved';
        $this->session->set_userdata($sdata);
        redirect('eticket_admin/add_bus_type');
    }
    
    public function manage_bus_type()
    {
        $data = array();
        $data['title'] = 'Manage Bus Type';
        $config['base_url'] = base_url() . 'eticket_admin/manage_bus_type/';
        $config['total_rows'] = $this->db->count_all('tbl_bus_type');
        $config['per_page'] = '8';
        /** STYLE PAGINATION **/
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /** END STYLE PAGINATION **/
        $this->pagination->initialize($config);
        $data['all_bus_type'] = $this->eticket_admin_model->select_all_bus_type($config['per_page'], $this->uri->segment(3));
        $data['dashboard'] = $this->load->view('admin/manage_bus_type', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function edit_bus_type($bus_type_id) 
    {
        $data = array();
        $data['title'] = 'Edit Bus Type';
        $data['bus_type_info'] = $this->eticket_admin_model->select_bus_type_by_id($bus_type_id);
        $data['dashboard'] = $this->load->view('admin/edit_bus_type', $data, true);
        $sdata = array();
        $sdata['edit_bus_type'] = 'Update Bus Type Product Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }

    public function update_bus_type() 
    {
        $this->eticket_admin_model->update_bus_type_info();
        redirect('eticket_admin/manage_bus_type');
    }
    
    public function delete_bus_type($bus_type_id) 
    {
        $this->eticket_admin_model->delete_bus_type_by_id($bus_type_id);
        redirect('eticket_admin/manage_bus_type');
    }

    public function add_brand()
    {
        $data = array();
        $data['title'] = 'New Brand';
        $data['dashboard'] = $this->load->view('admin/add_brand', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_brand()
    {
        $this->eticket_admin_model->save_brand_info();
        $sdata = array();
        $sdata['save_brand'] = 'Brand Saved';
        $this->session->set_userdata($sdata);
        redirect('eticket_admin/add_brand');
    }
    
    public function manage_brand()
    {
        $data = array();
        $data['title'] = 'Manage Brand';
        $config['base_url'] = base_url() . 'eticket_admin/manage_brand/';
        $config['total_rows'] = $this->db->count_all('tbl_brand');
        $config['per_page'] = '8';
        /** STYLE PAGINATION **/
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /** END STYLE PAGINATION **/
        $this->pagination->initialize($config);
        $data['all_brand'] = $this->eticket_admin_model->select_all_brand($config['per_page'], $this->uri->segment(3));
        $data['dashboard'] = $this->load->view('admin/manage_brand', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function edit_brand($brand_id) 
    {
        $data = array();
        $data['title'] = 'Edit Brand';
        $data['brand_info'] = $this->eticket_admin_model->select_brand_by_id($brand_id);
        $data['dashboard'] = $this->load->view('admin/edit_brand', $data, true);
        $sdata = array();
        $sdata['edit_brand'] = 'Update Brand Product Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }

    public function update_brand() 
    {
        $this->eticket_admin_model->update_brand_info();
        redirect('eticket_admin/manage_brand');
    }
    
    public function delete_brand($brand_id) 
    {
        $this->eticket_admin_model->delete_brand_by_id($brand_id);
        redirect('eticket_admin/manage_brand');
    }

    public function add_route()
    {
        $data = array();
        $data['title'] = 'New Route';
        $data['dashboard'] = $this->load->view('admin/add_route', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_route()
    {
        $this->eticket_admin_model->save_route_info();
        $sdata = array();
        $sdata['save_route'] = 'Route Saved';
        $this->session->set_userdata($sdata);
        redirect('eticket_admin/add_route');
    }
    
    public function manage_route()
    {
        $data = array();
        $data['title'] = 'Manage Route';
        $config['base_url'] = base_url() . 'eticket_admin/manage_route/';
        $config['total_rows'] = $this->db->count_all('tbl_route');
        $config['per_page'] = '8';
        /** STYLE PAGINATION **/
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /** END STYLE PAGINATION **/
        $this->pagination->initialize($config);
        $data['all_route'] = $this->eticket_admin_model->select_all_route($config['per_page'], $this->uri->segment(3));
        $data['dashboard'] = $this->load->view('admin/manage_route', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function edit_route($route_id) 
    {
        $data = array();
        $data['title'] = 'Edit Route';
        $data['route_info'] = $this->eticket_admin_model->select_route_by_id($route_id);
        $data['dashboard'] = $this->load->view('admin/edit_route', $data, true);
        $sdata = array();
        $sdata['edit_route'] = 'Update Route Product Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }

    public function update_route() 
    {
        $this->eticket_admin_model->update_route_info();
        redirect('eticket_admin/manage_route');
    }
    
    public function delete_route($route_id) 
    {
        $this->eticket_admin_model->delete_route_by_id($route_id);
        redirect('eticket_admin/manage_route');
    }

    public function add_news()
    {
        $data = array();
        $data['title'] = 'New News';
        $data['dashboard'] = $this->load->view('admin/add_news', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_news()
    {
        $this->eticket_admin_model->save_news_info();
        $sdata = array();
        $sdata['save_news'] = 'News Saved';
        $this->session->set_userdata($sdata);
        redirect('eticket_admin/add_news');
    }
    
    public function manage_news()
    {
        $data = array();
        $data['title'] = 'Manage News';
        $config['base_url'] = base_url() . 'eticket_admin/manage_news/';
        $config['total_rows'] = $this->db->count_all('tbl_news');
        $config['per_page'] = '8';
        /** STYLE PAGINATION **/
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /** END STYLE PAGINATION **/
        $this->pagination->initialize($config);
        $data['all_news'] = $this->eticket_admin_model->select_all_news($config['per_page'], $this->uri->segment(3));
        $data['dashboard'] = $this->load->view('admin/manage_news', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function edit_news($news_id) 
    {
        $data = array();
        $data['title'] = 'Edit News';
        $data['news_info'] = $this->eticket_admin_model->select_news_by_id($news_id);
        $data['dashboard'] = $this->load->view('admin/edit_news', $data, true);
        $sdata = array();
        $sdata['edit_news'] = 'Update News Product Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }

    public function update_news() 
    {
        $this->eticket_admin_model->update_news_info();
        redirect('eticket_admin/manage_news');
    }
    
    public function delete_news($news_id) 
    {
        $this->eticket_admin_model->delete_news_by_id($news_id);
        redirect('eticket_admin/manage_news');
    }

    public function add_coach()
    {
        $data = array();
        $data['title'] = 'New Coach';
        $data['dashboard'] = $this->load->view('admin/add_coach', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_coach()
    {
        $this->eticket_admin_model->save_coach_info();
        $sdata = array();
        $sdata['save_coach'] = 'Coach Saved';
        $this->session->set_userdata($sdata);
        redirect('eticket_admin/add_coach');
    }
    
    public function manage_coach()
    {
        $data = array();
        $data['title'] = 'Manage Coach';
        $config['base_url'] = base_url() . 'eticket_admin/manage_coach/';
        $config['total_rows'] = $this->db->count_all('tbl_coach');
        $config['per_page'] = '8';
        /** STYLE PAGINATION **/
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /** END STYLE PAGINATION **/
        $this->pagination->initialize($config);
        $data['all_coach'] = $this->eticket_admin_model->select_all_coach($config['per_page'], $this->uri->segment(3));
        $data['dashboard'] = $this->load->view('admin/manage_coach', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function edit_coach($coach_id) 
    {
        $data = array();
        $data['title'] = 'Edit Coach';
        $data['coach_info'] = $this->eticket_admin_model->select_coach_by_id($coach_id);
        $data['dashboard'] = $this->load->view('admin/edit_coach', $data, true);
        $sdata = array();
        $sdata['edit_coach'] = 'Update Coach Product Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }

    public function update_coach() 
    {
        $this->eticket_admin_model->update_coach_info();
        redirect('eticket_admin/manage_coach');
    }
    
    public function delete_coach($coach_id) 
    {
        $this->eticket_admin_model->delete_coach_by_id($coach_id);
        redirect('eticket_admin/manage_coach');
    }

    public function add_ticket()
    {
        $data = array();
        $data['title'] = 'New Ticket';
        $data['dashboard'] = $this->load->view('admin/add_ticket', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_ticket()
    {
        $this->eticket_admin_model->save_ticket_info();
        $sdata = array();
        $sdata['save_ticket'] = 'Ticket Saved';
        $this->session->set_userdata($sdata);
        redirect('eticket_admin/add_ticket');
    }
    
    public function manage_ticket()
    {
        $data = array();
        $data['title'] = 'Manage Ticket';
        $config['base_url'] = base_url() . 'eticket_admin/manage_ticket/';
        $config['total_rows'] = $this->db->count_all('tbl_ticket');
        $config['per_page'] = '8';
        /** STYLE PAGINATION **/
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /** END STYLE PAGINATION **/
        $this->pagination->initialize($config);
        $data['all_ticket'] = $this->eticket_admin_model->select_all_ticket($config['per_page'], $this->uri->segment(3));
        $data['dashboard'] = $this->load->view('admin/manage_ticket', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function edit_ticket($ticket_id) 
    {
        $data = array();
        $data['title'] = 'Edit Ticket';
        $data['ticket_info'] = $this->eticket_admin_model->select_ticket_by_id($ticket_id);
        $data['dashboard'] = $this->load->view('admin/edit_ticket', $data, true);
        $sdata = array();
        $sdata['edit_ticket'] = 'Update Ticket Product Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }

    public function update_ticket() 
    {
        $this->eticket_admin_model->update_ticket_info();
        redirect('eticket_admin/manage_ticket');
    }
    
    public function delete_ticket($ticket_id) 
    {
        $this->eticket_admin_model->delete_ticket_by_id($ticket_id);
        redirect('eticket_admin/manage_ticket');
    }
    
    public function add_banner()
    {
        $data = array();
        $data['title'] = 'Add Banner';
        $data['dashboard'] = $this->load->view('admin/add_banner', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function save_banner()
    {
        $data=array();
        $cnt = 0;
        foreach ($_FILES as $eachFile) {
            if ($eachFile['size'] > 0) {
                $config['upload_path'] = 'upload_image/banner_image/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10240';
                $config['max_width'] = '1920';
                $config['max_height'] = '1080';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('banner_image')) {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } else {
                    $fdata = $this->upload->data();
                    $index = 'banner_image';
                    $data[$index] = $config['upload_path'] . $fdata['file_name'];
                }
            }
        }
        $data['banner_text'] = $this->input->post('banner_text', true);
        $data['banner_link'] = $this->input->post('banner_link', true);
        $data['banner_type'] = 2;
        $this->eticket_admin_model->save_banner_info($data);
        $sdata = array();
        $sdata['save_banner'] = 'Banner Saved';
        $this->session->set_userdata($sdata);
        redirect('eticket_admin/add_banner');
    }
    
    public function edit_banner($banner_id) 
    {
        $data = array();
        $data['title'] = 'Edit Banner';
        $data['banner_info'] = $this->eticket_admin_model->select_banner_by_id($banner_id);
        $data['dashboard'] = $this->load->view('admin/edit_banner', $data, true);
        $sdata = array();
        $sdata['edit_banner'] = 'Update Banner Information Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }
    
    public function update_banner()
    {
        $data=array();
        /** IF THEY DO NOT SELECT A IMAGE **/
	$cnt = 0;
        foreach ($_FILES as $eachFile) {
            if ($eachFile['size'] > 0) {
                $config['upload_path'] = 'upload_image/banner_image/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10240';
                $config['max_width'] = '1920';
                $config['max_height'] = '1080';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('banner_image')) {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } else {
                    $fdata = $this->upload->data();
                    $index = 'banner_image';
                    $data[$index] = $config['upload_path'] . $fdata['file_name'];
                }
            }
        }
        $data['banner_text'] = $this->input->post('banner_text', true);
        $data['banner_link'] = $this->input->post('banner_link', true);
        $data['banner_type'] = 2;
        $this->eticket_admin_model->update_banner_info($data);
        $sdata = array();
        $sdata['save_banner'] = 'Banner Edited';
        $this->session->set_userdata($sdata);
        redirect('eticket_admin/manage_banner');
    }
    
    public function manage_banner()
    {
        $data = array();
        $data['title'] = 'Manage Banner';
        $data['all_banner'] = $this->eticket_admin_model->select_all_banner();
        $data['dashboard'] = $this->load->view('admin/manage_banner', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function delete_banner($banner_id) 
    {        
        $this->eticket_admin_model->delete_banner_by_id($banner_id);
        redirect('eticket_admin/manage_banner');
    }
    
    public function add_coupon()
    {
        $data = array();
        $data['title'] = 'New Coupon';
        $data['dashboard'] = $this->load->view('admin/add_coupon', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_coupon()
    {
        $this->eticket_admin_model->save_coupon_info();
        $sdata = array();
        $sdata['save_coupon'] = 'Coupon Saved';
        $this->session->set_userdata($sdata);
        redirect('eticket_admin/add_coupon');
    }
    
    public function manage_coupon()
    {
        $data = array();
        $data['title'] = 'Manage Coupon';
        $config['base_url'] = base_url() . 'eticket_admin/manage_coupon/';
        $config['total_rows'] = $this->db->count_all('tbl_coupon');
        $config['per_page'] = '8';
        /** STYLE PAGINATION **/
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /** END STYLE PAGINATION **/
        $this->pagination->initialize($config);
        $data['all_coupon'] = $this->eticket_admin_model->select_all_coupon($config['per_page'], $this->uri->segment(3));
        $data['dashboard'] = $this->load->view('admin/manage_coupon', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function edit_coupon($coupon_id) 
    {
        $data = array();
        $data['title'] = 'Edit Coupon';
        $data['coupon_info'] = $this->eticket_admin_model->select_coupon_by_id($coupon_id);
        $data['dashboard'] = $this->load->view('admin/edit_coupon', $data, true);
        $sdata = array();
        $sdata['edit_coupon'] = 'Update Coupon Product Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }

    public function update_coupon() 
    {
        $this->eticket_admin_model->update_coupon_info();
        redirect('eticket_admin/manage_coupon');
    }
    
    public function delete_coupon($coupon_id) 
    {
        $this->eticket_admin_model->delete_coupon_by_id($coupon_id);
        redirect('eticket_admin/manage_coupon');
    }

    public function add_seat()
    {
        $data = array();
        $data['title'] = 'New Seat';
        $data['dashboard'] = $this->load->view('admin/add_seat', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_seat()
    {
        $this->eticket_admin_model->save_seat_info();
        $sdata = array();
        $sdata['save_seat'] = 'Seat Plan Saved';
        $this->session->set_userdata($sdata);
        redirect('eticket_admin/add_seat');
    }
    
    public function manage_seat()
    {
        $data = array();
        $data['title'] = 'Manage Seat';
        $config['base_url'] = base_url() . 'eticket_admin/manage_seat/';
        $config['total_rows'] = $this->db->count_all('tbl_seat');
        $config['per_page'] = '8';
        /** STYLE PAGINATION **/
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /** END STYLE PAGINATION **/
        $this->pagination->initialize($config);
        $data['all_seat'] = $this->eticket_admin_model->select_all_seat($config['per_page'], $this->uri->segment(3));
        $data['dashboard'] = $this->load->view('admin/manage_seat', $data, true);
        $this->load->view('admin/master', $data);
    }
   
    public function edit_seat($seat_id) 
    {
        $data = array();
        $data['title'] = 'Edit Seat';
        $data['seat_info'] = $this->eticket_admin_model->select_seat_by_id($seat_id);
        $data['dashboard'] = $this->load->view('admin/edit_seat', $data, true);
        $sdata = array();
        $sdata['edit_seat'] = 'Update Seat Plan Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }

    public function update_seat() 
    {
        $this->eticket_admin_model->update_seat_info();
        redirect('eticket_admin/manage_seat');
    }
    
    public function manage_seat_booking($seat_id) 
    {
        $data = array();
        $data['title'] = 'Manage Seat Booking';
        $data['seat_info'] = $this->eticket_admin_model->select_seat_by_id($seat_id);
        $data['dashboard'] = $this->load->view('admin/manage_seat_booking', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function update_seat_booking() 
    {
        $this->eticket_admin_model->update_seat_info();
        redirect('eticket_admin/manage_seat');
    }
        
    public function delete_seat($seat_id) 
    {
        $this->eticket_admin_model->delete_seat_by_id($seat_id);
        redirect('eticket_admin/manage_seat');
    }

    public function add_trip()
    {
        $data = array();
        $data['title'] = 'New Trip';
        $data['all_bus'] = $this->eticket_admin_model->select_all_active_bus();
        $data['all_bus_type'] = $this->eticket_admin_model->select_all_active_bus_type();
        $data['all_brand'] = $this->eticket_admin_model->select_all_active_brand();
        $data['all_coach'] = $this->eticket_admin_model->select_all_active_coach();
        $data['all_seat'] = $this->eticket_admin_model->select_all_active_seat();
        $data['all_ticket'] = $this->eticket_admin_model->select_all_active_ticket();
        $data['all_route'] = $this->eticket_admin_model->select_all_active_route();
        $data['dashboard'] = $this->load->view('admin/add_trip', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_trip()
    {
        $this->eticket_admin_model->save_trip_info();
        $sdata = array();
        $sdata['save_trip'] = 'Trip Saved';
        $this->session->set_userdata($sdata);
        redirect('eticket_admin/add_trip');
    }
    
    public function manage_trip()
    {
        $data = array();
        $data['title'] = 'Manage Trip';
        $config['base_url'] = base_url() . 'eticket_admin/manage_trip/';
        $config['total_rows'] = $this->db->count_all('tbl_trip');
        $config['per_page'] = '8';
        /** STYLE PAGINATION **/
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /** END STYLE PAGINATION **/
        $this->pagination->initialize($config);
        $data['all_trip'] = $this->eticket_admin_model->select_all_trip($config['per_page'], $this->uri->segment(3));
        $data['dashboard'] = $this->load->view('admin/manage_trip', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function edit_trip($trip_id) 
    {
        $data = array();
        $data['title'] = 'Edit Trip';
        $data['all_bus'] = $this->eticket_admin_model->select_all_active_bus();
        $data['all_bus_type'] = $this->eticket_admin_model->select_all_active_bus_type();
        $data['all_brand'] = $this->eticket_admin_model->select_all_active_brand();
        $data['all_coach'] = $this->eticket_admin_model->select_all_active_coach();
        $data['all_seat'] = $this->eticket_admin_model->select_all_active_seat();
        $data['all_ticket'] = $this->eticket_admin_model->select_all_active_ticket();
        $data['all_route'] = $this->eticket_admin_model->select_all_active_route();
        $data['trip_info'] = $this->eticket_admin_model->select_trip_by_id($trip_id);
        $data['dashboard'] = $this->load->view('admin/edit_trip', $data, true);
        $sdata = array();
        $sdata['edit_trip'] = 'Update Trip Product Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }

    public function update_trip() 
    {
        $this->eticket_admin_model->update_trip_info();
        redirect('eticket_admin/manage_trip');
    }
    
    public function delete_trip($trip_id) 
    {
        $this->eticket_admin_model->delete_trip_by_id($trip_id);
        redirect('eticket_admin/manage_trip');
    }
    
    public function sales_report()
    {
        $data = array();
        $data['title'] = 'Sales Report';
        $data['dashboard'] = $this->load->view('admin/sales_report', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function show_sales_report()
    {
        $data = array();
        $data['title'] = 'Sales Report';
        $start = $this->input->post('start', true);
        $end = $this->input->post('end', true);
        $data['start'] = $start;
        $data['end'] = $end;
        $data['sales_report'] = $this->eticket_admin_model->select_sales_report_info($start,$end,$data);
        $data['total_amount'] = $this->eticket_admin_model->select_total_amount($start,$end,$data);
        $data['dashboard'] = $this->load->view('admin/show_sales_report', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function download_sales_report($start,$end)
    {
        $data = array();
        $data['start'] = $start;
        $data['end'] = $end;
        $data['sales_report'] = $this->eticket_admin_model->select_sales_report_info($start,$end,$data);
        $data['total_amount'] = $this->eticket_admin_model->select_total_amount($start,$end,$data);
        $this->load->view('admin/download_sales_report', $data);
        $html = $this->output->get_output();
        $this->load->library('dompdf_gen');
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("download_sales_report.pdf");
    }
    
    public function manage_sale()
    {
        $data = array();
        $data['title'] = 'Manage Sale';
        $config['base_url'] = base_url() . 'eticket_admin/manage_sale/';
        $config['total_rows'] = $this->db->count_all('tbl_order');
        $config['per_page'] = '8';
        /** STYLE PAGINATION **/
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /** END STYLE PAGINATION **/
        $this->pagination->initialize($config);
        $data['all_sale'] = $this->eticket_admin_model->select_all_sale($config['per_page'], $this->uri->segment(3));
        $data['dashboard'] = $this->load->view('admin/manage_sale', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function delete_sale($sale_id) 
    {
        $this->eticket_admin_model->delete_sale_by_id($sale_id);
        redirect('eticket_admin/manage_sale');
    }
    
    public function manage_order()
    {
        $data = array();
        $data['title'] = 'Manage Order';
        $config['base_url'] = base_url() . 'eticket_admin/manage_order/';
        $config['total_rows'] = $this->db->count_all('tbl_order');
        $config['per_page'] = '8';
        /** STYLE PAGINATION **/
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /** END STYLE PAGINATION **/
        $this->pagination->initialize($config);
        $data['all_order'] = $this->eticket_admin_model->select_all_order($config['per_page'], $this->uri->segment(3));
        $data['dashboard'] = $this->load->view('admin/manage_order', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function order_details($order_id) 
    {
        $data = array();
        $data['title'] = 'Order Details';
        $data['invoice'] = $this->eticket_admin_model->select_invoice_info($order_id);
        $data['order_info'] = $this->eticket_admin_model->select_order_by_id($order_id);
        $data['dashboard'] = $this->load->view('admin/order_details', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function paid_order($order_id) 
    {
        $this->eticket_admin_model->paid($order_id);
        redirect('eticket_admin/manage_order');
    }
    
    public function delete_order($order_id) 
    {
        $this->eticket_admin_model->delete_order_by_id($order_id);
        redirect('eticket_admin/manage_order');
    }
   
    public function about()
    {
        $data = array();
        $data['title'] = 'LabTrio';
        $data['dashboard'] = $this->load->view('admin/about', $data, true);
        $this->load->view('admin/master', $data);
    }
}