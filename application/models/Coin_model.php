<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @authour: Xintong Liu
 * @link: http://www.xint78.com
 */
class Coin_model extends CI_Model {
    public function give($mobile, $coinnum) {
        $dealtime = date("YmdHis", time());
        $dealno = $dealtime . rand(10000000, 99999999);
        $a = array();
        $cmd = "java -cp /Users/xintong/Projects/EclipseWorkspace/CoinKit/CoinKit.jar api.Main "
                . $mobile . " " . $coinnum . " " . $dealtime . " " . $dealno;
        exec($cmd, $a, $b);
        $response = new stdClass();
        $response->mobile = $mobile;
        $response->coinnum = $coinnum;
        $response->dealtime = $dealtime;
        $response->dealno = $dealno;
        $response->return = json_decode($a[1]);
        return $response;
    }
}