<?php
	require_once("base.php");

	class Events extends Base{
		public function getEvents(){
			$query = $this->db->prepare("
			SELECT events.local, events.event_date, events.mode, events.link, artists.name, artists.artist_id
			FROM events
	        LEFT JOIN artists USING (artist_id)
			");

			$query->execute();

			return $query->fetchAll( PDO::FETCH_ASSOC);
		}

	public function listEvents(){
		$query = $this->db->prepare("
		SELECT *
		FROM events
		");

		$query->execute([]);

		return $query->fetchAll();
		}

	public function deleteEvent($event_id){
		$query = $this->db->prepare("
			DELETE
			FROM events
			WHERE event_id = ?;
			");

			$query->execute([$event_id]);
	}

	public function eventToEdit($id){
			$query = $this->db->prepare("
				SELECT *
				FROM events
				WHERE event_id = ?
				");

			$query->execute([$id]);

			return $query->fetch();
		}

	public function updateEvent($data){

			$query = $this->db->prepare("
				UPDATE events
				SET local = ?,
					event_date = ?,
					mode = ?,
					link = ?,
					artist_id = ?
				WHERE event_id = ?
				");

			$query->execute([
				$data["event_local"],
				$data["event_date"],
				$data["event_mode"],
				$data["event_link"],
				$data["event_artist"],
				$data["event_id"]
			]);
		}

		public function newEvent($data){
			$query = $this->db->prepare("
				INSERT INTO events (local, event_date, mode, link, artist_id)
				VALUES(?, ?, ?, ?, ?);
				");

			$query->execute([
				$data["event_local"],
				$data["event_date"],
				$data["event_mode"],
				$data["event_link"],
				$data["event_artist"]
			]);
		}
}
?>