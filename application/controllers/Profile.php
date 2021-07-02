<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
    }

    public function index()
    {
        $data = konfigurasi('Profile');

        $this->template->load('layouts/template', 'authentication/profile', $data);
    }
}
