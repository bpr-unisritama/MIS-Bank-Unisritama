<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mail extends CI_Model
{

    public function get_all()
    {
        return $this->db->get('surat_masuk');
    }

    public function get_detail($id_suratm)
    {
        $this->db->select('*');
        $this->db->from('surat_masuk');
        $this->db->join('jenis', 'surat_masuk.jenis=jenis.id_type');
        $this->db->join('kategori', 'surat_masuk.kategori=kategori.id_kategori');
        $this->db->join('lokasi', 'surat_masuk.lokasi=lokasi.id_lokasi');
        $this->db->where('id_suratm', $id_suratm);
        return $this->db->get();
    }

    public function _reg()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            'tgl_terima' => date('Y-m-d', strtotime($this->input->post('tgl_terima', true))),
            'tgl_surat' => date('Y-m-d', strtotime($this->input->post('tgl_surat', true))),
            'asal' => htmlspecialchars($this->input->post('asal', true)),
            'tujuan' => htmlspecialchars($this->input->post('tujuan', true)),
            'no_surat' => htmlspecialchars($this->input->post('no_surat', true)),
            'perihal' => htmlspecialchars($this->input->post('perihal', true)),
            'lampiran' => htmlspecialchars($this->input->post('lampiran', true)),
            'kategori' => htmlspecialchars($this->input->post('kategori', true)),
            'jenis' => htmlspecialchars($this->input->post('jenis', true)),
            'lokasi' => htmlspecialchars($this->input->post('lokasi', true)),
            'ket' => htmlspecialchars($this->input->post('ket', true)),
            'foto' => 'default.jpg',
            'esurat' => 'test',
            'date_created' => date('Y-m-d')
        ];

        $this->db->insert('surat_masuk', $data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registrasi Surat Masuk Berhasil!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>'
        );
    }

    public function delete($id_suratm)
    {
        $this->db->where('id_suratm', $id_suratm);
        $this->db->delete('surat_masuk');
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Hapus Surat Masuk Berhasil!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>'
        );
    }
}
