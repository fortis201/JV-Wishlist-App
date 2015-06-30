$(document).ready(function() {
	// $(".container").html('')

	$(document).on("click", "#other", function () {
		$.get('/wishlists/show_others', function(res) {
			$("#container").html(res);			
		});
		return false;
	})

	$(document).on("click", ".oneItem", function() {
		console.log("hello");
		console.log($(this).next().val());
		$.post('/wishlists/show_item/'+$(this).next().val(), $(this).parent().serialize(), function (res) {
			console.log(res);
			$("#container").html(res);	

		})
		return false;
	})
});