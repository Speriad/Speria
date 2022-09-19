<!doctype html>

<head>
  <?php include 'connvar.php'; ?>
  <style>
    body {
      background-color: white;
      color: black;
    }
  </style>
</head>

<body>


  <?php
  if (isset($_FILES["imgurl"]) && !empty($_FILES["imgurl"]["name"])) {
    $filename = uniqid($_FILES["imgurl"]["name"]);
    $tempname = $_FILES["imgurl"]["tmp_name"];
    $folder = "./image/" . $filename;

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
      echo "<h3></h3>";
    } else {
      echo "<h3></h3>";
    };

    $updatefromdb = "UPDATE com set title='{$_POST['title']}', say='{$_POST['say']}', imgurl='$filename' where id={$_SESSION['id']} and method='{$_POST['method']}'";
    mysqli_query($conn, $updatefromdb);
  } else {
    $updatefromdb = "UPDATE com set title='{$_POST['title']}', say='{$_POST['say']}' where id={$_SESSION['id']} and method='{$_POST['method']}'";
    mysqli_query($conn, $updatefromdb);
  };

  echo '<script>alert("성공적으로 수정되었습니다")</script>';



  //얻은 패스워드가 맞는지 확인 아니면 변수값으로 리프레쉬 지정후 에코





























  ?>
  <meta http-equiv="Refresh" content="0; url='community.php'" />
</body>

</html>