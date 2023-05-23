<header>
		<div class="container header">
			<div class="row">
				<div class="col-md-5 col-xs-12 col-sm-12">
					<a href="index.php"><div class="logo"><img src="img/logost.png"></div></a>
				</div>
				<nav class="col-md-7 menus disappear">
					<a href="index2.php"><div class="col-md-2 pags">ARTISTS</div></a>
					<a href="index3.php"><div class="col-md-2 pags">SHOP</div></a>
					<a href="index6.php"><div class="col-md-2 pags">NEWS</div></a>
					<a href="index4.php"><div class="col-md-2 pags">EVENTS</div></a>
					<a href="index5.php"><div class="col-md-2 pags">VIDEOS</div></a>
					<div class="col-md-2 pags">
						<a href="login.php"><div class="col-md-6 fa fa-user" style="
<?php
	if (!empty($_SESSION["user_id"])) {
		echo'color: #FE5724';
	}
?>
						"></div></a>
						<a href="cart.php"><div class="col-md-6 fa fa-shopping-cart" style="
<?php
	if (!empty($_SESSION["cart"])) {
		echo'color: #FE5724 ';
	}
?>
						"></div></a>
					</div>
				</nav>
			</div>
			<a><div class="hamb fechado appear">
				<div class="bar bar1"></div>
				<div class="bar bar2"></div>
				<div class="bar bar3"></div>
			</div></a>
		</div>
		<div class="container popup aberto">
			<div class="row">
			<a><div class="xis">
				<div class="barx bar4"></div>
				<div class="barx bar5"></div>
			</div></a>
			</div>
			<div class="menusxis">
				<nav>
					<a class="menuxis" href="index2.php">ARTISTS</a><br>
					<a class="menuxis" href="index3.php">SHOP</a><br>
					<a class="menuxis" href="index6.php">NEWS</a><br>
					<a class="menuxis" href="index4.php">EVENTS</a><br>
					<a class="menuxis" href="index5.php">VIDEOS</a><br>
					<a class="menuxis" href="login.php">ACCOUNT</a><br>
					<a class="menuxis" href="cart.php">CART</a>
				</nav>
			</div>
		</div>
	</header>
