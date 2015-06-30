<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Wishlist</title>
	<!-- js and jquery -->
	<script src="<?= base_url('assets/node_modules/jquery/dist/jquery.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/script.js') ?>"></script>
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?= base_url('assets/node_modules/bootstrap/dist/css/bootstrap.min.css') ?>" type="text/css" />
	<script src="<?= base_url('assets/node_modules/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
	<!-- my stylesheet -->
	<link rel="stylesheet" type="text/css" href="<? base_url('assets/stylesheet.css') ?>">
</head>
<body>
	<div>
		<? $this->load->view('partials/topnav') ?>
	</div>



	<div class="container wrapper" id="container">
		<?php
		if($this->session->flashdata('success')) {
			echo $this->session->flashdata('success');
		}
		?>
		<h2>Hello, 
			<?php 
			if($this->session->userdata('username')) {
				echo $this->session->userdata('username');
			}
			?>!
		</h2>
		
		<p>
			<?php 
			if($this->session->flashdata('create_success')) {
				echo $this->session->flashdata('create_success');
			}
			?>
		</p>

		<h4>Your Wish List:</h4>
		<table id="myWishList" class="table table-striped">
			<tr>
				<th>Item</th>
				<th>Added By</th>
				<th>Date Wishlisted</th>
				<th>Action</th>
			</tr>
			<?php
			if ($my_list[0]['item_name']) {				
				foreach ($my_list as $data) {
			?>
				<tr>
					<td>
						<form action="">
							<a class="oneItem" href=""><?= $data['item_name'] ?></a>
							<input type="hidden" name="item" value="<?= $data['item_name'] ?>">
						</form>
					</td>
					<td><?= $data['added_by_user'] ?></td>
					<td><?= $data['created_at'] ?></td>
					<td><a href="/wishlists/destroy/<?= $data['item_name'] ?>" class="btn btn-danger">Remove from my Wishlist</a></td>
				</tr>
			<?php	
				}
			} else {
			?> 
			<tr>
				<td><h4>You don't have items in your wishlist yet</h4></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<?
			}
			?>
		</table>		
		
		<a href="/wishlists/goto_create" class="btn btn-success">Add A New Item</a>
	</div>
</body>
</html>