<?php
	require_once("base.php");

	class Videos extends Base{
		public function getVideos(){

			$query = $this->db->prepare("
				SELECT name, youtube_link
				FROM videos
				ORDER BY video_id DESC
				");

			$query->execute();

			return $query->fetchAll();
		}
	}
?>