<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Kelas extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
        $this->load->model('m_kelas');
    }

    public function index()
    {
        $data = konfigurasi('Data Kelas');
        $this->template->load('layouts/template', 'admin/kelas', $data);
    }

    function tampilKelas()
    {
        $data['hasil']=$this->m_kelas->TampilKelas();
        $this->load->view('admin/kelas/data-kelas',$data);
    }

    function tambah()
    {
        $aksi=$this->input->post('aksi');
        $this->load->view('admin/kelas/tambah',$aksi);
    }

function edit()
    {
        $idKelas=$this->input->post('idKelas');
        $data['hasil']=$this->m_kelas->GetidKelas($idKelas);
        $this->load->view('admin/kelas/edit-kelas',$data);
    }
function hapus()
    {
        $idKelas=$this->input->post('idKelas');
        $data['hasil']=$this->m_kelas->GetidKelas($idKelas);
        $this->load->view('admin/kelas/hapus-kelas',$data);
    }

function simpanKelas()
    {
        $data = array(
            'idKelas'=>$this->input->post('idKelas'),
            'namaKelas'=>$this->input->post('namaKelas'),
            'deskKelas'=>$this->input->post('deskKelas')
            );
            $this->db->insert('kelas',$data);
    }

function editKelas()
    {
        $data = array(
            'namaKelas'=>$this->input->post('namaKelas'),
            'deskKelas'=>$this->input->post('deskKelas')
        );
        $idKelas = $this->input->post('idKelas');
        $this->db->where('idKelas', $idKelas);
        $this->db->update('kelas',$data);
    }
function hapusKelas()
    {
        $idKelas=$this->input->post('idKelas');
        $this->db->delete('kelas',array('idKelas' => $idKelas));
    }
}

?>