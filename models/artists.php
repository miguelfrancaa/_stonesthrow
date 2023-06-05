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

	public function getArtistsDetails($id) {
		$query = $this->db->prepare("
		SELECT name, description, description_photo
		FROM artists
		WHERE artist_id = ?
		");

		$query->execute([
			$id
		]);

		return $query->fetch();
		}

	public function listArtists(){
		$query = $this->db->prepare("
		SELECT *
		FROM artists
		");

		$query->execute([]);

		return $query->fetchAll();
	}

	public function deleteArtist($artist_id){
			$query = $this->db->prepare("
				DELETE
				FROM artists
				WHERE artist_id = ?;
				");

				$query->execute([$artist_id]);
		}
}
?>
