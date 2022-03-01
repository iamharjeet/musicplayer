// Created by Harjeet 2018

<?php
include("../../config.php");

if(isset($_POST['name']) && isset($_POST['username'])) {

	$name = $_POST['name'];
	$username = $_POST['username'];
	$date = date("Y-m-d");

	if($name=='') {
		echo "Can't create playlist with no name";
		exit();
	}
	$playlistsCheck = mysqli_query($con, "SELECT name FROM playlists WHERE name='$name' AND owner = '$username'");
	if(mysqli_num_rows($playlistsCheck) >0) {
		echo "Playlists is already created";
		exit();
	}

	$query = mysqli_query($con, "INSERT INTO playlists VALUES('', '$name', '$username', '$date')");

}
else {
	echo "Name or username parameters not passed into file";
}

?>