<?php 
	$dd = $_POST['lol'];
	$text = $_POST['text'];
	$conn = mysqli_connect('127.0.0.1', 'root', '','misha_ch_15');
	mysqli_query($conn ,"UPDATE tweet SET text='" . $text . "' WHERE id='" . $dd . "'");
	header('Location: http://mm/PLAGIATTWITTERya/');
?>