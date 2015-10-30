<?php $this->load->view('layout/header'); ?>
<?php print_r($userlist); ?>
<?php echo $this->pagination->create_links() ?>
<?php $this->load->view('layout/footer'); ?>
