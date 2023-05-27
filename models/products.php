<?php
	require_once("base.php");

	class Products extends Base{
		public function getProducts($id){
			$query = $this->db->prepare("
			SELECT products.product_id, products.type, products.item, products.description, products.image, products.price, artists.name, artists.artist_id
			FROM products
			LEFT JOIN artists USING (artist_id)
			WHERE category_id = ?
			");

			$query->execute([
				$id
			]);

			return $query->fetchAll();
		}

		public function getProductDetails($id){
			$query = $this->db->prepare("
			SELECT products.product_id, products.item, products.type, products.description, products.image, products.image2, products.price, products.tracklist, products.stock, artists.name, artists.artist_id
			FROM products
			LEFT JOIN artists USING (artist_id)
			WHERE product_id = ?
			");

			$query->execute([
				$id
			]);

			return $query->fetch();
		}
	};