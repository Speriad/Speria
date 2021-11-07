<?php
 include 'connvar.php';
?>
<!doctype html>

<head>
<?php include 'connvar.php'; ?>
  <style>
    ul{
   list-style:none;
      }  
    body{
      background-color: white;
      color: black;
    }
    a{
      color: yellow;
      text-decoration: none;
    }
    hr{
      margin: 7px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
  <div class="container">
    <a class="navbar-brand">커뮤니티 - 글 쓰기</a>
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
$send = "<br><h1 style='text-align: center;'>Create a Post</h1><br>
<form action='com_con.php' method='POST'  enctype='multipart/form-data'>
<input type='text' class= 'form-control' name = 'title' placeholder='제목' required>
<input type='hidden' class= 'form-control' name = 'method' value='p'>
<br><br><textarea class= 'form-control' rows='5' name='say' placeholder='내용을 작성해주세요' required></textarea>
<br><br><input type='file' class='form-control' name='file'>
<br><br><button role='submit' class='btn btn-warning'>글 올리기</button> 
</form><br><br><div><form action='community.php' method='post'><button role='submit' class='btn btn-warning'>커뮤니티로 돌아가기</button></form></div>";
echo $send;
?>








</body>

</html>