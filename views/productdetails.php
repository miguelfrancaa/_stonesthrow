<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>STONES THROW</title>
		<meta name="keywords" content="STONES THROW">
		<link rel="icon" href="img/logost.ico">
		<meta name="description" content="stones throw, records, hiphop, music, alternative, quasimoto, mfdoom, underground, label">
		<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/style.css">
		<style type="text/css">
			input[type=number] {
  float: left;
  width: 50px;
  height: 35px;
  padding: 0;
  font-size: 15px;
  text-transform: uppercase;
  text-align: center;
  color: black;
  border: 1px black solid;
  background: none;
  outline: none;
  pointer-events: none;
}

span.spinner {
  position: absolute;
  height: 40px;
  user-select: none;
  -ms-user-select: none;
  -moz-user-select: none;
  -webkit-user-select: none;
  -webkit-touch-callout: none;
}

span.spinner > .sub,
span.spinner > .add {
  float: left;
  display: block;
  width: 35px;
  height: 35px;
  text-align: center;
  font-weight: 700;
  font-size: 15px;
  line-height: 33px;
  color: black;
  border: 1px black solid;
  border-right: 0;
  border-radius: 2px 0 0 2px;
  cursor: pointer;
  transition: 0.1s linear;
  -o-transition: 0.1s linear;
  -ms-transition: 0.1s linear;
  -moz-transition: 0.1s linear;
  -webkit-transition: 0.1s linear;
}

span.spinner > .add {
  top: 0;
  border: 1px black solid;
  border-left: 0;
  border-radius: 0 2px 2px 0;
}

span.spinner > .sub:hover,
span.spinner > .add:hover {
  background: #FE5724;
  color: white;
}
 input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button {
 -webkit-appearance: none;
}
		</style>
	</head>
<?php
	require("includes/header.php");
?>
	<main>
		<div class="container noAbsolute">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<img src="/img/products/<?= $product["image"] ?>">
					<form method="post" action="/cart/">
						<div class='pricepd'><div class="cen">$<?= $product["price"] ?></div></div><br><br>
							<input type="hidden" name="product_id" value="<?= $product["product_id"] ?>">
<?php
	if($product["stock"] > 0){
?>
							<input name="quantity" type="number" min="1" max="<?= $product["stock"] ?>" value="1" required/><br><br><br>			
							<button class="pricepd" type="submit" name="send">BUY</button>
<?php
}else{
	echo "Sold Out";
}
?>
					</form>
				</div>
				<div class="col-md-8 col-sm-12 col-xs-12">
					<h2><div><?= $product["item"] ?></div><br>
					<div class="vinylText"><?= $product["name"] ?></div></h2><br>
					<div style="font-size: 17px; color: #FE5724;"><?= $product["type"] ?></div><br><br>
					<div class="productDescription"><?= nl2br($product["description"]) ?></div><br><br>
<?php
	if (intval($product["parent_id"]) === 1) {
?>
					<div class="tracklist"><span style="font-weight: 400;">Tracklist:</span><br><br><?= nl2br($product["tracklist"]) ?></div>
<?php
}
?>
				</div>
			</div>
		</div>
	</main>


	


	<script src="/js/jquery-3.6.0.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/script.js"></script>
	<script>
			(function($) {
			$.fn.spinner = function() {
			this.each(function() {
			var el = $(this);

			// add elements
			el.wrap('<span class="spinner"></span>');     
			el.before('<span class="sub">-</span>');
			el.after('<span class="add">+</span>');

			// substract
			el.parent().on('click', '.sub', function () {
			if (el.val() > parseInt(el.attr('min')))
			el.val( function(i, oldval) { return --oldval; });
			});

			// increment
			el.parent().on('click', '.add', function () {
			if (el.val() < parseInt(el.attr('max')))
			el.val( function(i, oldval) { return ++oldval; });
			});
			    });
			};
			})(jQuery);

			$('input[type=number]').spinner();
</script>
	</body>
</html>