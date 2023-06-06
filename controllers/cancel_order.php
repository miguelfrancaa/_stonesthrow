<?php
	require_once("models/orders.php");

	$modelOrders = new Orders;

	$order = $modelOrders->getProductsCancelled( $_POST["order_id"] );

	require_once("models/products.php");

	foreach ($order as $product) {
		$modelProducts = new Products;

        $modelProducts->updateStockWhenCancelled($product);
	}

	$order = $modelOrders->deleteOrder( $_POST["order_id"] );


	header("Location: /admin_orders");

?>