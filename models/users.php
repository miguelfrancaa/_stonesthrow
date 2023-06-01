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
				SELECT users.email, users.username, users.address, users.city, users.postal_code, users.code, users.name, country.countryname
				FROM users
				INNER JOIN country USING (code)
				WHERE user_id = ?
				");

			$query->execute([
				$user_id
			]);

			return $query->fetch();
		}

		public function createUser($data) {
			$query = $this->db->prepare("
				INSERT INTO users
				(name, username, email, password, address, city, code, postal_code, birth)
				VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)
				");

			$query->execute([
				$data["name"],
				$data["username"],
				$data["email"],
				password_hash($data["password"], PASSWORD_DEFAULT),
				$data["address"],
				$data["city"],
				$data["country"],
				$data["postalcode"],
				$data["birthdate"]
			]);

			return $this->db->lastInsertId();
		}
	}
?>