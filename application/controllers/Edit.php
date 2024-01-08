<?php
class Edit extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            $this->load->library('form_validation');
            $this->load->library('upload');
            $this->session->set_flashdata('messagenologin', '<script>alert("Anda belum login. Silahkan Login terlebih Dahulu!");</script>');
            redirect('auth');
        }
        $this->load->model('Model_user');
    }
    public function index()
    {
        $recordUser = $this->Model_user->getDataUser();
        $data['judul'] = 'Edit';
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();


        $this->form_validation->set_rules('username', 'Username', 'required|trim', [
            'required' => 'Username harus diisi!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email', [
            'required' => 'Email harus diisi!',
            'valid_email' => 'Email tidak valid!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->helper('url');
            $this->load->view('templates/header2.php', $data);
            $this->load->view('templates/adminheader.php', $data);
            $this->load->view('admin/edit.php', $data);
            $this->load->view('templates/adminfooter.php', $data);
        } else {
            $id = $this->input->post('id');
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $upload_image = $_FILES['foto'];

            if ($upload_image) {


                $config['upload_path'] = './assets/img/profile/';
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size']     = 10240;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('foto')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink('./assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } 
            }


            $this->db->set('username', $username);
            $this->db->set('email', $email);
            $this->db->where('id', $id);
            $this->db->update('user');
            $this->session->set_flashdata('messageedit', '<script>alert("Data berhasil diubah");</script>');
            redirect('edit');
        }
    }
}
