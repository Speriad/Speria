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


<?php

if(isset($_SESSION['nickname'])){
$puttodb = "INSERT into com(title ,say, written, method, good, hate)
VALUES ( '{$_POST['title']}' , '{$_POST['say']}' , '{$_SESSION['nickname']}' , '{$_POST['method']}'), 0, 0";
mysqli_query($conn,$puttodb);
echo "<script>alert('성공적으로 작성되었습니다')</script>";
}else{
  echo "<script>alert('로그인 후 글을 작성할수 있습니다')</script>";
};























?>
<meta http-equiv="Refresh" content="0; url='community.php'" />
</body>
</html>