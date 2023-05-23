<?php

	require("models/artists.php");

	$model = new Artists();

	$artists = $model->getArtists();

	require("views/artists.php");