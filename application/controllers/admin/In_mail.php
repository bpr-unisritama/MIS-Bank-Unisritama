<?php
defined('BASEPATH') or exit('No direct script access allowed');

class In_mail extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mail');
        $this->load->library('form_validation');

        if (empty($this->session->userdata('name'))) {
            redirect(base_url(), 'refresh');
        }
    }

    public function index()
    {
        $data['title'] = 'SURAT MASUK';
        $data['heading'] = 'Surat Masuk';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['data'] = $this->mail->get_all()->result_array();
        $this->load->view('templates/home_header', $data);
        $this->load->view('admin/in_mail');
        $this->load->view('templates/home_footer', $data);
    }

    public function new_mail()
    {
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('alias', 'Alias', 'required|trim|min_length[2]|max_length[5]', [
            'min_length' => 'Minimal terdiri 2 Character',
            'max_length' => 'Maximal 5 charachter'
        ]);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'REGISTRASI SURAT MASUK';
            $data['heading'] = 'REGISTRASI';
            $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
            $this->load->view('templates/home_header', $data);
            $this->load->view('admin/add_suratm', $data);
            $this->load->view('templates/home_footer', $data);
        } else {
            $data = [
                'kategori' => htmlspecialchars($this->input->post('kategori', true)),
                'alias' => htmlspecialchars($this->input->post('alias', true))
            ];

            $this->db->insert('kategori', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/kategori', 'refresh');
        }
    }
}
