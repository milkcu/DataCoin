<?php $this->load->view('layout/header'); ?>
<?php print_r($loglist); ?>
<?php echo $this->pagination->create_links() ?>
<?php $this->load->view('layout/footer'); ?>
