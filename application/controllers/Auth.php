<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index()
    {
        if ($this->session->userdata('id')) {
            $this->session->set_flashdata('messagelogin', '<script>alert("Anda sudah login");</script>');
            redirect('dashboard');
        }
        $this->form_validation->set_rules('username', 'Username', 'required|trim',[
            'required' => 'Username harus diisi'
            ]);
        $this->form_validation->set_rules('password', 'Password', 'required',[
            'required' => 'Password harus diisi'
            ]);

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login';
            $this->load->helper('url');
            $this->load->view('templates/header1.php', $data);
            $this->load->view('login.php');
            $this->load->view('templates/footer.php');
        } else {
            $this->login();
        }
    }
    private function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'foto' => $user['image'],
                    'date' => $user['date_created']
                ];
                $this->session->set_userdata($data);
                
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username tidak terdaftar!</div>');
            redirect('auth');
        }
    }
    public function register()
    {
        if ($this->session->userdata('id')) {
            $this->session->set_flashdata('messagelogin', '<script>alert("Anda sudah login");</script>');
            redirect('dashboard');
        }
        $this->form_validation->set_rules('username', 'Username', 'required|trim', [
            'required' => 'Username harus diisi'
            ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email sudah terdaftar',
            'required' => 'Email harus diisi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|matches[passwordconfirm]', [
            'required' => 'password harus diisi',
            'matches' => 'Konfirmasi password tidak cocok'
        ]);
        $this->form_validation->set_rules('passwordconfirm', 'Password', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Register';
            $this->load->helper('url');
            $this->load->view('templates/header1.php', $data);
            $this->load->view('register.php');
            $this->load->view('templates/footer.php');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => (password_hash($this->input->post('password'), PASSWORD_DEFAULT)),
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun berhasil dibuat. Silahkan Login!</div>');
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('date');
        $this->session->unset_userdata('foto');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah logout!</div>');
        redirect('auth');
    }
}
