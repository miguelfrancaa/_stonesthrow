<header>
		<div class="container header">
			<div class="row">
				<div class="col-md-5 col-xs-12 col-sm-12">
					<a href="../home"><div class="logo"><img src="../img/logost.png"></div></a>
				</div>
				<nav class="col-md-7 menus disappear">
					<a href="/artists"><div class="col-md-2 pags">ARTISTS</div></a>
					<a href="/shop"><div class="col-md-2 pags">SHOP</div></a>
					<a href="/news"><div class="col-md-2 pags">NEWS</div></a>
					<a href="/events"><div class="col-md-2 pags">EVENTS</div></a>
					<a href="/videos"><div class="col-md-2 pags">VIDEOS</div></a>
					<div class="col-md-2 pags">
						<a href="/login/"><div class="col-md-6 fa fa-user" style="
<?php
	if (!empty($_SESSION["user_id"])) {
		echo'color: #FE5724';
	}
?>
						"></div></a>
						<a href="/cart/"><div class="col-md-6 fa fa-shopping-cart" style="
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
					<a class="menuxis" href="/artists/">ARTISTS</a><br>
					<a class="menuxis" href="/shop/">SHOP</a><br>
					<a class="menuxis" href="/news/">NEWS</a><br>
					<a class="menuxis" href="/events/">EVENTS</a><br>
					<a class="menuxis" href="/videos/">VIDEOS</a><br>
					<a class="menuxis" href="/login/">ACCOUNT</a><br>
					<a class="menuxis" href="/cart/">CART</a>
				</nav>
			</div>
		</div>
	</header>
