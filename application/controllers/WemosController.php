<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WemosController extends CI_Controller {
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = [
                'kuatarus' => $this->input->get('kuatarus'),
                'sisakwh' => $this->input->get('sisakwh'),
                'daya' => $this->input->get('daya'),
                'coin' => $this->input->get('coin'),
                'tegangan' => $this->input->get('tegangan'),
                'date' => date('Y-m-d H:i:s')
            ];
            
            
        $this->db->insert('monitoring', $data);
    }
    public function saldo(){
        date_default_timezone_set('Asia/Jakarta');
        $getData = [
                'saldo' => $this->input->get('saldo'),
                'tanggal' => date('Y-m-d H:i:s')
            ];
        $this->db->insert('saldo', $getData);
    }
};
