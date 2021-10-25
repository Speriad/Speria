<!doctype html>

<head>
<?php include 'connvar.php'; ?>
  <style>
    body{
      background-color: white;
      color: black;
    }
    a{
      color: yellow;
    }
  </style>
</head>
<body>

<br>
<?php

$_SESSION['id'] = $_GET['id'];
$idtoupdate = $_SESSION['id'];
$idtoupdate_link = "com_update_show.php";
$idtodelete_link = "com_delete.php";

if(isset($_SESSION['id'])){
  $filtered_id = mysqli_real_escape_string($conn, $_SESSION['id']);
  $sql = "SELECT * FROM com where id={$filtered_id}";
  $result = mysqli_query($conn, $sql);
  $row2 = mysqli_fetch_array($result);
  echo '<br><br><h1 style="text-align: center;">'.$row2[1].'</h1>';
  echo '<br><br><h3 style="text-align: center;">'.$row2[2].'</h3>';
  $update_link = "<form action=".$idtoupdate_link." method='POST'><button role='submit' class='btn btn-warning'>수정하기</button></form>";
  $delete_link = "<form action=".$idtodelete_link." method='POST'><button class='btn btn-danger'>삭제하기</button></form>";

  echo $update_link;
  echo $delete_link;
}

























?>
<br><br>
<?php

$back = "<form action='community.php' method='POST'>
<button class='btn btn-warning' role='submit'>커뮤니티로 돌아가기</button>
</form>";

echo $back;
?>
</body>
</html>