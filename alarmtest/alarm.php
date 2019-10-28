<!DOCTYPE html>
<html>
<head>
	<title> alarm! </title>
</head>

<style type="text/css">
	.wrap_reply{
		width: 200px;
		float: left;
		padding: 3px;
	}
	.in_wrap_reply{
		
		border: 1px solid #999;
	}
	.reply_div{
		word-break: break-word;
		padding: 30px;
		width: 100px;
		height: 100px;

	}
	.input_content{
		margin-top: 5%;
		margin-left: 5%;
		font-size: 30px;
		height: 200px;
		width: 80%;
		border: 1px solid #999;
	}
</style>

<body>
	<?php
		$path = "/var/www/html/SFproject";
		// echo $_SERVER['DOCUMENT_ROOT']."<BR>";
		session_start();
		?>
		<hr>
		page : 
		<b><a href="<?php echo("../main.php")?>">MAIN PAGE</a></b>
		<hr>
		<?php
		#include("./db_connect.php");
		include($path."/database/db_connect.php");
		if($_SESSION['userid'] !== NULL)
		{
			?>

			<hr>
			<h1 align="center">PUT YOUR REPLY!!</h1>
			<hr>
			<?php
		}
		else
		{
			?>
				<script>
					alert('You need login!');
					history.back();
				</script>
			<?php
		}
	?>

	<div>
		<form action="./reply_check.php" id="inform" method="GET"> 
			<div>
				<textarea name="content" form="inform" class="input_content"></textarea>
				<input type="submit" style="margin: 5% 5%;">
			</div>
		</form>
	</div>

	<?php 
		$query = "SELECT * FROM reply;";
		$result = mysqli_query($con,$query );

		while( $row=mysqli_fetch_array($result) )
		{
			?>

			<div class="wrap_reply">
				<div class="in_wrap_reply">
					<div class="reply_div">
						<?php
							echo("<strong>{$row['author_id']}</strong><br>");
							echo("{$row['content']}<br>");
						?>
					</div>

					<div >
						<button style="float: left;" onclick="location.href='./delete.php?number=<?=$row['reply_number']?>&id=<?=$_SESSION['userid']?>'">delete</button>
						<button style="float: right;" onclick="location.href='./hit.php?number=<?=$row['reply_number']?>'">hit</button>
					</div>
				</div>
			</div>
			<?php
		}

		mysqli_close($connect);
		?>

</body>
</html>