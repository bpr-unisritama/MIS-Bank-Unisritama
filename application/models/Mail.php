<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mail extends CI_Model
{

    public function get_all()
    {
        return $this->db->get('surat_masuk');
    }
}
