<!doctype html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
	 crossorigin="anonymous">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.icon-icons.com/icons2/2107/PNG/512/file_type_php_icon_130266.png" rel="shortcut icon" type="image/x-icon">
	<title>MySQL</title>
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

<br><h1 style='text-align: center;'>글 수정</h1><br>
<?php
$conn = mysqli_connect('localhost','root','','test');
mysqli_set_charset($conn,'utf8');

$idtoupdate = $_GET['id'];
$idtoupdate_link = "study_update.php?id=".$idtoupdate;

$lessgotoupdate = "<form action=".$idtoupdate_link." method='post'>
<input type='text' class= 'form-control' name = 'nickname' placeholder='수정할 제목'>
<br><br><textarea class= 'form-control' rows='5' name='say' placeholder='수정할 내용'></textarea>
<br><br><button role='submit' class='btn btn-outline-warning'>수정하기</button> 
</form><br><br><form action='study.php'><button role='submit' class='btn btn-outline-warning'>커뮤니티로 돌아가기</button></form>";
echo $lessgotoupdate;
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
	 crossorigin="anonymous">
	</script>
</body>
</html>