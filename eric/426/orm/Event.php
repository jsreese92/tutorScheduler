<?php
$con = mysqli_connect('localhost', 'jonesep', '', 'calendar');


date_default_timezone_set('America/New_York');

class Event
{
	private $id;
	private $datetimeStart;
	private $datetimeEnd;
	private $description;
	private $location;
	private $title;
	private $user;
	
	public static function create($title, $description, $location, $datetimeStart, $datetimeEnd, $user) {
		global $con;
	/*	
		$title = mysqli_real_escape_string($con, $title);
		$description = mysqli_real_escape_string($con, $description);
		$location = mysqli_real_escape_string($con, $location);
		$datetimeStart = mysqli_real_escape_string($con, $datetimeStart);
		$datetimeEnd = mysqli_real_escape_string($con, $datetimeEnd);
		$user = mysqli_real_escape_string($con, $user);
	*/	
		$result = mysqli_query($con, "INSERT INTO `events` VALUES (0, '".mysqli_real_escape_string($con, $datetimeStart)."', '".mysqli_real_escape_string($con, $datetimeEnd).
					"', '".mysqli_real_escape_string($con, $title)."', '".mysqli_real_escape_string($con, $location)."', '".mysqli_real_escape_string($con, $description).
					"', ".mysqli_real_escape_string($con, $user).")");
		if($result) {
			$id = mysqli_insert_id($con);
			return new Event($id, $title, $datetimeStart, $datetimeEnd, $description, $location, $user);
		}
		return null;
	}
	
	public static function findByID($id, $user) {
		global $con;
		
		$id = mysqli_real_escape_string($con, $id);
		$user = mysqli_real_escape_string($con, $user);
		
		$result = mysqli_query($con, "SELECT * FROM `events` WHERE `id` = '".$id."' AND `user` = '".$user."'");
		if($result && mysqli_num_rows($result) == 1) {
			$event = mysqli_fetch_array($result);
			return new Event(intval($event['id']), $event['title'], $event['datetimeStart'], $event['datetimeEnd'], $event['description'], $event['location'], intval($event['user']));
		}else return null;
	}
	
	public static function getAllIDs($user) {
		global $con;
		
		$user = mysqli_real_escape_string($con, $user);
		
		$result = mysqli_query($con, "SELECT `id` FROM `events` WHERE `user` = '".$user."'");
		$id_array = array();
		
		if($result) {
			while($next = mysqli_fetch_array($result)) {
				$id_array[] = $next['id'];
			}
		}
		
		return $id_array;
	}
	
	public static function getEventsByMonth($user, $year, $month) {
		global $con;
		
		$year = mysqli_real_escape_string($con, $year);
		$user = mysqli_real_escape_string($con, $user);
		
		if($month < 10) {
			$month = '0'.mysqli_real_escape_string($con, $month);
			$month_end = $month + 1;
			$year_end = $year;
		}else {
			if($month == 12) {
				$month = mysqli_real_escape_string($con, $month);
				$month_end = '01';
				$year_end = $year + 1;
			}else {
				$month = mysqli_real_escape_string($con, $month);
				$month_end = $month + 1;
				$year_end = $year;
			}
		}
		
		$range_start = $year . "/" . $month . "/01" . " " . "00:00:00";
		$range_end = $year_end . "/" . $month_end . "/01" . " " . "00:00:00";
		
		$result = mysqli_query($con, "SELECT `id` FROM `events` WHERE `datetimeStart` >= '".$range_start."' AND `datetimeStart` < '".$range_end."' AND `user` = '".$user."'");
		$id_array = array();
		
		if($result) {
			while($next = mysqli_fetch_array($result)) {
				$id_array[] = $next['id'];
			}
		}
		
		return $id_array;
	}
	
	public static function getEventsByDate($user, $year, $month, $date) {
		global $con;
		
		$year = mysqli_real_escape_string($con, $year);
		$user = mysqli_real_escape_string($con, $user);
		$month = mysqli_real_escape_string($con, $month);
		
		$range_start = $year . "/" . $month . "/" . $date . " " . "00:00:00";
		$range_end = $year . "/" . $month . "/" . $date . " " . "23:59:59";
		
		$result = mysqli_query($con, "SELECT `id` FROM `events` WHERE `datetimeStart` >= '".$range_start."' AND `datetimeStart` <= '".$range_end."' AND `user` = '".$user."'");
		$id_array = array();
		
		if($result) {
			while($next = mysqli_fetch_array($result)) {
				$id_array[] = $next['id'];
			}
		}
		
		return $id_array;
	}
	
	private function __construct($id, $title, $datetimeStart, $datetimeEnd, $description, $location, $user) {
		global $con;
		
		$this->id = $id;
		$this->datetimeStart = $datetimeStart;
		$this->datetimeEnd = $datetimeEnd;
		$this->title = $title;
		$this->description = $description;
		$this->location = $location;
		$this->user = $user;
	}
	
	public function getID() {
		return $this->id;
	}
	public function getTitle() {
		return $this->title;
	}
	public function getStart() {
		return $this->datetimeStart;
	}
	public function getEnd() {
		return $this->datetimeEnd;
	}
	public function getDescription() {
		return $this->description;
	}
	public function getLocation() {
		return $this->location;
	}
	public function getUser() {
		return $this->user;
	}
	
	public function setTitle($title) {
		$this->title = $title;
		return $this->update();
	}
	public function setStart($start) {
		$this->datetimeStart = $start;
		return $this->update();
	}
	public function setEnd($end) {
		$this->datetimeEnd = $end;
		return $this->update();
	}
	public function setDescription($description) {
		$this->description = $description;
		return $this->update();
	}
	public function setLocation($location) {
		$this->location = $location;
		return $this->update();
	}
	
	private function update() {
		global $con;
		
		$result = mysqli_query($con, "UPDATE `events` SET `datetimeStart`='".mysqli_real_escape_string($con, $this->datetimeStart)."', `datetimeEnd`='".
			mysqli_real_escape_string($con, $this->datetimeEnd)."', `title`='".mysqli_real_escape_string($con, $this->title)."', `location`='".
			mysqli_real_escape_string($con, $this->location)."', `description`='".mysqli_real_escape_string($con, $this->description).
			"' WHERE `user`='".mysqli_real_escape_string($con, $this->user)."' AND `id`='".mysqli_real_escape_string($con, $this->id)."'");
		return $result;
	}
	
	public function delete() {
		global $con;
		
		mysqli_query($con, "DELETE FROM `events` WHERE `id` = '".$this->id."'");
	}
	
	public function getJSON() {
		$event_obj = array('id' => $this->id,
						   'title' => $this->title,
						   'datetimeStart' => $this->datetimeStart,
						   'datetimeEnd' => $this->datetimeEnd,
						   'description' => $this->description,
						   'location' => $this->location,
						   'user' => $this->user);
		
		return json_encode($event_obj);
	}
}
?>
