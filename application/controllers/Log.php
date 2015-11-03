<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @authour: Xintong Liu
 * @link: http://www.xint78.com
 */
class Log extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Log_model');
    }
    public function all() {
        $this->load->model('Option_model');
        if(! $this->Option_model->auth()) {
            redirect(base_url('e/1000you'));
        }
        $limit = 10;
        $this->load->library('pagination');
        $offset = $this->uri->segment(3);
        //$offset = $page ? ($page - 1) * $limit : 0;
        //$config['use_page_numbers'] = true;
        $config['uri_segment'] = 3;
        $config['base_url'] = site_url('log/all');
        $config['total_rows'] = $this->Log_model->getnum();
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);

        $data['loglist'] = $this->Log_model->getlist($limit, $offset);
        $this->load->view('log/list', $data);
    }
    public function test() {
        print_r($_COOKIE);
    }
    public function user() {
        //$uid = $this->session->userdata('dc_uid');
        $uid = 9;
        $limit = 10;
        $this->load->library('pagination');
        $offset = $this->uri->segment(3);
        $config['uri_segment'] = 3;
        $config['base_url'] = site_url('log/user');
        $config['total_rows'] = $this->Log_model->getnum();
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);

        $data['loglist'] = $this->Log_model->getlist_user($uid, $limit, $offset);
        $this->load->view('log/user', $data);
    }
}