<meta charset="utf-8">
 <?php $connect = mysqli_connect('127.0.0.1', 'root','','misha_ch_15');
  $dd = $_POST['lol'];
  $query = mysqli_query($connect, "SELECT * FROM tweet WHERE id='" . $dd . "'");
  $res =  $query->fetch_assoc();
  $lol = $res['text']
?>
<form action="loh.php" method="POST">
	<input type="text" name="text" value="<?php echo $lol ?>">
	<button name="lol" value="<?php echo $_POST['lol']; ?>" type="submit">Изменить</button>
</form>
