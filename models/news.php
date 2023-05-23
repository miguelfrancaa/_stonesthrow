<?php
	class News{
		public $db;

		public function __construct() {
			$this->db = new PDO("mysql:host=".ENV["DB_HOST"].";dbname=".ENV["DB_NAME"].";charset=utf8mb4", ENV["DB_USER"], ENV["DB_PASSWORD"]);
		}

		public function getNewsHome() {
			$query = $this->db->prepare("
			SELECT new_id, title, content, imageCarroussel, top, leftpx
			FROM news
			WHERE top IS NOT NULL AND leftpx IS NOT NULL
			ORDER BY created_at DESC LIMIT 4
			");

			$query->execute();

			return $query->fetchAll();
		}
	}
?>