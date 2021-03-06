<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @authour: Xintong Liu
 * @link: http://www.xint78.com
 */
class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }
    public function login() {
        setcookie('SA8R_2132_auth', 'e7e71m7QvMo0ZXQVHEv7qpGlObXGJAmJrPFJNQzG2t68A3S1XdBtITUWqraq5kFmxow1FTAHHFKcE5vKnJXYQrcg');
        setcookie('SA8R_2132_saltkey', 'm7Z3T1cV');
        setcookie('yfmmhecmsdodbdata', 'empirecms', time() + 3600, '/');
        //$this->session->set_userdata('dc_uid', 9);
        //$this->session->set_userdata('dc_mobile', '18353115149');
        print_r($this->session->userdata());
    }
    public function add() {
        $this->load->helper('form');
        if($this->input->post()) {
            $user = array();
            $user['pid'] = $this->User_model->getp()->uid;
            $user['puname'] = $this->User_model->getp()->uname;
            $user['mobile'] = $this->input->post('mobile');
            $user['sum'] = 0;
            $user['today'] = 0;
            $user['state'] = 'normal';
            $uid = $this->User_model->add($user);
            $this->session->set_userdata('dc_uid', $uid);
            redirect('user/log');
        } else {
            if(! $this->User_model->getp()) {
                redirect(base_url());
            }
            $this->load->view('user/add');
        }
    }
    public function show() {
        $uid = $this->session->userdata('dc_uid');
        $data['user'] = $this->User_model->get($uid);
        $this->load->view('user/show', $data);
    }
    public function set() {
        if(! $this->User_model->auth()) {
            redirect(site_url('user/add'));
        }
        $this->load->helper('form');
        $uid = $this->session->userdata('dc_uid');
        if($this->input->post()) {
            $data['mobile'] = $this->input->post('mobile');
            $this->User_model->set($uid, $data);
            redirect('user/set');
        } else {
            $data['user'] = $this->User_model->get($uid);
            $this->load->view('user/set', $data);
        }
    }
    public function state() {
        $this->load->model('Option_model');
        if(! $this->Option_model->auth()) {
            redirect(base_url('e/1000you'));
        }
        $this->load->helper('form');
        if($this->input->post()) {
            $uid = $this->input->post('uid');
            if(isset($_POST['black']) && $this->input->post('black') == 'on') {
                $data['state'] = 'black';
                $this->User_model->set($uid, $data);
            } else {
                $data['state'] = 'normal';
                $this->User_model->set($uid, $data);
            }
            redirect('user/all');
        } else {
            //$uid = $this->uri->segment(3);
            //$data['user'] = $this->User_model->get($uid);
            //$this->load->view('user/state', $data);
        }
    }
    public function all() {
        $this->load->model('Option_model');
        if(! $this->Option_model->auth()) {
            redirect(base_url('e/1000you'));
        }
        $limit = 10;
        $this->load->library('pagination');
        $offset = $this->uri->segment(3);
        $config['uri_segment'] = 3;
        $config['base_url'] = site_url('user/all');
        $config['total_rows'] = $this->User_model->getnum();
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);

        $data['userlist'] = $this->User_model->getlist($limit, $offset);
        $this->load->view('user/list', $data);
    }
    public function give() {
        // call the java program to send coins
        $this->load->model('Log_model');
        $log = array();
        $log['gid'] = $this->uri->segment(3);
        $log['uid'] = $this->session->userdata('uid');
        $log['mobile'] = '18353115149';
        $log['dealtime'] = '8888';
        $log['dealno'] = '9999';
        $log['coinnum'] = 1;
        $log['description'] = 'give';
        $log['result'] = 'success';
        $log['returncode'] = '10086';
        $lid = $this->Log_model->add($log);
        $data['log'] = $this->Log_model->get($lid);
        $this->load->view('user/give', $data);
    }
    public function log() {
        if(! $this->User_model->auth()) {
            redirect(site_url('user/add'));
        }
        $this->load->model('Log_model');
        $uid = $this->session->userdata('dc_uid');
        $limit = 10;
        $this->load->library('pagination');
        $offset = $this->uri->segment(3);
        $config['uri_segment'] = 3;
        $config['base_url'] = site_url('user/log');
        $config['total_rows'] = $this->Log_model->getnum_user($uid);
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);

        $data['loglist'] = $this->Log_model->getlist_user($uid, $limit, $offset);
        $data['user'] = $this->User_model->get($uid);

        $this->load->model('Option_model');
        $data['coinlimit'] = $this->Option_model->get('coinlimit');

        $this->load->view('user/log', $data);
    }
    public function test() {
        print_r($_COOKIE);
        //print_r($this->User_model->getp());
        exit();
        //print_r($_SESSION);
        $url = 'http://www.1000you.com/bbs/zxf_userinfo.php';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_COOKIE, "SA8R_2132_auth=e7e71m7QvMo0ZXQVHEv7qpGlObXGJAmJrPFJNQzG2t68A3S1XdBtITUWqraq5kFmxow1FTAHHFKcE5vKnJXYQrcg; SA8R_2132_saltkey=m7Z3T1cV");
        $response = curl_exec($ch);
        curl_close($ch);
        print_r($response);
        print_r(json_decode($response));
    }

    // mobile controller
    public function madd() {
        $this->load->helper('form');
        if($this->input->post()) {
            $user = array();
            $user['pid'] = $this->User_model->getp()->uid;
            $user['puname'] = $this->User_model->getp()->uname;
            $user['mobile'] = $this->input->post('mobile');
            $user['sum'] = 0;
            $user['today'] = 0;
            $user['state'] = 'normal';
            $uid = $this->User_model->add($user);
            $this->session->set_userdata('dc_uid', $uid);
            redirect('user/mlog');
        } else {
            if(! $this->User_model->getp()) {
                redirect('http://m.1000you.com/');
            }
            $this->load->view('user/madd');
        }
    }
    public function mset() {
        if(! $this->User_model->auth()) {
            redirect(site_url('user/madd'));
        }
        $this->load->helper('form');
        $uid = $this->session->userdata('dc_uid');
        if($this->input->post()) {
            $data['mobile'] = $this->input->post('mobile');
            $this->User_model->set($uid, $data);
            redirect('user/mset');
        } else {
            $data['user'] = $this->User_model->get($uid);
            $this->load->view('user/mset', $data);
        }
    }
    public function mlog() {
        if(! $this->User_model->auth()) {
            redirect(site_url('user/madd'));
        }
        $this->load->model('Log_model');
        $uid = $this->session->userdata('dc_uid');
        $limit = 10;
        $this->load->library('pagination');
        $offset = $this->uri->segment(3);
        $config['uri_segment'] = 3;
        $config['base_url'] = site_url('user/mlog');
        $config['total_rows'] = $this->Log_model->getnum_user($uid);
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);

        $data['loglist'] = $this->Log_model->getlist_user($uid, $limit, $offset);
        $data['user'] = $this->User_model->get($uid);

        $this->load->model('Option_model');
        $data['coinlimit'] = $this->Option_model->get('coinlimit');

        $this->load->view('user/mlog', $data);
    }
}