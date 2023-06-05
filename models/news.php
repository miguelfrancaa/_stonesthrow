<?php
	require_once("base.php");

	class News extends Base{

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

		public function getALLNews(){
			$query = $this->db->prepare("
			SELECT new_id, title, content, image, created_at
			FROM news
			ORDER BY created_at ASC
			");

			$query->execute();

			return $query->fetchAll();
		}

		public function getNewsContent($id){
			$query = $this->db->prepare("
			SELECT news.new_id, news.title, news.content, news.content2, news.image, news.created_at, news.video, artists.name
			FROM news
			LEFT JOIN artists USING (artist_id)
			WHERE new_id = ?
			");

			$query->execute([
				$id
			]);

			return $query->fetch();

			}

		public function listNews(){
			$query = $this->db->prepare("
			SELECT *
			FROM news
			");

			$query->execute([]);

			return $query->fetchAll();
		}

		public function deleteNew($new_id){
			$query = $this->db->prepare("
				DELETE
				FROM news
				WHERE new_id = ?;
				");

				$query->execute([$new_id]);
		}

		public function newToEdit($id){
			$query = $this->db->prepare("
				SELECT *
				FROM news
				WHERE new_id = ?
				");

			$query->execute([$id]);

			return $query->fetch();
		}

		public function updateNew($data){

			$query = $this->db->prepare("
				UPDATE news
				SET title = ?,
					content = ?,
					content2 = ?,
					image = ?,
					video = ?,
					imageCarroussel = ?,
					top = ?,
					leftpx = ?,
					artist_id = ?
				WHERE new_id = ?
				");

			$query->execute([
				$data["new_title"],
				$data["new_content"],
				$data["new_content2"],
				$_FILES["new_image"]["name"],
				$data["new_video"],
				$_FILES["new_imageCarroussel"]["name"],
				$data["new_top"],
				$data["new_left"],
				$data["new_artist"],
				$data["new_id"]
			]);
		}

		public function newNew($data){
			$query = $this->db->prepare("
				INSERT INTO news (title, content, content2, image, video, imageCarroussel, top, leftpx, artist_id)
				VALUES(?, ?, ?, ?, ?, ?, NULLIF(?, ''), NULLIF(?, ''), NULLIF(?, ''));
				");

			$query->execute([
				$data["new_title"],
				$data["new_content"],
				$data["new_content2"],
				$_FILES["new_image"]["name"],
				$data["new_video"],
				$_FILES["new_imageCarroussel"]["name"],
				$data["new_top"],
				$data["new_left"],
				$data["new_artist"]
			]);
		}

	};

	
?>