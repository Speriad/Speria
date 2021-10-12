<?php
$conn = mysqli_connect('localhost','root','','test');
?>
<!doctype html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
	 crossorigin="anonymous">
    <link href="https://cdn.icon-icons.com/icons2/2107/PNG/512/file_type_php_icon_130266.png" rel="shortcut icon" type="image/x-icon">
	<title>Study</title>
  <style>
    body{
      background-color: black;
      color: white;
    }
    a{
      color: yellow;
    }
  </style>
</head>
<body>
<br><h1 style='text-align: center;'>글쓰기</h1><br>
<form action='study_con.php' method='post'>
<input type='text' class= 'form-control' name = 'nickname' placeholder='Artist'>
<br><br><textarea class= 'form-control' rows='5' name='say' placeholder='Album Name'></textarea>
<br><br><button role='submit' class='btn btn-outline-warning'>올리기</button> 
</form>

<h1>WEB</h1>
<ol>
    <?php
// DB 연결후, 셀렉트, 쿼리, 로우지정 순서대로 간다
// mysqli fetch array 함수는 컬럼을 하나씩 리턴 해주는 함수임
// [0] = id, [1] = nickname, [2] = say 이며
$sql = 'SELECT * FROM registration';
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
  echo "<li><a href=\"study.php?name={$row['nickname']}\">{$row['say']}</a></li>";
};
    ?>
</ol>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
	 crossorigin="anonymous">
	</script>
</body>

</html>