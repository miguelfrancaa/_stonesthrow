 <?php
 	require("includes/admin_controller.php");

	require("models/orders.php");

	$model = new Orders();

	$order = $model->getOrder($id);

	$products = $model->getInfoFromOrder($id);

	require("views/admin_orderdetails.php");
?>