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
				!empty($admin) && ($data["password"] == $admin["password"])
			){
				return $admin;
			}

		return[];
		}
	}
?>