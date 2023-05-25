<?php
	require_once("base.php");

	class Categories extends Base{

		public function getCategories1(){
			$query = $this->db->prepare("
			SELECT *
			FROM categories
			WHERE parent_id IS NULL
			");

			$query->execute([]);

			return $query->fetchAll();
		}
	}
?>