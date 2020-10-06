<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->data['js_url'] = $this->config->item('js_url');
    }
    public function index()
    {
        $this->data['ang_script'] = "home";
        $this->load->view('admin', $this->data);
    }
    public function mahasiswa()
    {
        $this->data['ang_script'] = "mahasiswa";
        $this->load->view('admin', $this->data);
    }
    public function staff()
    {
        $this->data['ang_script'] = "staff";
        $this->load->view('admin', $this->data);
    }
}
