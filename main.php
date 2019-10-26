<!DOCTYPE html>
<html>
<head>



</head>
<head>
	<style type="text/css">
	.wrap {
	    position: relative;
	    overflow: hidden;
	    min-width: 1100px;
	    background: #f2f4f7;
	}
	.container {
	    margin: 0 auto;
	    padding: 8px 10px 0;
	    width: 1080px;
	    text-align: left;
	    zoom: 1;
	    background-color: lightblue;
	}
	.column_left {
	    position: relative;
	    float: left;
	    width: 332px;
	}
	.column_right {
	    position: relative;
	    float: right;
	    width: 740px;
	}
	</style>
</head>
<body>
	<?php
		// mainpage header
		include("./include/main_header.php");
		session_start();
	?>
	<div class="wrap">
		<div class="container">
			<div class="column_left">
				<!-- login <-> logout -->
				<?php
					if($_SSESION['userid']===NULL)
					{
						include("./main_login.php");
					}
					else
					{
						include("./main_logout.php");
					}
				?>
				<!-- login <-> logout -->
			</div>
			<div class="column_right">
				<?php include("./main_content.php") ?>
			</div>
		</div>

	</div>
</body>

<?php include("./include/main_footer.php") ?>

</html>

