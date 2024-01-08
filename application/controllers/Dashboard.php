<?php
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id')) {
            $this->session->set_flashdata('messagenologin', '<script>alert("Anda belum login. Silahkan Login terlebih Dahulu!");</script>');
            redirect('auth');
        }
        $this->load->model('Model_user');
        $this->load->model('Model_saldo');
    }
    public function index()
    {
        $recordUser = $this->Model_user->getDataUser();
        $data['judul'] = 'Edit';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['judul'] = 'Dashboard';
        $data['total_saldo'] = $this->Model_saldo->get_total_saldo();
        $this->load->helper('url');
        $this->load->view('templates/header2.php', $data);
        $this->load->view('templates/adminheader.php', $data);
        $this->load->view('admin/dashboard.php');
        $this->load->view('templates/adminfooter.php', $data);
    }
    public function get_data() {
        $this->load->model('Model_realtime');
        $data = $this->Model_realtime->get_data_from_database();
        
        
        // Mengembalikan data dalam format JSON
        echo json_encode(['data' => $data]);
    }
    public function ambil(){
        $data['total_saldo'] = $this->Model_saldo->reset_saldo();
        $this->session->set_flashdata('message', '<script>alert("Uang telah diambil!");</script>');
        redirect('dashboard');
        
    }
}
