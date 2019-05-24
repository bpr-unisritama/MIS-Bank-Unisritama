<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'MIS - Unisritama';
        $data['heading'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();

        $this->load->view('templates/home_header', $data);
        $this->load->view('user/home', $data);
        $this->load->view('templates/home_footer', $data);
    }
}
