<?php $this->load->view('layout/header'); ?>
<?php //print_r($coin_limit); ?>
<form method="post" action="coin">
    <input type="input" name="coin_limit" value="<?= $option->value ?>">
    <input type="submit">
</form>
<?php $this->load->view('layout/footer'); ?>
