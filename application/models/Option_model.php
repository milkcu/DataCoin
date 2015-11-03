<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @authour: Xintong Liu
 * @link: http://www.xint78.com
 */
class Option_model extends CI_Model {
    public function get($name) {
        $this->db->where('name', $name);
        return $this->db->get('option')->row()->value;
    }
    public function set($name, $value) {
        $this->db->set('value', $value);
        $this->db->where('name', $name);
        $this->db->update('option');
    }
    public function auth() {
        if(isset($_COOKIE['yfmmhecmsdodbdata'])) {
            return true;
        } else {
            return false;
        }
    }
}