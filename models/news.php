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

	}
?>