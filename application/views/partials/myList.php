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
					<td><a href="/wishlists/show_item/<?= $data['item_name'] ?>"><?= $data['item_name'] ?></a></td>
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