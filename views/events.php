<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>STONES THROW</title>
		<meta name="keywords" content="STONES THROW">
		<link rel="icon" href="img/logost.ico">
		<meta name="description" content="stones throw, records, hiphop, music, alternative, quasimoto, mfdoom, underground, label">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
<?php
	require("includes/header.php");
?>
	<main>
		<div class="container noAbsolute2">
			<?php
				foreach($events as $event){
					echo "<div class='row evento space'>
						<span class='events'><a href='artist/".$event["artist_id"]."'><span class='artista'>".$event["name"]."</span></a><br> 
						
						".date("d F Y",strtotime($event["event_date"]))."<br>
						".$event["mode"]."<br>
						".$event["local"]."<br></span>
						<a target=_blank href=".$event["link"]."><button class='evento eventDetails'>DETAILS</button></a>
						</div>";
				}
			?>
		</div>
	</main>

	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	</body>
</html>