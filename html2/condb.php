<!DOCTYPE html>
<html>
<head>
    <title>로그인 완료</title>
    <meta charset="utf-8">
	<link href="https://i.ibb.co/hKp3HtP/DAMN.jpg" rel="shortcut icon" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
	$firstName = $_POST['id'];
	$password = $_POST['password'];

	// Database connection
	$conn = new mysqli('sql206.epizy.com','epiz_29599569','8DfkA57d5o77A','epiz_29599569_php');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(id ,password) values(?, ?)");
		$stmt->bind_param("sssssi", $id, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
<meta http-equiv="Refresh" content="0; url='index.php'" />
</body>
</html>