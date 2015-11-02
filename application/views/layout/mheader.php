<?php
require("../e/class/connect.php");
if(!defined('InEmpireCMS'))
{
    exit();
}
require("../e/class/db_sql.php");
require("../e/class/q_functions.php");
require("../e/data/dbcache/class.php");

$link=db_connect();
$empire=new mysqlquery();

$wwwurl=$public_r['add_www_92game_net_siteurl'];
$wwwurl2=substr($public_r['add_www_92game_net_siteurl'],0,-1);
$imgurl=$public_r['add_www_92game_net_imgurl'];
if(!$imgurl)$imgurl=$wwwurl2;
$bbsurl=$public_r['add_www_92game_net_bbsurl'];
$kaurl=$public_r['add_www_92game_net_kaurl'];
$murl=$public_r['add_www_92game_net_mobile'];
$sname=$public_r['add_www_92game_net_simplename'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <base href="http://m.1000you.com/"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1,user-scalable=no;">
    <link href="m_style.css" type="text/css" rel="stylesheet" />
    <link href="m.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="jquery-1.8.3.min.js"></script>
    <script>var bbsurl='<?=$bbsurl?>';</script>
    <script src="<?=$bbsurl?>zxf_fromhash_js.php"></script>
    <script type="text/javascript" src="m_global.js"></script>
    <script type="text/javascript" src="swipe.js"></script>
    <title>手机网游第一门户_手机<?=$sname?>网</title>
    <meta name="keywords" content="手机网游下载,手机网游第一门户,手机<?=$sname?>网">
    <meta name="description" content="手机<?=$sname?>网中国手机网游第一门户,提供最新手机网游下载、手机网游排行榜、手机网游开服表、游戏发号礼包，和手机游戏攻略活动、资讯评测等原创内容，无限欢乐尽在手机<?=$sname?>网。">
</head>

<body>

<div class="header">
    <div id="head">
        <div id="kjdh">
            <dl>
                <dt id="dh" data="5"><span></span>快捷导航</dt>
                <dd id="dhmenu">
                    <div class="arrow"></div>
                    <div class="menu_box">
                        <a href="<?=$murl?>huodong.php" id="dh1">游戏活动</a><span>|</span>              <a href="<?=$murl?>pingce.php" id="dh2">游戏评测</a><span>|</span>              <a href="<?=$murl?>biz.php" id="dh3">行业新闻</a><span>|</span>              <a href="<?=$murl?>azphb.php" id="dh4">排行榜</a>     </div>
                </dd>
            </dl>
            <ul id="login">

            </ul>
            <div class="gift"><a href="<?=$bbsurl?>zxf_mycard.php">我的礼包</a></div>
        </div>
        <div class="top">
            <div id="logo"><a href="/" title="触屏版"></a></div>
            <div id="search">
                <form action="/search.php">
                    <input  name="q" class="search_text" type="text" id="" onFocus="if(this.value == '输入要搜索的内容') this.value = '';" onBlur="if(this.value == '') this.value = '输入要搜索的内容';" value="输入要搜索的内容"  />
                    <button class="search_ico" id="" type="submit"></button>
                    <input type="hidden" name="m" value="xpmobile"/>
                    <input type="hidden" name="c" value="search"/>
                    <input type="hidden" name="a" value="init"/>
                </form>
            </div>
        </div>
    </div>  <div class="nav">
        <ul>
            <li><a <?=$isindex?'class="cur"':''?> href="/" title="首页">首页</a></li>
            <li><a href="/yxk.php" title="游戏库">游戏库</a></li>
            <li><a <?=$isnews?'class="cur"':''?> href="/xinwen.php" title="新闻">新闻</a></li>
            <li><a href="/fahao.php" title="发号">发号</a></li>
            <li><a href="/gonglue.php" title="攻略">攻略</a></li>
        </ul>
    </div>
</div>

<div id="main">

