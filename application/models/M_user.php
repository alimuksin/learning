<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_user extends CI_Model
{
	function tampil_data(){
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->join('tbl_role', 'tbl_user.id_role = tbl_role.id');
        $this->db->where('tbl_user.id_role !=', 1);
        $query = $this->db->get();
        return $query->result();
    }
}