<!-- Footer -->
<footer>
	<div class="row">
		<div class="col-lg-12">

		</div>
	</div>
</footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="<?php echo base_url()?>/assets/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>

<script type='text/javascript' src="<?php echo base_url()?>/assets/js/jquery.mycart.js"></script>
<script type="text/javascript">
	$(function () {

		var goToCartIcon = function($addTocartBtn){
			var $cartIcon = $(".my-cart-icon");
			var $image = $('<img width="30px" height="30px" src="<?php echo base_url()?>/assets/' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
			$addTocartBtn.prepend($image);
			var position = $cartIcon.position();
			$image.animate({
				top: position.top,
				left: position.left
			}, 500 , "linear", function() {
				$image.remove();
			});
		}

		$('.my-cart-btn').myCart({
			classCartIcon: 'my-cart-icon',
			classCartBadge: 'my-cart-badge',
			classProductQuantity: 'my-product-quantity',
			classProductRemove: 'my-product-remove',
			classCheckoutCart: 'my-cart-checkout',
			affixCartIcon: true,
			showCheckoutModal: true,
			cartItems: [
				{id: 1, name: 'product 1', summary: 'summary 1', price: 10, quantity: 1, image: 'images/img_1.png'},
				{id: 2, name: 'product 2', summary: 'summary 2', price: 20, quantity: 2, image: 'images/img_2.png'},
				{id: 3, name: 'product 3', summary: 'summary 3', price: 30, quantity: 1, image: 'images/img_3.png'}
			],
			clickOnAddToCart: function($addTocart){
				goToCartIcon($addTocart);
			},
			clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
				console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
			},
			checkoutCart: function(products, totalPrice, totalQuantity) {
				console.log("checking out", products, totalPrice, totalQuantity);
			},
			getDiscountPrice: function(products, totalPrice, totalQuantity) {
				console.log("calculating discount", products, totalPrice, totalQuantity);
				return totalPrice * 0.5;
			}
		});

	});
</script>

<!-- Script to Activate the Carousel -->
<script>
	$('.carousel').carousel({
		interval: 5000 //changes the speed
	})
</script>

</body>

</html>