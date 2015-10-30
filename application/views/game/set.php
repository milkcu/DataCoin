<?php $this->load->view('layout/header'); ?>
<form method="post" action="../set">
    <input type="hidden" name="gid" value="<?= $game->gid ?>">
    <input type="input" name="coinlimit" value="<?= $game->coinlimit ?>">
    <input type="submit">
</form>
<?php $this->load->view('layout/footer'); ?>
