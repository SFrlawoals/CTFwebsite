<!-- delete from alarm_test where sender_id = 'root' and receiver_id = 'admin' and alarm_type = 'HIT' and link='/var/www/html/SFproject/alarmtest/alarm.php' limit 1; -->

<body>
	<?php 
	session_start();
	include("./database/db_connect.php");
	$type = $_GET['alarm_type'];
	$sender_id = $_GET['sender_id'];
	$receiver_id = $_GET['receiver_id'];
	$link = $_GET['link'];
	$delete_query = "DELETE FROM alarm_test WHERE alarm_type = '".$type."' and sender_id = '".$sender_id."' and receiver_id = '".$receiver_id."' and link = '".$link."' limit 1";
	$result = mysqli_query($con, $delete_query);

	if($result)
	{
		?>

		<script>
			location.replace(<?php echo ("'{$link}'");?>)
		</script>
		<?php
	}
	else
	{
		echo("FAIL<br>");
	}
	?>
</body>
</html>