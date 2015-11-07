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
    public function getbyp($pid) {
        $this->db->where('pid', $pid);
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
    public function isreg($pid) {
        $this->db->where('pid', $pid);
        $cnt = $this->db->count_all_results('user');
        if($cnt != 0) {
            return true;
        } else {
            return false;
        }
    }
    public function getp() {
        if(isset($_COOKIE['SA8R_2132_auth']) && isset($_COOKIE['SA8R_2132_saltkey'])) {
            $auth = urlencode($_COOKIE['SA8R_2132_auth']);
            $saltkey = urlencode($_COOKIE['SA8R_2132_saltkey']);
            $url = 'http://www.1000you.com/bbs/zxf_userinfo_datacoin.php';
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_COOKIE, "SA8R_2132_auth=$auth; SA8R_2132_saltkey=$saltkey");
            $response = curl_exec($ch);
            // {"uid":"14993","uname":"test1107"}
            curl_close($ch);
            $p = json_decode($response);
            return $p;
        }
        $this->session->unset_userdata('dc_uid');
        $this->session->unset_userdata('dc_mobile');
        return false;
    }
    public function setp() {
        $p = $this->getp();
        if(isset($p->uid) && $p->uid != 0) {
            $user = $this->getbyp($p->uid);
            $this->session->set_userdata('dc_uid', $user->uid);
            $this->session->set_userdata('dc_mobile', $user->mobile);
            return $p;
        }
    }
    public function auth() {
        if(isset($_SESSION['dc_uid']) && isset($_SESSION['dc_mobile'])) {
            $user = $this->User_model->get($_SESSION['dc_uid']);
            if(@$user->pid == $this->getp()->uid) {
                return true;
            } else {
                return false;
            }
        } elseif($this->getp()) {
            if($this->isreg($this->getp()->uid)) {
                // no login
                $this->setp();
                return true;
            } else {
                // no register
                return false;
            }
        }
        return false;
    }
}