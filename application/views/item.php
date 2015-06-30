<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>
		<? 
		if ($item_name) {
			echo $item_name;
		}
		 ?>
	</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?= base_url('assets/node_modules/bootstrap/dist/css/bootstrap.min.css') ?>" type="text/css" />
	<script src="<?= base_url('assets/node_modules/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
	<!-- my stylesheet -->
	<link rel="stylesheet" type="text/css" href="<? base_url('assets/stylesheet.css') ?>">
	<!-- js and jquery -->
	<script src="<?= base_url('assets/node_modules/jquery/dist/jquery.min.js') ?>"></script>
</head><body>
	<div>
		<? $this->load->view('partials/topnav') ?>
	</div>
	<div class="container wrapper">
		<h2>
		<? 
		if ($item_name) {
			echo $item_name;
		}
		 ?>
		</h2>		
		<?
		// var_dump($item_info);
		// die();	
		if ($item_info) {
		?>
			<a href="/wishlists/update_wishlist/<?= $item_info[0]['id'] ?>" class="btn btn-success">Add to wishlist!</a>
			<h4>Users who also have this item in their wishlist:</h4>
			<ul>
		<?
			foreach ($item_info as $info) {
		?>
				<li><?= $info['also_added_by'] ?></li>
		<?	
			}		
		?>
			</ul>
		<?
		} else {
			echo "<p>No on else has this item in their wishlist.</p>";
		}
		?>		
	</div>
</body>
</html>