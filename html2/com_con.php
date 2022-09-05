<!doctype html>

<head>
  <?php include 'connvar.php'; ?>
  <style>
    body {
      background-color: white;
      color: black;
    }

    a {
      color: yellow;
    }
  </style>
</head>

<body>


  <?php

  $msg = "";

  if (isset($_POST['upload'])) {
    if (isset($_POST['imgurl'])) {
      $sql = "INSERT INTO com (title, say, written, method, good, hate, imgurl) 
    VALUES ( '{$_POST['title']}' , '{$_POST['say']}' , '{$_SESSION['nickname']}' , '{$_POST['method']}' , 0 , 0, '{$_POST['imgurl']}')";

      mysqli_query($conn, $sql);
    } else {
      $sql = "INSERT INTO com (title, say, written, method, good, hate) 
      VALUES ( '{$_POST['title']}' , '{$_POST['say']}' , '{$_SESSION['nickname']}' , '{$_POST['method']}' , 0 , 0)";

      mysqli_query($conn, $sql);
    };
  } elseif (isset($_POST['partner'])) {
    $sql = "INSERT INTO com (title, say, written, method, good, hate) 
    VALUES ( '{$_POST['title']}' , '{$_POST['say']}' , '{$_SESSION['nickname']}' , '{$_POST['method']}' , 0 , 0)";

    mysqli_query($conn, $sql);

    $partneralert = "<script>alert('운영자가 곧 검토 할 예정입니다.')</script>";

    echo $partneralert;
  };

  //-------------------------------------------------------------------------------------------

  // if(isset($_SESSION['nickname'])){
  // if(isset($_FILES['image'])){
  //   $photo = $_FILES['image']['name'];
  //   $phototemp = $_FILES['image']['tmp_name'];

  //   $folder = "com/";

  //   $puttodb = "INSERT into com(title ,say, written, method, good, hate, image)
  // VALUES ( '{$_POST['title']}' , '{$_POST['say']}'  , '{$_SESSION['nickname']}' , '{$_POST['method']}' , 0 , 0, '$photo')";
  // }else{
  //   $puttodb = "INSERT into com(title ,say, written, method, good, hate)
  // VALUES ( '{$_POST['title']}' , '{$_POST['say']}' , '{$_SESSION['nickname']}' , '{$_POST['method']}' , 0 , 0)";
  // };
  // mysqli_query($conn,$puttodb);
  // };






















  ?>
  <meta http-equiv="Refresh" content="0; url='community.php'" />
</body>

</html>