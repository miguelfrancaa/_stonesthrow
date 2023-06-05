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

		public function listVideos(){
			$query = $this->db->prepare("
			SELECT *
			FROM videos
			");

			$query->execute([]);

			return $query->fetchAll();
			}

		public function newVideo($data){
			$query = $this->db->prepare("
				INSERT INTO videos (youtube_link, name, artist_id)
				VALUES(?, ?, ?);
				");

			$query->execute([
				$data["video_link"],
				$data["video_name"],
				$data["video_artist"]
			]);
		}

		public function deleteVideo($video_id){
		$query = $this->db->prepare("
			DELETE
			FROM videos
			WHERE video_id = ?;
			");

			$query->execute([$video_id]);
	}
		public function videoToEdit($id){
			$query = $this->db->prepare("
				SELECT *
				FROM videos
				WHERE video_id = ?
				");

			$query->execute([$id]);

			return $query->fetch();
		}

	public function updateVideo($data){

			$query = $this->db->prepare("
				UPDATE videos
				SET youtube_link = ?,
					name = ?,
					artist_id = ?
				WHERE video_id = ?
				");

			$query->execute([
				$data["video_link"],
				$data["video_name"],
				$data["video_artist"],
				$data["video_id"]
			]);
		}
	}
?>