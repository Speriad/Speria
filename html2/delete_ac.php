<?php
include 'connvar.php';
$delete = "DELETE from registration where nickname='{$_SESSION['nickname']}'";
$delete2 = "DELETE from com where written='{$_SESSION['nickname']}'";
mysqli_query($conn , $delete);
mysqli_query($conn , $delete2);
$_SESSION['nickname'] = null;
?>

<meta http-equiv="Refresh" content="0; url='index.php'" />