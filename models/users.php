<?php
	require_once("base.php");

	class Users extends Base{

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

		public function createUser($data){

		}

	}
?>