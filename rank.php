<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Consolas, monospace;
  font-family: 12px;
}
table {
  width: 100%;
}
th, td {

  padding: 10px;
  border-bottom: 1px solid #dadada;
}
</style>
</head>

<body>
  <table>
    <thead>
      <tr>
      <th width="400px">student_id</th>
      <th>student_name</th>
      <th>score</th>
      </tr>
    </thead>
    <tbody>
    <hr>
    page : 
    <b><a href="<?php echo("./main.php")?>">MAIN PAGE</a></b>
    <hr>
    <?php
    include("./database/db_connect.php");
    $query = "select * from userinfo order by -score";
    
    $result = mysqli_query($con, $query);
    while( $row = mysqli_fetch_array($result)){
      echo ("<tr><td align = 'middle'>" . $row['student_id']."</td><td align = 'middle'>". $row[ 'student_name' ] . "</td><td align = 'middle'>" . $row[ 'score' ] . '</td>');
    }
    ?>
    </tbody>
  </table>
</body>
</html>