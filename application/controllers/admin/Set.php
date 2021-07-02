<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Set extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
        
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->model('m_set');
    }

    public function tampilan()
    {
        $data = konfigurasi('Mapel');
        
        $this->template->load('layouts/template', 'admin/set/tampilan', $data);
    }

    function all()
    {
        $data['hasil']=$this->m_set->listing();

        $this->load->view('admin/set/data',$data);
    }

    function edit()
    {
        $idOption=$this->input->post('idOption');
        $data['hasil']=$this->m_set->Getid($idOption);
        
        $this->load->view('admin/set/edit',$data);
    }
    function hapus()
    {

        $idOption=$this->input->post('idOption');
        $data['hasil']=$this->m_set->Getid($idOption);
        $this->load->view('admin/set/hapus',$data);
    }

    function simpan()
    {
        $data = array(
            'idOption'=>$this->input->post('idOption'),
            'namaMapel'=>$this->input->post('namaMapel'),
            'kodeMapel'=>$this->input->post('kodeMapel'),
            'guruId'=>$this->input->post('guruId')
            );
            $this->db->insert('setoption',$data);

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
            'valueOption'=>$this->input->post('valueOption'),
            'isActive'=>$this->input->post('isActive')
        );
        $idOption = $this->input->post('idOption');
        $this->db->where('idOption', $idOption);
        $this->db->update('setoption',$data);
    }
    function delete()
    {
        $idOption=$this->input->post('idOption');
        $this->db->delete('setoption',array('idOption' => $idOption));
    }
}
