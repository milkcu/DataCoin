<?php $this->load->view('layout/htheader'); ?>

<style>
    .user-set {
        text-align: center;
        width: 100%;
    }
    .user-label {
        display: block;
        font-size: 16px;
        margin-top: 50px;
    }
    .user-input {
        display: block;
        margin: 20px auto;
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
        <input type="hidden" name="step" value="check">
        <input type="hidden" name="pid" value="<?= $game->pid ?>">
        <label class="user-label">游戏名称：</label>
        <input class="user-input" type="input" name="pname">
        <label class="user-label">游戏图标：</label>
        <input class="user-input" type="input" name="pimg">
        <label class="user-label">下载地址：</label>
        <input class="user-input" type="input" name="pfile">
        <input class="user-button" type="submit" value="下一步">
    </form>
</div>

<?php $this->load->view('layout/htfooter'); ?>
