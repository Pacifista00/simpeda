<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    
    public function index()
    {
        $this->load->library('PhpSerial');
        $data=$this->input->post();
        $data['judul'] = 'Home';
        $this->load->helper('url');
        $this->load->view('templates/header1.php', $data);
        $this->load->view('templates/navbar.php');
        $this->load->view('home.php');
        $this->load->view('templates/footer.php');
    }
}
