<?php
Class M_kelas extends CI_Model
{
  function Tampilkelas() 
    {
        $this->db->order_by('idKelas', 'ASC');
        return $this->db->from('kelas')
          ->get()
          ->result();
    }

    function GetidKelas($idKelas = '')
    {
      return $this->db->get_where('kelas', array('idKelas' => $idKelas))->row();
    }

    function HapusKelas($idKelas)
    {
        $this->db->delete('kelas',array('idKelas' => $idKelas));
    }
}
?>