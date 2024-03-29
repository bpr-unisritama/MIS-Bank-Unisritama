<?php
defined('BASEPATH') or exit('No direct script access allowed');

class In_mail extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('mail', 'management'));
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
        $data['data'] = $this->mail->get_all()->result();
        $this->load->view('templates/home_header', $data);
        $this->load->view('admin/in_mail');
        $this->load->view('templates/home_footer', $data);
    }

    public function new_mail()
    {
        $this->form_validation->set_rules('tgl_terima', 'Tanggal Terima', 'required|trim', [
            'required' => 'Tanggal Terima harus diisi.'
        ]);
        $this->form_validation->set_rules('tgl_surat', 'Tanggal Surat', 'required|trim', [
            'required' => 'Tanggal Surat harus diisi.'
        ]);
        $this->form_validation->set_rules('asal', 'Pengirim', 'required|trim', [
            'required' => 'Asal pengirim harus diisi.'
        ]);
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'required|trim', [
            'required' => 'Tujuan pengirim harus diisi.'
        ]);
        $this->form_validation->set_rules('no_surat', 'No. Surat', 'required|trim', [
            'required' => 'No. Surat harus diisi.'
        ]);
        $this->form_validation->set_rules('perihal', 'Perihal', 'required|trim', [
            'required' => 'Perihal harus diisi.'
        ]);
        $this->form_validation->set_rules('lampiran', 'Lampiran', 'required|trim', [
            'required' => 'Jumlah Lampiran harus diisi.'
        ]);
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim', [
            'required' => 'Kategori harus diisi.'
        ]);
        $this->form_validation->set_rules('jenis', 'Jenis', 'required|trim', [
            'required' => 'Jenis harus diisi.'
        ]);
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required|trim', [
            'required' => 'Lokasi harus diisi.'
        ]);
        $this->form_validation->set_rules('ket', 'Keterangan', 'trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'REGISTRASI SURAT MASUK';
            $data['heading'] = 'REGISTRASI';
            $data['lokasi'] = $this->management->get_loc()->result();
            $data['kategori'] = $this->management->get_kategori()->result();
            $data['jenis'] = $this->management->get_type()->result();
            $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
            $this->load->view('templates/home_header', $data);
            $this->load->view('admin/add_suratm', $data);
            $this->load->view('templates/home_footer', $data);
        } else {
            $this->mail->_reg();
            redirect('admin/in_mail', 'refresh');
        }
    }

    public function delete_suratm($id_suratm)
    {
        $this->mail->delete($id_suratm);
        redirect('admin/in_mail', 'refresh');
    }

    public function detail($id_suratm)
    {
        $data['title'] = 'DETAIL SURAT';
        $data['heading'] = 'Detail Surat Masuk';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $data['data'] = $this->mail->get_detail($id_suratm)->result();
        // var_dump($data['data']);
        // die;
        $this->load->view('templates/home_header', $data);
        $this->load->view('admin/detail_suratm', $data);
        $this->load->view('templates/home_footer', $data);
    }

    public function edit($id_suratm)
    {
        $data['title'] = 'DETAIL SURAT';
        $data['heading'] = 'Detail Surat Masuk';
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
    }
}
