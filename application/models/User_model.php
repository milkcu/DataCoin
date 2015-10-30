<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @authour: Xintong Liu
 * @link: http://www.xint78.com
 */
class User_model extends CI_Model {
    public function add($data) {
        $this->db->insert('user', $data);
        return $this->db->insert_id();
    }
    public function get($uid) {
        $this->db->where('uid', $uid);
        return $this->db->get('user')->row();
    }
    public function set($uid, $data) {
        $this->db->where('uid', $uid);
        $this->db->update('user', $data);
    }
    public function getnum() {
        return $this->db->count_all('user');
    }
    public function getlist($limit = 10, $offset = 0) {
        $this->db->order_by('uid', 'desc');
        return $this->db->get('user', $limit, $offset)->result();
    }
}