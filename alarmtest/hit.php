<?php
$connect = mysqli_connect("localhost","root","mysql","sf" ) or die("connect fail");
$number = $_GET[number];
session_start();
$query = "select reply_number, author_id, content from reply where reply_number=$number";
$result = $connect->query($query);
$rows = mysqli_fetch_assoc($result);

$author_id = $rows['author_id'];

if($_SESSION['userid'] === $author_id)
{
	?>
	<script>
		alert("Can't hit myself!!");
		location.replace("./alarm.php");
	</script>
	<?php
}
else
{
	$alarm_type = "HIT";
	$sender_id = $_SESSION['userid'];
	$receive_id = $author_id;
	$link = "/SFproject/alarmtest/alarm.php";
	$hit_query = "INSERT INTO alarm_test VALUES ('".$alarm_type."', '".$sender_id."', '".$receive_id."', '".$link."');";

	$result = $connect->query($hit_query);
	if(isset($result))
	{
		?>
		<script>
			alert("HIT <?php echo($author_id)?>!!");
			location.replace("./alarm.php");
		</script>
		<?php
	}
}

?>

