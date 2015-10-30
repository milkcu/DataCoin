<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @authour: Xintong Liu
 * @link: http://www.xint78.com
 */
class Option_model extends CI_Model {
    public function get($name) {
        $this->db->where('name', $name);
        return $this->db->get('option')->row();
    }
    public function set($name, $value) {
        $this->db->set('value', $value);
        $this->db->where('name', $name);
        $this->db->update('option');
    }
}