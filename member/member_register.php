<?php

session_start();

$connect=mysqli_connect("localhost","root","mysql","sf");
$name=$_POST['name'];
$stid=$_POST['stid'];
$id=$_POST['id'];
$pw=$_POST['pw'];
$pwc=$_POST['pwc'];

if($id==NULL || $pw==NULL || $pwc==NULL || $name== NULL || $stid==NULL){
?>
        <script>
                alert('PLEASE FILL OUT ALL OF YOU BLANKS');
                location.replace('./login.html');
        </script>
<?php
    exit(-1);
}
else if($pw!=$pwc){
?>
    <script>
        alert('PASSWORD AND PASSWORD CONFIRM IS DIFFERENT EACH OTHER');
        location.replace('./login.html');
    </script>
<?php
    exit(-1);
}
$check="SELECT * from userinfo WHERE id='$id'";
$result=$connect->query($check);
if($result->num_rows>=1){
?>
        <script>
                alert('THIS ID IS ALREADY ON USE');
                location.replace('./login.html');
        </script>
<?php
    exit(-1);
}
else{
    $signquery="insert into userinfo (id,pw,student_id,student_name,permit) values ('$id','$pw','$stid','$name',0)";
    $signup=$connect->query($signquery);
    if($signup){
?>
        <script>
                alert('REGESTERATION COMPLETE!');
                location.replace('./main.php');
        </script>
<?php
    }
}
?>
