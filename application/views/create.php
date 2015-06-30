<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Create A Wishlist Item</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?= base_url('assets/node_modules/bootstrap/dist/css/bootstrap.min.css') ?>" type="text/css" />
	<script src="<?= base_url('assets/node_modules/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
	<!-- my stylesheet -->
	<link rel="stylesheet" type="text/css" href="<? base_url('assets/stylesheet.css') ?>">
	<!-- js and jquery -->
	<script src="<?= base_url('assets/node_modules/jquery/dist/jquery.min.js') ?>"></script>
</head>
<body>
	<div>
		<? $this->load->view('partials/topnav') ?>
	</div>
	<div class="container wrapper">
		<h1>Create a New Wish List Item</h1>
		<form action="/wishlists/create" method="post">
			<label for="item">Item Name:</label>
			<input type="hidden" name="user_id" value= "<?= $this->session->userdata('id') ?>" >
			<input type="text" name="item_name">
			<input type="submit" class="btn btn-success" value="Add!">
		</form>
		<p>
			<?php 
			if($this->session->flashdata('exists_error')) {
				echo $this->session->flashdata('exists_error');
			}
			?>
		</p>
	</div>
</body>
</html>