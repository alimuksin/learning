<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_set extends CI_Model {
	function listing(){
        $this->db->select('*');
        $this->db->from('setoption');
        $query = $this->db->get();
        return $query->result();
    }

    function Getid($idOption = '')
    {
      return $this->db->get_where('setoption', array('idOption' => $idOption))->row();
    }

    function hapus($idOption)
    {
        $this->db->delete('setoption',array('idOption' => $idOption));
    }
    
}
?>