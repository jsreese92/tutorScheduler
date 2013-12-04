<?php
require_once('orm/Event.php');

session_start();
if (!isset($_COOKIE['426CalendarApp']) || ($_COOKIE['426CalendarApp'] != md5($_SESSION['username'] . $_SERVER['REMOTE_ADDR'] . $_SESSION['salt']))) {
	//No cookie. Don't send em any goodies!
	header("HTTP/1.1 401 Unauthorized");
	print("Not authorized. Please refresh the page, or log in again.");
	exit();
}
$con = mysqli_connect('localhost', 'jonesep', '', 'calendar');

$result = mysqli_query($con, "SELECT * FROM `users` WHERE `username` = '".$_SESSION['username']."'");
if($result && !mysqli_error($con)) {
	$user = mysqli_fetch_array($result);
}else {
	header("HTTP/1.1 400 User not found");
	print("User not found.");
	exit();
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	//they're either creating a new event or updating an existing one
	$path_components = explode('/', $_SERVER['PATH_INFO']);
	if(count($path_components) == 2) {
		//they sent an id, so they want us to update an event
		
		//get the event in question
		$id = $_POST['id'];
		$event = Event::findByID($id, $user['id']);
		
		if($event == null) {
			//event not found
			header("HTTP/1.0 404 Not Found");
			print("Event id: " . $requested_id . " not found.");
			exit();
		}
		
		//validate the values
		if(!isset($_POST['title'])) {
			header("HTTP/1.1 400 Bad Request");
			print(json_encode('Missing Title'));
			exit();
		}else $title = trim($_POST['title']);
		
		$datetimeStart = $_POST['datetimeStart'];
		if($datetimeStart != date("Y-m-d H:i:s", strtotime($datetimeStart))) {
			//invalid date
			header("HTTP/1.1 400 Bad Request");
			print(json_encode('Bad Start Time'));
			exit();
		}
		$datetimeEnd = $_POST['datetimeEnd'];
		if($datetimeEnd != date("Y-m-d H:i:s", strtotime($datetimeEnd))) {
			//invalid date
			header("HTTP/1.1 400 Bad Request");
			print(json_encode('Bad End Time'));
			exit();
		}
		//check that end isn't before start
		if($datetimeStart >= $datetimeEnd) {
			header("HTTP/1.1 400 Bad Request");
			print(json_encode('Time mismatch'));
			exit();
		}
		//check that both occur on the same day
		if(substr($datetimeStart,0,10) != substr($datetimeEnd,0,10)) {
			header("HTTP/1.1 400 Bad Request");
			print(json_encode('Date mismatch'));
			exit();
		}
		//check that it doesn't occur during any existing event other than the one we're editing
		//select events where the start time is between my start and end times (ie, this overlaps the beginning)
		if($result = mysqli_query($con, "SELECT `id` FROM `events` WHERE `user` = '".$user['id']."' AND `datetimeStart` >= '".$datetimeStart."' AND `datetimeStart` <= '".$datetimeEnd."' AND `id` != '".$id."'")) {
			if(mysqli_num_rows($result) > 0) {
				header("HTTP/1.1 400 Bad Request");
				print(json_encode('Time overlap'));
				exit();
			}
		}
		//select events where the end time is between my start and end times (ie, this overlaps the end)
		if($result = mysqli_query($con, "SELECT `id` FROM `events` WHERE `user` = '".$user['id']."' AND `datetimeEnd` >= '".$datetimeStart."' AND `datetimeEnd` <= '".$datetimeEnd."' AND `id` != '".$id."'")) {
			if(mysqli_num_rows($result) > 0) {
				header("HTTP/1.1 400 Bad Request");
				print(json_encode('Time overlaps'));
				exit();
			}
		}
		
		if(isset($_POST['location'])) {
			$location = trim($_POST['location']);
		}else $location = '';
		
		if(isset($_POST['description'])) {
			$description = trim($_POST['description']);
		}else $description = '';
		
		
		
		//update the event
		$event->setTitle($title);
		$event->setStart($datetimeStart);
		$event->setEnd($datetimeEnd);
		$event->setDescription($description);
		$event->setLocation($location);
		
		// Return JSON encoding of updated Event
		header("Content-type: application/json");
		print($event->getJSON());
		exit();
		
		
	}else if(count($path_components) == 1) {
		//they didn't send any path info, so they're creating an event
		//validate the values
		if(!isset($_POST['title'])) {
			header("HTTP/1.1 400 Bad Request");
			print(json_encode('Missing Title'));
			exit();
		}else $title = trim($_POST['title']);
		
		$datetimeStart = $_POST['datetimeStart'];
		if($datetimeStart != date("Y-m-d H:i:s", strtotime($datetimeStart))) {
			//invalid date
			header("HTTP/1.1 400 Bad Request");
			print(json_encode('Bad Start Time'));
			exit();
		}
		$datetimeEnd = $_POST['datetimeEnd'];
		if($datetimeEnd != date("Y-m-d H:i:s", strtotime($datetimeEnd))) {
			//invalid date
			header("HTTP/1.1 400 Bad Request");
			print(json_encode('Bad End Time'));
			exit();
		}
		//check that end isn't before start
		if($datetimeStart >= $datetimeEnd) {
			header("HTTP/1.1 400 Bad Request");
			print(json_encode('Time mismatch'));
			exit();
		}
		//check that both occur on the same day
		if(substr($datetimeStart,0,10) != substr($datetimeEnd,0,10)) {
			header("HTTP/1.1 400 Bad Request");
			print(json_encode('Date mismatch'));
			exit();
		}
		//check that it doesn't occur during any existing event
		//select events where the start time is between my start and end times (ie, this overlaps the beginning)
		if($result = mysqli_query($con, "SELECT `id` FROM `events` WHERE `user` = '".$user['id']."' AND `datetimeStart` >= '".$datetimeStart."' AND `datetimeStart` <= '".$datetimeEnd."'")) {
			if(mysqli_num_rows($result) > 0) {
				header("HTTP/1.1 400 Bad Request");
				print(json_encode('Time overlap'));
				exit();
			}
		}
		//select events where the end time is between my start and end times (ie, this overlaps the end)
		if($result = mysqli_query($con, "SELECT `id` FROM `events` WHERE `user` = '".$user['id']."' AND `datetimeEnd` >= '".$datetimeStart."' AND `datetimeEnd` <= '".$datetimeEnd."'")) {
			if(mysqli_num_rows($result) > 0) {
				header("HTTP/1.1 400 Bad Request");
				print(json_encode('Time overlap'));
				exit();
			}
		}
		
		if(isset($_POST['location'])) {
			$location = trim($_POST['location']);
		}else $location = '';
		
		if(isset($_POST['description'])) {
			$description = trim($_POST['description']);
		}else $description = '';
		
		
		
		//create the event
		$new_event = Event::create($title, $description, $location, $datetimeStart, $datetimeEnd, $user['id']);
		
		//report if failed
		if($new_event == null) {
			header("HTTP/1.1 500 Server Error");
			print("Server could not create new event");
			exit();
		}
		
		//generate the JSON and send it on back
		header("Content-type: application/json");
		print($new_event->getJSON());
		exit();
		
	}else {
		//they sent too many things in path info, and I don't understand
		header("HTTP/1.1 400 Extraneous Path Information");
		print("Extraneous Path Information");
		exit();
	}
	
}else if($_SERVER['REQUEST_METHOD'] == 'GET') {
	$path_components = explode('/', $_SERVER['PATH_INFO']);
	//they want to retrieve one or more events
	
	//if they sent all, they want every event associated with this user
	if(count($path_components) == 2) {
		if($path_components[1] == 'all') {
			//they want all. fetch em via the orm
			$events_array = Event::getAllIDs($user['id']);
			header("Content-type: application/json");
			print(json_encode($events_array));
			exit();
		}else {
			//else they're requesting a specific event, or deleting one
			$requested_id = intval($path_components[1]);
			
			//fetch by id via the orm
			$event = Event::findByID($requested_id, $user['id']);
			
			if($event == null) {
				//event not found
				header("HTTP/1.0 404 Not Found");
				print("Event id: " . $requested_id . " not found.");
				exit();
			}
			
			//check to see if deleting
			if(isset($_GET['delete'])) {
				$event->delete();
				header("Content-type: application/json");
				print(json_encode(true));
				exit();
			}
			
			//just look it up and return the json
			header("Content-type: application/json");
			print($event->getJSON());
			exit();
		}
	}else if(count($path_components) == 1){
		//else we used GET with no path info, ie we want a filtered range
		if(!isset($_GET['year']) || !isset($_GET['month']) || $_GET['year'] < 1000 || $_GET['year'] > 9999 || $_GET['month'] < 1 || $_GET['month'] > 12) {
			header("HTTP/1.1 400 Bad Request");
			print('Arguments not valid.');
			exit();
		}
		if(!isset($_GET['date'])) {
			//date isn't set, so they just want the month's events
			$events_array = Event::getEventsByMonth($user['id'], $_GET['year'], $_GET['month']);
			header("Content-type: application/json");
			print(json_encode($events_array));
			exit();
		}else {
			//fetch events for this specific date
			$events_array = Event::getEventsByDate($user['id'], $_GET['year'], $_GET['month'], $_GET['date']);
			header("Content-type: application/json");
			print(json_encode($events_array));
			exit();			
		}
		print(json_encode('hiya'));
		exit();
	}else {
		//else they used too many path arguments
		header("HTTP/1.1 400 Extraneous Path Information");
		print("Extraneous Path Information");
		exit();
	}
}else {
	//else they didn't use GET or POST and I don't understand
	header("HTTP/1.1 400 Only accept GET and POST");
	print("Server only accepts GET and POST");
	exit();
}

exit();
?>