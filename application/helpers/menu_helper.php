<?php 
function menu($namaKelas, $link=null)
{
    $CI = get_instance();
    $CI->load->model('Konfigurasi_model');
    $CI->load->model('Auth_model');
    $auth = $CI->Auth_model->get_by_id('id');
    $site = $CI->Konfigurasi_model->menuSiswa();
    $data = array(
        'namaKelas' => $site['namaKelas'],
        'link' => $site['link'],
    );

    return $data;
}

?>