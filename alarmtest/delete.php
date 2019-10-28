<?php
$connect = mysqli_connect("localhost","root","mysql","sf" ) or die("connect fail");
$number = $_GET[number];
session_start();
$query = "select reply_number, author_id, content from reply where reply_number=$number";
$result = $connect->query($query);
$rows = mysqli_fetch_assoc($result);
$usrid = $rows['author_id'];


if(!isset($_SESSION['userid']))
{
    ?>
    <script>
        alert("권한이 없습니다.");
        location.replace("./view.php?number=<?=$number?>");
    </script>
    <?php
}
else if ($_SESSION['userid']==$usrid)
{
    $sql = "delete from reply where reply_number=$number";
    $ret=mysqli_query($connect,$sql);

    if($ret)
    {
    ?>
        <script>
            alert("delete success!!");
            location.replace("./alarm.php");
        </script>
    <?php   
    }
    else {
        echo "delete fail";
    }
}
else
{
    ?>
    <script>
            alert("권한이 없습니다.");
            location.replace("./alarm.php");
    </script>
    <?php
}
?>