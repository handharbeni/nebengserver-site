<!doctype html>
<html lang="en">
	<?php $this->load->view('client/head') ?>
	<body>
		
		<div class="wrapper">
		    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
		    	<?php $this->load->view('client/menu_sidebar'); ?>
		    	<?php $this->load->view($content); ?>
		    	<?php $this->load->view('client/footer'); ?>
		    </div>
	    </div>
	</body>
	<?php $this->load->view('script') ?>
</html>