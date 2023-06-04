<?php
	require("base.php");

	class Admins extends Base {
		public function login($data){
			$query = $this->db->prepare("
				SELECT admin_id, password
				FROM admins
				WHERE username = ?;
				");

			$query->execute([ $data["username"]] );

			$admin = $query->fetch();

			if(
				!emtpy($admin) && password_verify($data["password"], $admin["password"])
			){
				return $admin;
			}

		return[];
		}
	
?>