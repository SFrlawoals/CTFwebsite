<?php
	include("./db_connect.php");
	session_start();
	echo("hi <h1>{$_SESSION['userid']}</h1><br>");
	$id = $_SESSION['userid'];
	echo("{$id}<br>");
	$content = $_GET['content'];

	echo("your content is <br><br>");
	?>

<div style="border: 1px solid #cccccc; width: 25%">
	<div style="margin: 4% 4%;">
		<?php
			echo "<b>".$content."</b><br>";
		?>	
	</div>
</div>

<?php
	echo "one<br>";
	
	if(isset($con))
		echo("connect<br>");
	$query = "INSERT INTO reply (reply_number, author_id, content) VALUES (null, '{$id}', '{$content}');";
	echo $query."<br>";
	$result = mysqli_query($con, $query);
	echo "two<br>";

	if($result)
	{
		echo("success<br>");
		$hostname=$_SERVER["HTTP_HOST"];
		$uri= $_SERVER['REQUEST_URI'];
		$phpself=$_SERVER["PHP_SELF"];
		$basename=basename($_SERVER["PHP_SELF"]);

		$return = str_replace($basename, "alarm.php", $basename);
        ?>

        <script>
        	alert('success!');
        	location.replace("<?php echo $return?>");
        </script>

        <?php
	}
	else
	{
		echo("error<br>");
	}

	mysqli_close($connect);
?>