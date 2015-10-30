<?php $this->load->view('layout/header'); ?>
<form method="post" action="set">
    <input type="input" name="mobile" value="<?= $user->mobile ?>">
    <input type="submit">
</form>
<?php $this->load->view('layout/footer'); ?>
