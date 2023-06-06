<?php
	require("base.php");

	class Admins extends Base {
		public function login($data){
			$query = $this->db->prepare("
				SELECT admin_id, password
				FROM admins
				WHERE email = ?;
				");

			$query->execute([ $data["email"]] );

			$admin = $query->fetch();

			if(
				!empty($admin) && (password_verify($_POST["password"], $admin["password"]))
			){
				return $admin;
			}

		return[];
		}

		public function listAdmins(){
			$query = $this->db->prepare("
			SELECT *
			FROM admins
			");

			$query->execute([]);

			return $query->fetchAll();
	}
		
		public function createAdmin($data){
			$query = $this->db->prepare("
				INSERT INTO admins
				(name, email, password, phone)
				VALUES(?, ?, ?, ?)
				");

			$query->execute([
				$data["name"],
				$data["email"],
				password_hash($data["password"], PASSWORD_DEFAULT),
				$data["phone"],
			]);
		}
	}
?>