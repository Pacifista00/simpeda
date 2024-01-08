<?php
class Model_saldo extends CI_Model{
    public function getTotalSaldo7HariTerakhir()
    {
        $this->db->select('tanggal, SUM(saldo) AS total_saldo');
        $this->db->from('saldo');
        $this->db->where('tanggal >=', date('Y-m-d', strtotime('-7 days')));
        $this->db->where('tanggal <', date('Y-m-d'));
        $this->db->group_by('tanggal');

        $query = $this->db->get();
        $result = $query->result();

        // Ubah format tanggal menjadi disertai dengan hari, bulan, dan tahun dalam bahasa Indonesia
        setlocale(LC_TIME, 'id_ID');
        foreach ($result as $row) {
            $tanggal = strftime('%A, %d %B %Y', strtotime($row->tanggal));
            $row->tanggal = $tanggal;
        }

        return $result;
    }
    public function get_total_saldo() {
        $this->db->select_sum('saldo');
        $query = $this->db->get('saldo');
        $result = $query->row();
        return $result->saldo;
    }
    public function reset_saldo(){
        $hasil = $this->db->truncate('saldo');
        
        return $hasil;
        
        
    }
}