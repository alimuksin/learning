<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public $table = 'menus';
    public $id = 'id_menu';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // Listing Menu
    public function listing() {
        $this->db->select('*');
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function menus() {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('parent_menu', 0);
        $query = $this->db->get();
        return $query->result ();
    }

    public function subMenus() {
        $this->db->select('*');
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result ();
    }
}
