<div>
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