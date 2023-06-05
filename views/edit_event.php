<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BACKEND - SITE</title>
		<meta name="description" content="BACKEND - SITE">
		<meta name="keywords" content="BACKEND - SITE">
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/styleadmin.css">
	</head>
	<body class="admin-crm inicio-page">
		<?php 
		require('includes/menuback.php'); 
		?>
		<main class="pagina-geral"> 
			<h1>EDITAR Evento</h1>
			<form action="/edit_event/" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<div class="campos">
							<div class="form-controls">
								<label>
									Local:<br>
									<input type="text" name="event_local" value="<?= $event["local"] ?>">
								</label>
							</div>
							<div class="form-controls">
								<label>
									DATE:<br>
									<input type="text" name="event_date" value="<?= $event["event_date"] ?>">
								</label>
							</div>
							<div class="form-controls">
								<label>
									MODE:<br>
								<input type="text" name="event_mode" value="<?= $event["mode"] ?>">
								</label>
							</div>
							<div class="form-controls">
								<label>
									LINK<br>
									<input type="text" name="event_link" value="<?= $event["link"] ?>">
								</label>
							</div>
							<div class="form-controls">
								<label>
									ARTIST:<br>
									<input type="number" name="event_artist" value="<?= $event["artist_id"] ?>">
								</label>
							</div>
									<input type="hidden" name="event_id" value="<?= $event["event_id"] ?>">
							</div>
							
						</div>
					</div>

					

					<div class="col-md-12 col-xs-12">
						<div class="campos campos2">
							<button class="accao" type="submit" name="send">Save Product</button>
						</div>
					</div>

				</div>
			</form>

		</main>
	</body>
</html>