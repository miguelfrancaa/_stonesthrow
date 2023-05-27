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
	</head>
<?php
	require("includes/header.php");
?>
	<main>
		<div class="container noAbsolute">
<?php
	foreach ($products as $product) {
		echo "<a href='/productdetails/".$product["product_id"]."'><div class='row rela'>
				<div class='col-md-7 col-sm-12 col-xs-12'><img class='vin john' src='/img/products/".$product["image"]."'></div>
				<div class='col-md-5 col-sm-12 col-xs-12 vinylText relaa'>
					<h2>".$product["item"]."<br>
					<a href=artists.php?artist_id=".$product["artist_id"]."><span class='vinylText'>".$product["name"]."</span></h2></a>
					<div style='font-size: 17px'>".$product["type"]."</div><br>
					<h3 id='productDescription".$product["product_id"]."'>".substr($product["description"], 0, 400)."<span class='readMore".$product["product_id"]."'>...&nbsp &nbsp </span><span class='readMore".$product["product_id"]."' style='color:black; font-size:15px; text-decoration:underline'>Read More</span></h3><br>
					<br>
						<button class='price price1'>$".$product["price"]."</button>
				</div>
			</div></a>";
	}
?>
			</div>
		</div>
	</main>

	<?php
	require("includes/footer.php");
	?>



	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	<script type="text/javascript">

<?php
	foreach ($products as $product) {
		echo "

			let characters".$product["product_id"]." = $('#productDescription".$product["product_id"]."').text().length;

			if(characters".$product["product_id"]." < 414){
				$('.readMore".$product["product_id"]."').css('display', 'none');
			}

		";
	}
?>
	</script>
	</body>
</html>