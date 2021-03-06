<?php $this->load->view('layout/htheader'); ?>

<style>
    .user-set {
        text-align: center;
        width: 100%;
    }
    .user-label {
        display: block;
        font-size: 16px;
        margin-top: 60px;
    }
    .user-input {
        display: block;
        margin: 40px auto;
        padding: 4px 10px;
        width: 300px;
        border: 1px solid #e4e4e4;
        line-height: 34px;
        font-size: 16px;
    }
    .user-button {
        display: block;
        margin: 10px auto;
        font-size: 24px;
        width: 60px;
        height: 40px;
    }
</style>

<div class="user-set">
    <form method="post" action="<?= site_url('option/coin') ?>">
        <label class="user-label">每日每用户赠送限额：</label>
        <input class="user-input" type="input" name="coinlimit" value="<?= $option->coinlimit ?>">
        <input class="user-button" type="submit" value="修改">
    </form>
</div>

<?php $this->load->view('layout/htfooter'); ?>
