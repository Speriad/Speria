<?php
 include 'connvar.php';
?>
<!doctype html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
	 crossorigin="anonymous">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.icon-icons.com/icons2/2107/PNG/512/file_type_php_icon_130266.png" rel="shortcut icon" type="image/x-icon">
	<title>Study</title>
  <style>
    ul{
   list-style:none;
      }  
    body{
      background-color: black;
      color: white;
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

<br><h1 style='text-align: center;'>커뮤니티</h1><br>
<form action='study_con.php' method='post'>
<input type='text' class= 'form-control' name = 'nickname' placeholder='제목' required>
<br><br><textarea class= 'form-control' rows='5' name='say' placeholder='내용' required></textarea>
<br><br><input type='password' class= 'form-control' name = 'pw' placeholder='비밀번호 (삭제 또는 수정 할때 필요함)' required>
<br><br><button role='submit' class='btn btn-outline-warning'>올리기</button> 
</form><br>

<h1 style='text-align: center;'>글</h1>
<br>
<ul style='text-align:center;'>
    <?php
//여태까지 입력됬던것들을 보여줌
//mysqli_fetch_array : $result를 배열의 형식으로 만들어줌
//$row = mysqli_fetch_array($result) = [id, nickname, say]
$sql = 'SELECT * FROM registration';
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
  echo "<li><a href=\"study_show.php?id={$row[0]}\">{$row[1]}</a></li><hr style='border: solid 1px white;'>";
};
  ?>
</ul>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
	 crossorigin="anonymous">
	</script>
</body>

</html>