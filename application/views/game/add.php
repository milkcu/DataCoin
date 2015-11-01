<?php $this->load->view('layout/header'); ?>
<form method="post" action="add">
    <label>游戏库中编号</label>
    <input type="input" name="pid">
    <label>游戏名称</label>
    <input type="input" name="pname">
    <label>游戏图标</label>
    <input type="input" name="pimg">
    <label>下载地址</label>
    <input type="input" name="pfile">
    <label>赠送流量币数</label>
    <input type="input" name="coinlimit">
    <input type="submit">
</form>
<?php $this->load->view('layout/footer'); ?>
