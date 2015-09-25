<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Wishlist</title>
	<!-- js and jquery -->
	<script src="http://localhost:8888/assets/node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="http://localhost:8888/assets/script.js"></script>
	<!-- bootstrap -->
	<link rel="stylesheet" href="http://localhost:8888/assets/node_modules/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
	<script src="http://localhost:8888/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- my stylesheet -->
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<div>
		<nav class="navbar navbar-inverse ">
	<div class="container-fluid">
		<div class="navbar-header collapse navbar-collapse">
			<a href="/wishlists" class="navbar-brand">JV's Wishlist App</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li>
					<a id="myWishlist" href="/wishlists">Your Wishlist</a>
				</li>
				<li>
					<a id="other" href="">See what others wish for!</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right collapse navbar-collapse">
				<li>
				<a href="/users/logout">Logout</a>	
				</li>
			</ul>
		</div>
	</div>
</nav>	</div>



	<div class="container wrapper" id="container">
				<h2>Hello, 
			fortis!
		</h2>
		
		<p>
					</p>

		<h4>Your Wish List:</h4>
		<table id="myWishList" class="table table-striped">
			<tr>
				<th>Item</th>
				<th>Added By</th>
				<th>Date Wishlisted</th>
				<th>Action</th>
			</tr>
							<tr>
					<td>
						<form action="">
							<a class="oneItem" href="">Shiny Ninja Forehead Protector</a>
							<input type="hidden" name="item" value="Shiny Ninja Forehead Protector">
						</form>
					</td>
					<td>fortis</td>
					<td>2015-09-02</td>
					<td><a href="/wishlists/destroy/Shiny Ninja Forehead Protector" class="btn btn-danger">Remove from my Wishlist</a></td>
				</tr>
							<tr>
					<td>
						<form action="">
							<a class="oneItem" href="">Limitless Flask of Holding</a>
							<input type="hidden" name="item" value="Limitless Flask of Holding">
						</form>
					</td>
					<td>theSorceress</td>
					<td>2015-09-21</td>
					<td><a href="/wishlists/destroy/Limitless Flask of Holding" class="btn btn-danger">Remove from my Wishlist</a></td>
				</tr>
							<tr>
					<td>
						<form action="">
							<a class="oneItem" href="">Portable Teleporter</a>
							<input type="hidden" name="item" value="Portable Teleporter">
						</form>
					</td>
					<td>fortis</td>
					<td>2015-06-29</td>
					<td><a href="/wishlists/destroy/Portable Teleporter" class="btn btn-danger">Remove from my Wishlist</a></td>
				</tr>
							<tr>
					<td>
						<form action="">
							<a class="oneItem" href="">MIkasa Ackerman Figma</a>
							<input type="hidden" name="item" value="MIkasa Ackerman Figma">
						</form>
					</td>
					<td>fortis</td>
					<td>2015-06-29</td>
					<td><a href="/wishlists/destroy/MIkasa Ackerman Figma" class="btn btn-danger">Remove from my Wishlist</a></td>
				</tr>
							<tr>
					<td>
						<form action="">
							<a class="oneItem" href="">Wightless Aluminum Mug</a>
							<input type="hidden" name="item" value="Wightless Aluminum Mug">
						</form>
					</td>
					<td>theSorceress</td>
					<td>2015-06-29</td>
					<td><a href="/wishlists/destroy/Wightless Aluminum Mug" class="btn btn-danger">Remove from my Wishlist</a></td>
				</tr>
					</table>		
		
		<a href="/wishlists/goto_create" class="btn btn-success">Add A New Item</a>
	</div>
</body>
</html>
