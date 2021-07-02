<?php
Class M_siswa extends CI_Model
{
    function all() 
    {
        $this->db->order_by('idSiswa', 'ASC');
        return $this->db->from('siswa')
          ->get()
          ->result();
    }

    function GetidKelas($idKelas = '')
    {
      return $this->db->get_where('siswa', array('idKelas' => $idKelas))->row();
    }

    function HapusKelas($idKelas)
    {
        $this->db->delete('siswa',array('idKelas' => $idKelas));
    }


    function kelas10() 
    {
        $this->db->select ('*'); 
        $this->db->from ('siswa');
        $this->db->join('kelas', 'siswa.kelasId = kelas.idKelas');
        $this->db->where('kelas.idKelas',1);
        $query = $this->db->get ();
        
        return $query->result ();
    }

    function kelas11() 
    {
        $this->db->select ('*'); 
        $this->db->from ('siswa');
        $this->db->join('kelas', 'siswa.kelasId = kelas.idKelas');
        $this->db->where('kelas.idKelas',2);
        $query = $this->db->get ();
        
        return $query->result ();
    }

    function kelas12() 
    {
        $this->db->select ('*'); 
        $this->db->from ('siswa');
        $this->db->join('kelas', 'siswa.kelasId = kelas.idKelas');
        $this->db->where('kelas.idKelas',4);
        $query = $this->db->get ();
        
        return $query->result ();
    }
}
?>