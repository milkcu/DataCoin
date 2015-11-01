<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @authour: Xintong Liu
 * @link: http://www.xint78.com
 */
class Log_model extends CI_Model {
    public function add($data) {
        $this->db->insert('log', $data);
        return $this->db->insert_id();
    }
    public function get($lid) {
        $this->db->where('lid', $lid);
        return $this->db->get('log')->row();
    }
    public function getnum() {
        return $this->db->count_all('log');
    }
    public function getlist($limit = 10, $offset = 0) {
        $this->db->order_by('lid', 'desc');
        return $this->db->get('log', $limit, $offset)->result();
    }
    public function getnum_user($uid) {
        $this->db->where('uid', $uid);
        return $this->db->count_all_result('log');
    }
    public function getlist_user($uid, $limit = 10, $offset = 0) {
        $this->db->order_by('lid', 'desc');
        $this->db->where('uid', $uid);
        $logs = $this->db->get('log', $limit, $offset)->result();
        $this->load->model('Game_model');
        $cnt = count($logs);
        for($i = 0; $i < $cnt; $i++) {
            $logs[$i]->game = $this->Game_model->get($logs[$i]->gid);
        }
        return $logs;
    }
}