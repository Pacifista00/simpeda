<?php
class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            $this->load->library('form_validation');
            $this->session->set_flashdata('messagelogin', '<script>alert("Anda belum login. Silahkan Login terlebih Dahulu!");</script>');
            redirect('auth');
        }
        $this->load->model('Model_user');
    }
    public function index()
    {
        $recordUser = $this->Model_user->getDataUser();
        $data['judul'] = 'Edit';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['judul'] = 'About';
        $this->load->helper('url');
        $this->load->view('templates/header2.php', $data);
        $this->load->view('templates/adminheader.php', $data);
        $this->load->view('admin/about.php');
        $this->load->view('templates/adminfooter.php', $data);
    }
}
