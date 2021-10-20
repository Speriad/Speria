<?php
include 'connvar.php';
$sqlregi = "INSERT INTO registration(nickname,say) values('{$_POST['nickname']}','{$_POST['say']}')";
$queryregi = mysqli_query($conn, $sqlregi);



?>
<meta http-equiv="Refresh" content="0; url='index.php'" />