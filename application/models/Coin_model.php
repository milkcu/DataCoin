<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @authour: Xintong Liu
 * @link: http://www.xint78.com
 */
class Coin_model extends CI_Model {
    public function __construct() {
        $this->load->model('Game_model');
        $this->load->model('User_model');
    }
    public function give($mobile, $coinnum, $uid, $gid) {
        $dealtime = date("YmdHis", time());
        $dealno = $dealtime . rand(10000000, 99999999);

        $response = new stdClass();
        $response->mobile = $mobile;
        $response->coinnum = $coinnum;
        $response->dealtime = $dealtime;
        $response->dealno = $dealno;

        $r = new stdClass();
        if(! $this->gameCheck($gid)) {
            $r->status = 'fail';
            $r->code = '991';  // game fail
        } elseif(! $this->userCheck($uid)) {
            $r->status = 'fail';
            $r->code = '992';  // user fail
        } else {
            $a = array();
            $cmd = "java -cp /Users/xintong/Projects/EclipseWorkspace/CoinKit/CoinKit.jar api.Main "
                . $mobile . " " . $coinnum . " " . $dealtime . " " . $dealno;
            // {"message":"ok","result":{"list":[{"effect_time":"20151107163157","credit":"1.0","account_period":"201603","account_no":"1008611"}]},"status":"ok","code":"0"}
            exec($cmd, $a, $b);
            $r = json_decode($a[1]);
            //$r->code = 0;  // test
            if($r->code == 0) {
                $this->gameProcess($gid);
                $this->userProcess($uid);
            }
        }
        $response->return = $r;

        $this->load->model('Log_model');
        $log = array();
        $log['gid'] = $gid;
        $log['uid'] = $uid;
        $log['mobile'] = $mobile;
        $log['dealtime'] = $dealtime;
        $log['dealno'] = $dealno;
        $log['coinnum'] = $coinnum;
        $log['description'] = 'give';
        $log['response'] = json_encode($r);
        $log['result'] = $r->status;
        $log['returncode'] = $r->code;
        $lid = $this->Log_model->add($log);

        return $response;
    }
    public function userCheck($uid) {
        // user
        $this->load->model('Option_model');
        $user = $this->User_model->get($uid);
        $coinlimit = $this->Option_model->get('coinlimit');
        if($user->today < $coinlimit) {
            return true;
        }
        return false;
    }
    public function gameCheck($gid) {
        // game
        $game = $this->Game_model->get($gid);
        if($game->coinnow > 0) {
            return true;
        }
        return false;
    }
    public function gameProcess($gid) {
        $game = $this->Game_model->get($gid);
        $this->db->set('coinnow', $game->coinnow - 1);
        $this->db->where('gid', $gid);
        $this->db->update('game');
    }
    public function userProcess($uid) {
        $user = $this->User_model->get($uid);
        $state = date('ymd', time());
        if($user->state == $state) {
            $this->db->set('today', $user->today + 1);
            $this->db->where('uid', $uid);
            $this->db->update('user');
        } else {
            $this->db->set('today', 1);
            $this->db->set('state', $state);
            $this->db->where('uid', $uid);
            $this->db->update('user');
        }
        $this->db->set('sum', $user->sum + 1);
        $this->db->where('uid', $uid);
        $this->db->update('user');
    }
}