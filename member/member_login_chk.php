<?php
	session_start();
	$connect=mysqli_connect("localhost","root","mysql","sf");
	$id=$_POST['id'];
	$pw=$_POST['pw'];
	$query="select * from userinfo where id='".$id."'";
	$result=$connect->query($query);
	if(mysqli_num_rows($result)==1){
		$row=mysqli_fetch_assoc($result);
		if($row['pw']==$pw){
			$_SESSION['userid']=$id;
			$_SESSION['username'] = $row['student_name'];
			$_SESSION['score'] = $row['score'];
			if(isset($_SESSION['userid'])){
			?>	<script>
					alert('Login success');
					location.replace("../main.php");
				</script>
<?php			
			}
			else{
				echo "Login failed";
			}
		}
		else{
	?>
			<script>
				alert('Incorrect ID or PASSWORD');
				history.back();
			</script>
<?php
		}
	}
	else{
?>
		<script>
			alert('Incorrect ID or PASSWORD');
			history.back();
		</script>
<?php
	}
?>			
