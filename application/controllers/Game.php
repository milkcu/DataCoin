<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @authour: Xintong Liu
 * @link: http://www.xint78.com
 */
class Game extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Game_model');
    }
    public function add() {
        $this->load->model('Option_model');
        if(! $this->Option_model->auth()) {
            redirect(base_url('e/1000you'));
        }
        $this->load->helper('form');
        if($this->input->post()) {
            $step = $this->input->post('step');
            $game = array();
            if($step == 'collect') {
                $game['pid'] = $this->input->post('pid');
                $data['game'] = (object) $game;
                $this->load->view('game/collect', $data);
            } elseif($step == 'check') {
                $game['pid'] = $this->input->post('pid');
                $game['pname'] = $this->input->post('pname');

                $game['pimg'] = $this->input->post('pimg');
                $game['pfile'] = $this->input->post('pfile');
                $data['game'] = (object) $game;
                $this->load->view('game/check', $data);
            } elseif($step == 'done') {
                $game['pid'] = $this->input->post('pid');
                $game['pname'] = $this->input->post('pname');
                $game['pimg'] = $this->input->post('pimg');
                $game['pfile'] = $this->input->post('pfile');

                $game['state'] = 'new';
                $game['coinlimit'] = $this->input->post('coinlimit');
                $game['coinnow'] = $game['coinlimit'];
                $gid = $this->Game_model->add($game);
                redirect('game/set');
            }

        } else {
            $this->load->view('game/add');
        }
    }
    public function set() {
        $this->load->model('Option_model');
        if(! $this->Option_model->auth()) {
            redirect(base_url('e/1000you'));
        }
        $this->load->helper('form');
        if($this->input->post()) {
            $gid = $this->input->post('gid');
            $game['pid'] = $this->input->post('pid');
            $game['pname'] = $this->input->post('pname');
            $game['pimg'] = $this->input->post('pimg');
            $game['pfile'] = $this->input->post('pfile');
            $game['coinlimit'] = $this->input->post('coinlimit');
            $game['coinnow'] = $this->input->post('coinnow');
            $this->Game_model->setall($gid, $game);
            redirect('game/set');
        } else {
            $limit = 10;
            $this->load->library('pagination');
            $offset = $this->uri->segment(3);
            $config['uri_segment'] = 3;
            $config['base_url'] = site_url('game/set');
            $config['total_rows'] = $this->Game_model->getnum();
            $config['per_page'] = $limit;
            $this->pagination->initialize($config);

            $data['gamelist'] = $this->Game_model->getlist($limit, $offset);
            $this->load->view('game/set', $data);
        }
    }
    public function show() {
        $gid = $this->uri->segment(3);
        $data['game'] = $this->Game_model->get($gid);
        $this->load->view('game/show', $data);
    }
    public function all() {
        $limit = 20;
        $this->load->library('pagination');
        $offset = $this->uri->segment(3);
        $config['uri_segment'] = 3;
        $config['base_url'] = site_url('game/all');
        $config['total_rows'] = $this->Game_model->getnum();
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);

        $data['gamelist'] = $this->Game_model->getlist($limit, $offset);
        $this->load->view('game/list', $data);
    }
    public function mall() {
        $limit = 10;
        $this->load->library('pagination');
        $offset = $this->uri->segment(3);
        $config['uri_segment'] = 3;
        $config['base_url'] = site_url('game/mall');
        $config['total_rows'] = $this->Game_model->getnum();
        $config['per_page'] = $limit;
        $this->pagination->initialize($config);

        $data['gamelist'] = $this->Game_model->getlist($limit, $offset);
        $this->load->view('game/mlist', $data);
    }
}