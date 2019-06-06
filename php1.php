<?php
	$lol = $_GET['lol'];
	$conn = mysqli_connect('127.0.0.1', 'root', '','misha_ch_15');
	mysqli_query($conn, "DELETE FROM tweet WHERE id='$lol'");
	header('Location: http://mm/PLAGIATTWITTERya/');
?>