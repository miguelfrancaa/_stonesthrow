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
			SELECT products.product_id, products.category_id, products.item, products.type, products.description, products.image, products.image2, products.price, products.tracklist, products.stock, artists.name, artists.artist_id, categories.parent_id
			FROM products
			LEFT JOIN artists USING (artist_id)
			INNER JOIN categories USING (category_id)
			WHERE product_id = ?
			");

			$query->execute([
				$id
			]);

			return $query->fetch();
		}

		public function getProductsCart($data){
			$query = $this->db->prepare("
			SELECT products.product_id, products.stock, products.item, products.price, products.type, products.image, artists.name
			FROM products
			LEFT JOIN artists USING (artist_id)
			WHERE product_id = ?
				AND stock >= ?

			");

		$query->execute([
			$data["product_id"],
			$data["quantity"]
		]);

		return $query->fetch();
		}

		public function updateStock($product){
			$query = $this->db->prepare("
			UPDATE products
			SET stock = stock - ?
			WHERE product_id = ?
			");

			return $query->execute([
				$product["quantity"],
				$product["product_id"]
		]);
		}

		public function listProducts(){
			$query = $this->db->prepare("
			SELECT *
			FROM products
			");

			$query->execute([]);

			return $query->fetchAll();
		}
	};