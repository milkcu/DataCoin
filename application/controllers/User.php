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
        $this->session->set_userdata('dc_uid', 9);
        $this->session->set_userdata('dc_mobile', '18353115149');
        print_r($this->session->userdata());
    }
    public function add() {
        $this->load->helper('form');
        if($this->input->post()) {
            $user = array();
            $user['pid'] = '9';
            $user['mobile'] = $this->input->post('mobile');
            $user['sum'] = 0;
            $user['today'] = 0;
            $user['state'] = 'normal';
            $uid = $this->User_model->add($user);
            $this->session->set_userdata('dc_uid', $uid);
            redirect('user/log');
        } else {
            $this->load->view('user/add');
        }
    }
    public function show() {
        $uid = $this->session->userdata('dc_uid');
        $data['user'] = $this->User_model->get($uid);
        $this->load->view('user/show', $data);
    }
    public function set() {
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
        $this->load->helper('form');
        if($this->input->post()) {
            $uid = $this->input->post('uid');
            $data['state'] = $this->input->post('state');
            $this->User_model->set($uid, $data);
            redirect('user/all');
        } else {
            $uid = $this->uri->segment(3);
            $data['user'] = $this->User_model->get($uid);
            $this->load->view('user/state', $data);
        }
    }
    public function all() {
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
        $log['gid'] = 9;
        $log['uid'] = 9;
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
        $this->load->model('Log_model');
        $uid = $this->session->userdata('dc_uid');
        $limit = 10;
        $this->load->library('pagination');
        $offset = $this->uri->segment(3);
        $config['uri_segment'] = 3;
        $config['base_url'] = site_url('user/log');
        $config['total_rows'] = $this->Log_model->getnum();
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);

        $data['loglist'] = $this->Log_model->getlist_user($uid, $limit, $offset);
        $data['user'] = $this->User_model->get($uid);
        $this->load->view('user/log', $data);
    }
}