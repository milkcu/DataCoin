<?php $this->load->view('layout/fhheader'); ?>

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
    .user-mobile {
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
    <form method="post" action="<?= site_url('user/add') ?>">
        <label class="user-label">请输入手机号：</label>
        <input class="user-mobile" type="input" name="mobile">
        <input class="user-button" type="submit" value="激活">
    </form>
</div>

<?php $this->load->view('layout/fhfooter'); ?>
