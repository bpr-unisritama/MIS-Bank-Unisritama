<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Management extends CI_Model
{
    public function get_users()
    {
        // return $this->db->get('user');
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('user_role', 'user.role_id=user_role.id');
        return $this->db->get();
    }

    public function get_kategori()
    {
        $this->db->select('*');
        $this->db->from('kategori');
        return $this->db->get();
    }

    public function get_type()
    {
        $this->db->select('*');
        $this->db->from('jenis');
        return $this->db->get();
    }

    function get_loc()
    {
        return $this->db->get('lokasi');
    }

}
