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
		<script>

			document.addEventListener("DOMContentLoaded", () =>{

				$('.minus').click(function () {
		        var $input = $(this).parent().find('input');
		        var count = parseInt($input.val()) - 1;
		        count = count < 1 ? 1 : count;
		        $input.val(count);
		        $input.change();
		        return false;
		      });
		      $('.plus').click(function () {
		        var $input = $(this).parent().find('input');
		        $input.val(parseInt($input.val()) + 1);
		        $input.change();
		        return false;
		      });

				$originvalue =

				$(".menos").click(function() {
				  console.log("funca")
				});

				$(".mais").click(function() {
 				 $(".cartQt").text()
				});


				const removeButtons = document.querySelectorAll(".removeBtn");
				const quantityChange = document.querySelectorAll(".quantity");


				for(let button of removeButtons){

					button.addEventListener("click", () => {

						const tr = button.parentNode.parentNode;

						fetch("requests/", {
							method: "POST",
							headers: {
								"Content-Type":"application/x-www-form-urlencoded"
							},
							body: "request=removeProduct&product_id=" + tr.dataset.product_id
						})
						.then(response => response.json())
						.then(result => {
							if(result.status === "OK"){
								tr.remove();
							}

						});


						
					});
				}

					for(let input of quantityChange) {
						input.addEventListener("change", () => {

							const tr = input.parentNode.parentNode;

							fetch("requests/", {
							method: "POST",
							headers: {
								"Content-Type":"application/x-www-form-urlencoded"
							},
							body: "request=changeQuantity&product_id=" + tr.dataset.product_id + "&quantity=" + input.value
						})
						.then(response => response.json())
						.then(result => console.log(result) );


						});
					}
			});

		</script>
	</head>
<?php
	require("includes/header.php");
?>
	<main>
<?php
	if(!empty($_SESSION["cart"])){
?>
	<div class="container containerCart">
		<table class="cartTable">
			<tr class="lineBase">
				<th colspan="2">ITEM</th>
				<th>TYPE</th>
				<th>QUANTITY</th>
				<th>PRICE</th>
				<th></th>
			</tr>
<?php
	$total= 0;
	foreach ($_SESSION["cart"] as $item) {
		if (isset($item["name"])) {
				$space = ' - ';
			}else{
				$space = '';
			}


		$subtotal = $item["price"] * $item["quantity"];

		$total += $subtotal;

		echo '<tr class="lineProduct" data-product_id="'.$item["product_id"].'">
				<td><img style="position: relative; height: 150px;" src="/img/products/'.$item["image"].'"></td>
				<td>'.$item["name"].''.$space.''.$item["item"].'</td>
				<td>'.$item["type"].'</td>
				<td>
					<input class="quantity" type="number" value="'.$item["quantity"].'">
				</td>
				<td>$'.$subtotal.'</td>
				<td><button type="button" class="removeBtn">x</button></td>
			</tr>';

	}
?>
			<tr>
				<td colspan="4" style="font-weight: 100;">Total</td>
				<td>$<?= $total ?></td>
			</tr>
		</table>
		<form>
		<div class="buttonsMenu">
		<button class="update" type="button"><a href="/cart/">UPDATE CART</a><div class="fa fa-refresh ref"></button>
		<button class="checkout" type="submit"><a href="/checkout/">CHECKOUT</a></div></button>
		</form>
		</div>
		</div>
<?php
	}else{
		echo "<p style='top: 50%; left: 50%; transform:translate(-50%, -50%); position: absolute; font-size: 30px;'>Carrinho Vazio</p>";
	}
?>
	</main>


	<script src="/js/jquery-3.6.0.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/script.js"></script>
	</body>
</html>