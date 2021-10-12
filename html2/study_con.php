<title>MySQL</title>
<?php
$conn = mysqli_connect('localhost','root','','test');

$title = $_POST['nickname'];
$saysomething = $_POST['say'];

$puttodb = "INSERT into registration(nickname,say)
VALUE ( '{$_POST['nickname']}' , '{$_POST['say']}' )";


mysqli_query($conn,$puttodb);

echo $title.'<br>';
echo '<br>'.$saysomething;
echo '<br>'.$puttodb





























?>