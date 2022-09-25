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
    if (isset($_FILES["imgurl"]) && !empty($_FILES["imgurl"]["name"])) {
      $filename = uniqid($_FILES["imgurl"]["name"]) . ".jpg";
      $tempname = $_FILES["imgurl"]["tmp_name"];
      $folder = "./image/" . $filename;

      // Now let's move the uploaded image into the folder: image
      if (move_uploaded_file($tempname, $folder)) {
        echo "<h3></h3>";
      } else {
        echo "<h3></h3>";
      };

      $sql = "INSERT INTO com (title, say, written, method, good, hate, imgurl, view) 
    VALUES ( '{$_POST['title']}' , '{$_POST['say']}' , '{$_SESSION['nickname']}' , '{$_POST['method']}' , 0 , 0, '$filename', 0)";

      mysqli_query($conn, $sql);
    } else {
      $sql = "INSERT INTO com (title, say, written, method, good, hate, view) 
      VALUES ( '{$_POST['title']}' , '{$_POST['say']}' , '{$_SESSION['nickname']}' , '{$_POST['method']}' , 0 , 0, 0)";

      mysqli_query($conn, $sql);
    };
  } elseif (isset($_POST['typebeatupload'])) {
    $filename = uniqid($_FILES["typebeat"]["name"]) . ".mp3";
    $tempname = $_FILES["typebeat"]["tmp_name"];
    $folder = "./typebeat/" . $filename;

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
      echo "<h3></h3>";
    } else {
      echo "<h3></h3>";
    };

    $sql = "INSERT INTO com (title, say, written, method, good, hate, imgurl, view) 
    VALUES ( '{$_POST['title']}' , 'typebeat' , '{$_SESSION['nickname']}' , '{$_POST['method']}' , 0 , 0, '$filename', 0)";

    mysqli_query($conn, $sql);

    echo "<meta http-equiv='Refresh' content='0; url='typebeat.php'' />";
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