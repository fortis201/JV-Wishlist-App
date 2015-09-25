<h2>Other User's Wish List:</h2>
<table id="othersWishList" class="table table-striped">
	<tr>
		<th>Item</th>
		<th>Added By</th>
		<th>Date Wishlisted</th>
		<th>Action</th>
	</tr>
	<?php
	foreach ($others_list as $data2) {
		//var_dump($data2);
	?>
	<tr>				
		<td>
			<form action="">
				<a class="oneItem" href=""><?= $data2['item_name'] ?></a></td>
				<input type="hidden" name="item" value="<?= $data2['item_name'] ?>">
			</form>
		<td>
			<? if ($data2['wishlisted_by']) {
				echo $data2['wishlisted_by'];
			} else {
				echo "Not Wishlisted";
			} ?>
		</td>
		<td>
			<? if ($data2['date_wishlisted']) {
				echo $data2['date_wishlisted'];
			} else {
				echo "N/A";
			} ?>
		</td>
		<td><a href="wishlists/update_wishlist/<?= $data2['this_item_id'] ?>" class="btn btn-primary">Wish it!</a></td>
	</tr>
	<?php	
	}
	?>
</table>
