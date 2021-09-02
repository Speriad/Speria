<!DOCTYPE html>
<html>
<head>
    <title>정보 전송중</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="https://i.ibb.co/hKp3HtP/DAMN.jpg" rel="shortcut icon" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
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
<meta http-equiv="Refresh" content="0; url='index.php'" />
</body>
</html>

<!-- $conn = new mysqli('sql206.epizy.com','epiz_29599569','8DfkA57d5o77A','epiz_29599569_php'); -->