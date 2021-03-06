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
    <form method="post" action="<?= site_url('game/add') ?>">
        <label class="user-label">游戏库中编号：</label>
        <input type="hidden" name="step" value="collect">
        <input class="user-mobile" type="input" name="pid">
        <input class="user-button" type="submit" value="下一步">
    </form>
</div>

<?php $this->load->view('layout/htfooter'); ?>
