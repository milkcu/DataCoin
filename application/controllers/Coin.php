<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @authour: Xintong Liu
 * @link: http://www.xint78.com
 */
class Coin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Coin_model');
    }
    public function give() {
        $this->load->model('User_model');
        if(! $this->User_model->auth()) {
            redirect(site_url('user/add'));
        }
        $this->load->helper('form');
        $gid = $this->uri->segment(3);
        $uid = $this->session->userdata('dc_uid');
        $this->load->model('User_model');
        $user = $this->User_model->get($uid);
        $mobile = $user->mobile;
        $coinnum = 1;
        $response = $this->Coin_model->give($mobile, $coinnum, $uid, $gid);

        redirect(site_url('user/log'));
    }
    public function code() {
        $this->load->view('coin/code');
    }

    // mobile
    public function mgive() {
        $this->load->model('User_model');
        if(! $this->User_model->auth()) {
            redirect(site_url('user/add'));
        }
        $this->load->helper('form');
        $gid = $this->uri->segment(3);
        $uid = $this->session->userdata('dc_uid');
        $this->load->model('User_model');
        $user = $this->User_model->get($uid);
        $mobile = $user->mobile;
        $coinnum = 1;
        $response = $this->Coin_model->give($mobile, $coinnum, $uid, $gid);

        redirect(site_url('user/mlog'));
    }
}