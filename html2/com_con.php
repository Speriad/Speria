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
if(isset($_FILES['photo'])){
  $photo = $_FILES['photo']['name'];
  $phototemp = $_FILES['photo']['tmp_name'];

  $folder = "com/";

  $puttodb = "INSERT into com(title ,say, written, method, good, hate, photo)
VALUES ( '{$_POST['title']}' , '{$_POST['say']}' , '{$_SESSION['nickname']}' , '{$_POST['method']}' , 0 , 0, '$photo')";
move_uploaded_file($phototemp, $folder.$photo);
}else{
  $puttodb = "INSERT into com(title ,say, written, method, good, hate)
VALUES ( '{$_POST['title']}' , '{$_POST['say']}' , '{$_SESSION['nickname']}' , '{$_POST['method']}' , 0 , 0)";
};
mysqli_query($conn,$puttodb);
};






















?>
<meta http-equiv="Refresh" content="100; url='community.php'" />
</body>
</html>