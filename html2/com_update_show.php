<!doctype html>

<head>
  <?php include 'connvar.php'; ?>
  <style>
    ul {
      list-style: none;
    }

    body {
      background-color: white;
      color: black;
    }

    a {
      color: yellow;
      text-decoration: none;
    }

    hr {
      margin: 7px;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
    <div class="container">
      <a class="navbar-brand">커뮤니티 - 글 수정</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#content" aria-controls="content" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="content">
        <form action='community.php' method='post' class='d-flex p-2'>
          <button class='btn btn-outline-primary' type='submit'>커뮤니티로 돌아가기</button>
        </form>
      </div>
    </div>
  </nav>


  <?php
  $writtendb = "SELECT * from com where id=" . $_SESSION['id'];
  $resultwritten = mysqli_query($conn, $writtendb);
  $rowwritten = mysqli_fetch_array($resultwritten);

  $sql2 = "SELECT * from registration where nickname = '{$_SESSION['nickname']}'";
  $result2 = mysqli_query($conn, $sql2);
  $row2 = mysqli_fetch_array($result2);

  if ($_SESSION['nickname'] == $rowwritten[3] or $row2[3] == 'y') {
    $send = "<br><h1 style='text-align: center;'>게시물 수정</h1><br>
<form action='com_update.php' method='post' enctype='multipart/form-data'>
<input type='hidden' class= 'form-control' name = 'method' value='p'>
<textarea class='form-control' name = 'title' placeholder='수정할 제목' rows='2' required>{$rowwritten[1]}</textarea>
<br><br><textarea class= 'form-control' rows='8' name='say' placeholder='수정할 내용' required>{$rowwritten[2]}</textarea><br>
<input type='file' class='form-control' name='imgurl' placeholder='이미지를 수정하려면 새로운 이미지를 업로드 해주세요.'>
<br><br><button role='submit' class='btn btn-warning'>글 수정하기</button> 
</form><br>";
    echo $send;
    $back = "<br><div><form action='community.php' method='post'><button role='submit' class='btn btn-warning'>커뮤니티로 돌아가기</button></form></div>";
    echo $back;
  } elseif (isset($_SESSION['nickname'])) {
    echo "<script>alert('이 글의 작성자만 글을 수정할 수 있습니다')</script>";
    echo '<meta http-equiv="Refresh" content="0; url=\'community.php\'" />';
  } else {
    echo "<script>alert('로그인 없이는 글을 수정할 수 없습니다')</script>";
    echo '<meta http-equiv="Refresh" content="0; url=\'community.php\'" />';
  };
  ?>







</body>

</html>