<?php
	require("base.php");

	class Countires extends Base{
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