<?php
Class M_mapel extends CI_Model
{
    function all() 
    {
        $this->db->select ('*'); 
        $this->db->from ('mapel');
        $this->db->join('tbl_user', 'mapel.guruId = tbl_user.id');
        $query = $this->db->get ();
        
        return $query->result ();
    }

    function Getid($idMapel = '')
    {
      return $this->db->get_where('mapel', array('idMapel' => $idMapel))->row();
    }

    function hapus($idMapel)
    {
        $this->db->delete('mapel',array('idMapel' => $idMapel));
    }

    public function guru() {
        $result = $this->db->get_where('tbl_user', array('id_role' => 2));
        
        return $result;
    }

}
?>