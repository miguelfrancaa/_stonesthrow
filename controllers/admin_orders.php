<?php
	require("models/orders.php");

	$model = new Orders();

	$orders = $model->listOrders();

	require("views/admin_orders.php");
?>