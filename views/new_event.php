<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>StonesThrow</title>
		<meta name="description" content="BACKEND - SITE">
		<meta name="keywords" content="BACKEND - SITE">
		<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/styleadmin.css">
	</head>
	<body class="admin-crm inicio-page">
		<?php require('includes/menuback.php'); ?>
		<main class="pagina-geral"> 
			<h1>Novo Evento</h1>
			<form action="/new_event" method="post">
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<div class="campos">
							<div class="form-controls">
								<label>
									LOCAL:<br>
									<input type="text" name="event_local">
								</label>
							</div>
							<div class="form-controls">
								<label>
									EVENT DATE:<br>
									<input type="date" name="event_date">
								</label>
							</div>
							<div class="form-controls">
								<label>
									MODE:<br>
									<input type="text" name="event_mode">
								</label>
							</div>
							<div class="form-controls">
								<label>
									LINK:<br>
									<input type="text" name="event_link">
								</label>
							</div>
							<div class="form-controls">
								<label>ARTIST:</label>
								<select name="event_artist">
									<option selected></option>
<?php
									foreach ($artists as $artist) {
										echo "
											<option value='".$artist["artist_id"]."'>". $artist["name"] ."</option>
										";
									}
?>	
								</select>
							</div>
						</div>
					</div>

					<div class="col-md-12 col-xs-12">
						<div class="campos campos2">
							<button class="accao" type="submit" name="send">INSERT</button>
						</div>
					</div>

				</div>
			</form>

		</main>
	</body>
</html>