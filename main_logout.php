<style type="text/css">
.logout_form{
	float: left;
	width: 220px;
	height: 77px;
    padding:8px;
    border:1px solid #999;
    background-color: lightgreen;
}
</style>

<form class="logout_form">
	Hello <b><font color="black"><?php echo("{$_SESSION['userid']}")?></font></b><br>
	<?php
		// session_start();
		// include("./database/db_connect.php");
		echo("Score : {$_SESSION['score']}<br>");
	?>
	<a href="./member/member_logout.php">logout</a>
</form>
</html>