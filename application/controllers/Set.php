<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Set extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->model('m_mapel');
    }

    public function tampilan()
    {
        $data = konfigurasi('Set-Tampilan');
        $data['guru']=$this->m_mapel->guru();

        $this->template->load('layouts/template', 'set/tampilan', $data);
    }

    function tampilMapel()
    {
        $data['hasil']=$this->m_mapel->all();

        $this->load->view('admin/mapel/data',$data);
    }

    function tambah()
    {
        $aksi=$this->input->post('aksi');
        $data['guru'] = $this->m_mapel->guru()->result();

        $this->load->view('admin/mapel/tambah',$data, $aksi);
    }

    function edit()
    {
           
        $idMapel=$this->input->post('idMapel');
        $data['hasil']=$this->m_mapel->Getid($idMapel);
        $data['guru'] = $this->m_mapel->guru()->result();

        $this->load->view('admin/mapel/edit',$data);
    }
    function hapus()
    {

        $idMapel=$this->input->post('idMapel');
        $data['hasil']=$this->m_mapel->Getid($idMapel);
        $this->load->view('admin/mapel/hapus',$data);
    }

    function simpan()
    {
        $data = array(
            'idMapel'=>$this->input->post('idMapel'),
            'namaMapel'=>$this->input->post('namaMapel'),
            'kodeMapel'=>$this->input->post('kodeMapel'),
            'guruId'=>$this->input->post('guruId')
            );
            $this->db->insert('mapel',$data);

            if ($data){
             return "success";
            }
            else{
             return "failed";
            }
    }

    function update()
    {
        $data = array(
            'namaMapel'=>$this->input->post('namaMapel'),
            'kodeMapel'=>$this->input->post('kodeMapel'),
            'guruId'=>$this->input->post('guruId')
        );
        $idMapel = $this->input->post('idMapel');
        $this->db->where('idMapel', $idMapel);
        $this->db->update('mapel',$data);
    }
    function delete()
    {
        $idMapel=$this->input->post('idMapel');
        $this->db->delete('mapel',array('idMapel' => $idMapel));
    }
}
