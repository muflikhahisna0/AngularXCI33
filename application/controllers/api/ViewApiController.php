<?php

defined('BASEPATH') or exit('No direct script access allowed');



class ViewApiController extends CI_Controller
{


    function __construct()

    {
        parent::__construct();
    }


    public function home()
    {
        $this->load->view('pages/home');
    }

    public function mahasiswa()
    {
        $this->load->view('pages/mahasiswa');
    }
    public function staff()
    {
        $this->load->view('pages/staff');
    }
    public function add()
    {
        $this->load->view('pages/mahasiswa_add');
    }
    public function edit()
    {
        $this->load->view('pages/mahasiswa_edit');
    }
}
