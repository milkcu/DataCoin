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
        $mobile = $this->session->userdata('dc_mobile');
        $coinnum = 1;
        $response = $this->Coin_model->give($mobile, $coinnum);

        $this->load->model('Log_model');
        $log = array();
        $log['gid'] = $gid;
        $log['uid'] = 9;
        $log['mobile'] = $response->mobile;
        $log['dealtime'] = $response->dealtime;
        $log['dealno'] = $response->dealno;
        $log['coinnum'] = $response->coinnum;
        $log['description'] = 'give';
        $log['result'] = $response->return->status;
        $log['returncode'] = $response->return->code;
        $lid = $this->Log_model->add($log);

        $data['lid'] = $lid;
        $data['response'] = $response;
        if($response->return->code == 0) {
            $this->load->view('coin/success', $data);
        } else {
            $this->load->view('coin/failure', $data);
        }
    }
    public function test() {
        echo base_url('e/1000you');
        //$a = array();
        //exec("ls ~", $a, $b);
        //exec("java -cp /Users/xintong/Projects/EclipseWorkspace/CoinKit/CoinKit.jar api.Main 3 4 5 6", $a, $b);
        //print_r($a);
        //print_r(date("YmdHis", time()) . rand(10000000, 99999999));
    }
    public function code() {
        $this->load->view('coin/code');
    }
}