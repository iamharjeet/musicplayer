// Created by Harjeet 2018

<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Asia/Kolkata");

	$con = mysqli_connect("localhost", "harj", "Harry@007", "i5927789_wp1");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>