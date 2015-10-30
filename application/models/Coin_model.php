<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @authour: Xintong Liu
 * @link: http://www.xint78.com
 */
class Coin_model extends CI_Model {
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
}