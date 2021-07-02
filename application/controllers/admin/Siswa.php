<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Siswa extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
        $this->load->model('m_siswa');
        $this->load->model('m_kelas');
    }

    public function index()
    {
        $data = konfigurasi('Data Siswa');
         $data['kelas']=$this->m_kelas->TampilKelas();

        $this->template->load('layouts/template', 'admin/siswa/data', $data);
    }
    

    function all()
    {
        $data['hasil']=$this->m_siswa->all();
         $data['kelas']=$this->m_kelas->TampilKelas();
        $this->load->view('admin/siswa/all',$data);
    }

    function kelas10()
    {
        $data['hasil']=$this->m_siswa->kelas10();
         $data['kelas']=$this->m_kelas->TampilKelas();
        $this->load->view('admin/siswa/kelas10',$data);
    }

    function kelas11()
    {
        $data['hasil']=$this->m_siswa->kelas11();
         $data['kelas']=$this->m_kelas->TampilKelas();
        $this->load->view('admin/siswa/kelas11',$data);
    }

    function kelas12()
    {
        $data['hasil']=$this->m_siswa->kelas12();
         $data['kelas']=$this->m_kelas->TampilKelas();
        $this->load->view('admin/siswa/kelas12',$data);
    }


}
?>
