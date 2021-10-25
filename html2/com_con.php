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
$puttodb = "INSERT into com(title ,say, written)
VALUES ( '{$_POST['title']}' , '{$_POST['say']}' , '{$_SESSION['nickname']}' )";
mysqli_query($conn,$puttodb);
echo "<script>alert('Created A Post successfully')</script>";
}else{
  echo "<script>alert('You can't create a post without login')</script>";
};























?>
<meta http-equiv="Refresh" content="0; url='community.php'" />
</body>
</html>