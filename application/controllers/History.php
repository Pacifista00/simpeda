<?php
class History extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            $this->load->library('form_validation');
            $this->session->set_flashdata('messagenologin', '<script>alert("Anda belum login. Silahkan Login terlebih Dahulu!");</script>');
            redirect('auth');
        }
        $this->load->model('Model_user');
        $this->load->model('Model_realtime');
        $this->load->model('Model_saldo');
        $this->load->library('pagination');
    }
    public function index()
    {
        $this->Model_user->getDataUser();
        $detailmanajemen = $this->Model_realtime->getData();
        $data['judul'] = 'Edit';
        $managerow = $this->Model_realtime->getData();
        $totalrow = (count($managerow));
        $config['base_url'] = base_url() . '/history/index/';
        $config['total_rows'] = $totalrow;
        $config['per_page'] = 5;


        $this->pagination->initialize($config);
        $offset = $this->uri->segment(3);
        $data['link'] = $this->db->get('monitoring', $config['per_page'], $offset)->result();

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['detail'] = $detailmanajemen;
        $data['judul'] = 'History';

        $data['saldo7HariTerakhir'] = $this->Model_saldo->getTotalSaldo7HariTerakhir();
        $this->load->helper('url');
        $this->load->view('templates/header2.php', $data);
        $this->load->view('templates/adminheader.php', $data);
        $this->load->view('admin/history.php', $data);
        $this->load->view('templates/adminfooter.php', $data);
    }
    public function get_data() {
        $this->load->model('Model_realtime');
        $data = $this->Model_realtime->get_data_from_database();
        // Mengembalikan data dalam format JSON
        echo json_encode(['data' => $data]);
    }
    
}
