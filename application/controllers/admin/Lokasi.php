<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lokasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('management');
        $this->load->library('form_validation');

        if (empty($this->session->userdata('name'))) {
            redirect(base_url(), 'refresh');
        }
    }

    public function index()
    {
        // echo "test";
        $data['title'] = 'LOKASI PENYIMPANAN';
        $data['heading'] = 'Lokasi Penyimpanan';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['data'] = $this->management->get_loc()->result();
        $this->load->view('templates/home_header', $data);
        $this->load->view('admin/lokasi');
        $this->load->view('templates/home_footer', $data);
    }

    public function add_lokasi()
    {
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required|trim');
        $this->form_validation->set_rules('ruangan', 'Ruangan', 'required|trim');
        $this->form_validation->set_rules('rak', 'Rak', 'required|trim');
        $this->form_validation->set_rules('folder', 'Folder', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'TAMBAH LOKASI PENYIMPANAN';
            $data['heading'] = 'Tambah Lokasi Penyimpanan';
            $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
            $this->load->view('templates/home_header', $data);
            $this->load->view('admin/add_lokasi');
            $this->load->view('templates/home_footer', $data);
        } else {
            $data = [
                'lokasi' => htmlspecialchars($this->input->post('lokasi', true)),
                'ruangan' => htmlspecialchars($this->input->post('ruangan', true)),
                'rak'    => htmlspecialchars($this->input->post('rak', true)),
                'folder' => htmlspecialchars($this->input->post('folder', true))
            ];
            $this->db->insert('lokasi', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Tambah Lokasi Penyimpanan<strong>Berhasil!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button></div>'
            );
            redirect('admin/lokasi', 'refresh');
        }
    }
}
