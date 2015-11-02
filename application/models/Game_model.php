<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @authour: Xintong Liu
 * @link: http://www.xint78.com
 */
class Game_model extends CI_Model {
    public function add($data) {
        $this->db->insert('game', $data);
        return $this->db->insert_id();
    }
    public function get($gid) {
        $this->db->where('gid', $gid);
        return $this->db->get('game')->row();
    }
    public function setall($gid, $data) {
        $this->db->where('gid', $gid);
        $this->db->update('game', $data);
    }
    public function set($gid, $data) {
        $this->db->where('gid', $gid);
        $this->db->update('game', $data);
    }
    public function setstate($gid, $state) {
        $this->db->set('state', $state);
        $this->db->where('gid', $gid);
        $this->db->update('game');
    }
    public function getnum() {
        return $this->db->count_all('game');
    }
    public function getlist($limit = 10, $offset = 0) {
        $this->db->order_by('gid', 'desc');
        return $this->db->get('game', $limit, $offset)->result();
    }
}