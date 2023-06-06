<?php
	require_once("base.php");

	class Orders extends base{
		public function insertOrder($user_id){
			$query = $this->db->prepare("
			INSERT INTO orders
			(user_id, status)
			VALUES(?, 'Processing')
		");

		$query->execute([
			$user_id
		]);

		$order_id = $this->db->lastInsertId();

		return $order_id;
		}

		public function createOrderDetail($order_id, $product){
			$query = $this->db->prepare("
			INSERT INTO orderDetails
			(order_id, product_id, priceEach, quantity)
			VALUES(?, ?, ?, ?)
			");
		
		return $query->execute([
			$order_id, $product["product_id"], $product["price"], $product["quantity"]
		]);
		}

		public function listOrders(){
			$query = $this->db->prepare("
			SELECT *
			FROM orders
			");

			$query->execute([]);

			return $query->fetchAll();
		}
	}