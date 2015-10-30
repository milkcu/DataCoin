<?php $this->load->view('layout/header'); ?>
<form method="post" action="../state">
    <input type="hidden" name="uid" value="<?= $user->uid ?>">
    <input type="input" name="state" value="<?= $user->state ?>">
    <input type="submit">
</form>
<?php $this->load->view('layout/footer'); ?>
