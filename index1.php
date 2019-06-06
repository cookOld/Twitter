<?php 
$dd = $_POST['text'];
$conn = mysqli_connect('127.0.0.1', 'root', '','misha_ch_15');
mysqli_query($conn ,"INSERT INTO tweet (title, text, logo, img) VALUES ('test', '" . $dd . "', 'images/avatar.jpg', '')");
header('Location: http://mm/PLAGIATTWITTERya/')
?>