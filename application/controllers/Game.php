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
        $this->load->helper('form');
        if($this->input->post()) {
            $game = array();
            $game['pid'] = $this->input->post('pid');
            $game['state'] = 'new';
            $game['coinlimit'] = 0;
            $game['coinnow'] = 0;
            $gid = $this->Game_model->add($game);
            redirect('game/show/' . $gid);
        } else {
            $this->load->view('game/add');
        }
    }
    public function set() {
        $this->load->helper('form');
        if($this->input->post()) {
            $gid = $this->input->post('gid');
            $data['coinlimit'] = $this->input->post('coinlimit');
            $this->Game_model->set($gid, $data);
            redirect('game/show/' . $gid);
        } else {
            $gid = $this->uri->segment(3);
            $data['game'] = $this->Game_model->get($gid);
            $this->load->view('game/set', $data);
        }
    }
    public function show() {
        $gid = $this->uri->segment(3);
        $data['game'] = $this->Game_model->get($gid);
        $this->load->view('game/show', $data);
    }
    public function all() {
        $limit = 10;
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
}