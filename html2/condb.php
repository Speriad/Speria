<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="https://i.ibb.co/hKp3HtP/DAMN.jpg" rel="shortcut icon" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
	 crossorigin="anonymous">

	<title>정보 전송 완료</title>
</head>
<body>
<nav class='navbar navbar-expand-lg bg-dark navbar-dark py-3'>
		<div class='container'>
			<a class='navbar-brand'>Sent Successfully</a>
  </nav>


<?php
	$id = $_POST['id'];
	$password = $_POST['password'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
    mysqli_set_charset($conn,'utf8');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(id ,password) values(?, ?)");
		$stmt->bind_param("ss", $id, $password);
		$execval = $stmt->execute();
		echo $execval;
		$stmt->close();
		$conn->close();
	}
?>
개의 메시지가 전달되었습니다.
<meta http-equiv="Refresh" content="2; url='index.php'" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
	 crossorigin="anonymous">
	</script>
</body>
</html>

<!-- $conn = new mysqli('sql206.epizy.com','epiz_29599569','8DfkA57d5o77A','epiz_29599569_php'); -->