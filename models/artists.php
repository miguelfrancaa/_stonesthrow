<?php
	require_once("base.php");

	class Artists extends Base{

		public function errorPhoto() {
			$query = $this->db->prepare("
			SELECT photo
			FROM artists
			ORDER BY name
			");

		$query->execute();

		return $query->fetchAll();

	}

	public function getArtists() {
		$query = $this->db->prepare("
		SELECT name, photo, artist_id
		FROM artists
		ORDER BY name
		");

		$query->execute();

		return $query->fetchAll();
		}
}
?>
