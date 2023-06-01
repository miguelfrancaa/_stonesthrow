<?php
	require_once("base.php");

	class Countries extends Base{
		public function getCountries(){
			$query = $this->db->prepare("
			SELECT *
			FROM country
			");

			$query->execute();

			return $query->fetchAll();
		}
	}
?>