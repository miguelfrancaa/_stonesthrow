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
	}
?>