<body>
	<?php
	include("./database/db_connect.php");
	$number = 1;
	$path = "/var/www/html/SFproject";
	// echo $_SERVER['DOCUMENT_ROOT']."<BR>";
	session_start();
	#include("./db_connect.php");

	$query = "SELECT * FROM alarm_test WHERE receiver_id = '{$_SESSION['userid']}';";
	$result = mysqli_query($con,$query);
	if(isset($result))
	{
		while( $row=mysqli_fetch_array($result) )
		{
			$type = $row['alarm_type'];
			if($type == "HIT")
				$scr = "hits";
			$sender_id = $row['sender_id'];
			$receiver_id = $row['receiver_id'];
			$link = $row['link'];

			echo("{$number} : ");
			?>
			<?php
			echo("{$sender_id} {$scr} {$receiver_id}!!");
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