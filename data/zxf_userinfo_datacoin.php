<?php
require './source/class/class_core.php';
require './zxf_config.php';
$discuz = & discuz_core::instance();
$discuz->init_cron = false;
$discuz->init_session = false;
$discuz->init();
//echo $_G['uid'];
$row2 = C::t('common_member_count')->fetch($_G['uid']);
$money = $row2[$scorefield];
$hash=formhash();
//echo $_G['uid'].'|'.$_G['username'].'|'.$money.'|'.$hash;


$callback = isset($_GET['callback']) ? trim($_GET['callback']) : '';
//echo($callback.'({"uid":"'.$_G['uid'].'","uname":"'.$_G['username'].'"})');
$p = new stdClass();
$p->uid = $_G['uid'];
$p->uname = $_G['username'];
echo json_encode($p);

//echo("ajaxCallback1([{\"uid\":\"".$_G['uid']."\",\"uname\":\"".$_G['username']."\",\"money\":\"".$money."\",\"hash\":\"".$hash."\"}])");
?>