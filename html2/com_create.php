<?php
include 'connvar.php';
?>
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
      <a class="navbar-brand">글 작성</a>
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
  $send = "<br><h1 style='text-align: center;'>게시물 작성</h1><br>
<form action='com_con.php' method='POST' enctype='multipart/form-data'>
<textarea rows='2' class= 'form-control' name = 'title' placeholder='제목' required></textarea>
<input type='hidden' class= 'form-control' name = 'method' value='p'>
<br><br><textarea class= 'form-control' rows='5' name='say' placeholder='내용을 작성해주세요' required></textarea>
<br><input type='file' class='form-control' name='imgurl' placeholder='이미지를 업로드 해주세요.'>
<br><br><button role='submit' name='upload' class='btn btn-warning'>글 올리기</button> 
</form><br><br><div><form action='community.php' method='post'><button role='submit' class='btn btn-warning'>커뮤니티로 돌아가기</button></form></div>";

  $send2 = "<br><h1 style='text-align: center;'>타입비트 업로드</h1><br>
  <form action='com_con.php' method='POST' enctype='multipart/form-data'>
  <textarea rows='2' class= 'form-control' name = 'title' placeholder='제목' required></textarea>
  <input type='hidden' class= 'form-control' name = 'method' value='typebeat'>
  <br><input type='file' class='form-control' name='typebeat' placeholder='비트를 업로드 해주세요.' required>
  <br><br><button role='submit' name='typebeatupload' class='btn btn-warning'>비트 올리기</button> 
  </form><br><br><div><form action='community.php' method='post'><button role='submit' class='btn btn-warning'>커뮤니티로 돌아가기</button></form></div>";

  if (isset($_POST['typebeatcreate'])) {
    echo $send2;
  } else {
    echo $send;
  };
  ?>








</body>

</html>