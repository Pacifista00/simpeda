<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_realtime extends CI_Model {

    public function get_data_from_database() {
        $this->db->select('*');
        $this->db->from('monitoring');
        $this->db->order_by('id', 'desc');
        $this->db->limit(10);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getData()
    {
        $query = $this->db->get('monitoring');
        $this->db->order_by('id', 'desc');
        $result = $query->result();
        return $result;
    }
}