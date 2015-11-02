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
        <input type="hidden" name="step" value="done">
        <input type="hidden" name="pid" value="<?= $game->pid ?>">
        <input type="hidden" name="pname" value="<?= $game->pname ?>">
        <input type="hidden" name="pimg" value="<?= $game->pimg ?>">
        <input type="hidden" name="pfile" value="<?= $game->pfile ?>">
        <label class="user-label">赠送流量币总数：</label>
        <input class="user-mobile" type="input" name="coinlimit">
        <input class="user-button" type="submit" value="完成">
    </form>
</div>

<?php $this->load->view('layout/htfooter'); ?>
