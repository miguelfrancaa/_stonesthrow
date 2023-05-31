<?php
	require_once("base.php");

	class Users extends Base{

		public function checkUsername(){
			$query = $this->db->prepare("
				SELECT username
				FROM users
				");

			$query->execute();

			return $query->fetchAll();
		}

		public function getUser($username){
			$query = $this->db->prepare("
			SELECT user_id, password
			FROM users
			WHERE username = ?
			");

			$query->execute([
				$username
			]);

			return $query->fetch();
		}

		public function getUserCheckout($user_id){
			$query = $this->db->prepare("
				SELECT email, username, address, city, postal_code, country, name
				FROM users
				WHERE user_id = ?
				");

			$query->execute([
				$user_id
			]);

			return $query->fetch();
		}
	}
?>