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

		public function getCategoryId(){
			$query = $this->db->prepare("
			SELECT *
			FROM categories
			");

			$query->execute([]);

			return $query->fetchAll();
			}


		public function getSubcategories($id){
			$query = $this->db->prepare("
			SELECT *
			FROM categories
			WHERE parent_id = ?
			");

			$query->execute([$id]);

			return $query->fetchAll();
		}

		public function getCategoriesIds(){
			$query = $this->db->prepare("
			SELECT category_id
			FROM categories
			");

			$query->execute();

			return $query->fetchAll();
		}
	}
?>