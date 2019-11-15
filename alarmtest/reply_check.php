<?php
	include("./db_connect.php");
	session_start();
	$id = $_SESSION['userid'];
	$content = $_GET['content'];
	
	$query = "INSERT INTO reply VALUES (null, '".$id."', '".$content."');";
	$result = mysqli_query($con, $query);
	
	// $query = $con->prepare("INSERT INTO reply VALUES (?,?,?)");
	// $null = null;
	// $query->bind_param("sss", $null, $id, $content);
	// $result = $query->execute();

	$basename=basename($_SERVER["PHP_SELF"]);
	$return = str_replace($basename, "alarm.php", $basename);

	if($result)
	{
		
        ?>

        <script>
        	alert('success!');
        	location.replace("<?php echo $return?>");
        </script>

        <?php
	}
	else
	{
		?>
		<script>
			alert('error!');
			location.replace("<?php echo $return?>");
		</script>
		<?php
	}

	mysqli_close($connect);
	// $query = "INSERT INTO reply (reply_number, author_id, content) VALUES (null, '{$id}', '{$content}');";
?>