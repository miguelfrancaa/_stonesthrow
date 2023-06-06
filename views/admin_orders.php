 <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>StonesThrow BACKEND</title>
		<meta name="description" content="BACKEND - SITE">
		<meta name="keywords" content="BACKEND - SITE">
		<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/styleadmin.css">
	</head>
	<body class="admin-crm inicio-page">
		<?php require("includes/menuback.php"); ?>
		<main class="pagina-geral"> 
			<h1>Gestao de Encomendas</h1>
			<table>
				<tr class="head-line">
					<th>ID</th>
					<th>USER</th>
					<th>ORDER DATE</th>
					<th>PAYMENT DATE</th>
					<th>SHIPMENT DATE</th>
					<th>STATUS</th>
					<th>ACTIONS</th>
				</tr>
<?php
				foreach($orders as $order){
					echo "
						<form method='post' action='/cancel_order'>
						<input type='hidden' name='order_id' value='". $order["order_id"] ."'>
						<tr>
							<th>". $order["order_id"] ."</th>
							<th>". $order["user_id"] ."</th>
							<th>". $order["order_date"] ."</th>
							<th>". $order["payment_date"] ."</th>
							<th>". $order["shipment_date"] ."</th>
							<th>". $order["status"] ."</th>

							<th>
							<a href='/admin_orderdetails/". $order["order_id"] ."' class='editar'>DETAILS</a>
							<button type='submit' name='send' class='apagar'>CANCEL ORDER</button>
							</th>
						</tr>
						</form>
					";
				}
?>
					</tr>
			</table>

		</main>
	</body>
</html>