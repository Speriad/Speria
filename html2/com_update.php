<!doctype html>

<head>
<?php include 'connvar.php'; ?>
  <style>
    body{
      background-color: white;
      color: black;
    }
  </style>
</head>
<body>


<?php

$updatefromdb = "UPDATE com set title='{$_POST['title']}', say='{$_POST['say']}' where id={$_SESSION['id']} and method='{$_POST['method']}'";
  mysqli_query($conn, $updatefromdb);  

  echo '<script>alert("Success fully updated")</script>';



//얻은 패스워드가 맞는지 확인 아니면 변수값으로 리프레쉬 지정후 에코





























?>
<meta http-equiv="Refresh" content="0; url='community.php'" />
</body>
</html>