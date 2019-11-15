<body>
	<?php
	include("./database/db_connect.php");
	$path = "/var/www/html/SFproject";
	session_start();
	$number = 1;
	$query = "SELECT * FROM alarm_test WHERE receiver_id = '".$_SESSION['userid']."';";
	$result = mysqli_query($con,$query);

	if(isset($result))
	{
		while( $row=mysqli_fetch_array($result) )
		{
			$type = $row['alarm_type'];
			$sender_id = $row['sender_id'];
			$receiver_id = $row['receiver_id'];
			$link = $row['link'];

			echo($number." : ");
			?>
			<?php
			echo($sender_id." ".$type." ".$receiver_id."!!");
			?>
			<a href="./click_alarm.php?alarm_type=<?php echo($type)?>&sender_id=<?php echo($sender_id)?>&receiver_id=<?php echo($receiver_id)?>&link=<?php echo($link)?>">link</a><br>

			<?php
			$number++;
		}
	}
	else
	{
		echo("There are no new alerts<br>");
	}

	mysqli_close($connect);
	?>

</body>