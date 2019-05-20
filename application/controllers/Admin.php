<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('management');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Admin MIS - Unisritama';
        $data['heading'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('templates/home_header', $data);
        $this->load->view('admin/home');
        $this->load->view('templates/home_footer', $data);
    }

    public function users()
    {
        $data['title'] = 'Management Users';
        $data['heading'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['users'] = $this->management->get_users()->result();
        $this->load->view('templates/home_header', $data);
        $this->load->view('admin/users', $data);
        $this->load->view('templates/home_footer', $data);
    }

    public function kategori()
    {
        $data['title'] = 'Kategori Surat';
        $data['heading'] = 'Kategori Surat';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['data'] = $this->management->get_kategori()->result();

        $this->load->view('templates/home_header', $data);
        $this->load->view('admin/kategori', $data);
        $this->load->view('templates/home_footer', $data);
    }
    public function add_kategori()
    {
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('alias', 'Alias', 'required|trim|min_length[2]|max_length[5]', [
            'min_length' => 'Minimal terdiri 2 Character',
            'max_length' => 'Maximal 5 charachter'
        ]);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Add Kategori Surat - MIS';
            $data['heading'] = 'Add Kategori Surat';
            $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
            $data['data'] = 'test';
            $this->load->view('templates/home_header', $data);
            $this->load->view('admin/add_kategori', $data);
            $this->load->view('templates/home_footer', $data);
        } else {
            $data = [
                'kategori' => htmlspecialchars($this->input->post('kategori', true)),
                'alias' => htmlspecialchars($this->input->post('alias', true))
            ];

            $this->db->insert('kategori', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success add new Category</div>');
            redirect('admin/kategori');
        }
    }

    public function delete_kategori($id_kategori)
    {
        $this->db->where('id_kategori', $id_kategori);
        $this->db->delete('kategori');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success delete Kategori Surat tsb!</div>');
        redirect('admin/kategori');
    }

    public function delete_type($id_type)
    {
        $this->db->where('id_type', $id_type);
        $this->db->delete('jenis');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success delete Jenis Surat tsb!</div>');
        redirect('admin/type');
    }

    public function type()
    {
        $data['title'] = 'Mail Type - MIS';
        $data['heading'] = 'Mail Type';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['data'] = $this->management->get_type()->result();

        $this->load->view('templates/home_header', $data);
        $this->load->view('admin/type', $data);
        $this->load->view('templates/home_footer', $data);
    }

    public function add_type()
    {
        $this->form_validation->set_rules('type', 'Type', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Add Mail Type - MIS';
            $data['heading'] = 'Add Mail Type';
            $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
            $data['data'] = 'test';
            $this->load->view('templates/home_header', $data);
            $this->load->view('admin/add_type', $data);
            $this->load->view('templates/home_footer', $data);
        } else {
            $data = [
                'type' => htmlspecialchars($this->input->post('type', true))
            ];

            $this->db->insert('jenis', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success add new Type</div>');
            redirect('admin/type');
        }
    }
}
