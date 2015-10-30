<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * @authour: Xintong Liu
 * @link: http://www.xint78.com
 */
class Option extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Option_model');
    }
    public function coin() {
        $this->load->helper('form');
        if($this->input->post()) {
            $name = 'coin_limit';
            $value = $this->input->post($name);
            $this->Option_model->set($name, $value);
            redirect('option/coin');
        } else {
            $data['option'] = $this->Option_model->get('coin_limit');
            $this->load->view('option/coin', $data);
        }
    }
}