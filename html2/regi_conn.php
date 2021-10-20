<?php
include 'connvar.php';
$sqlcheck = "SELECT nickname from registration where nickname='{$_POST['nickname']}'";
if(isset($sqlcheck)){
    $backtoindex = '<meta http-equiv="Refresh" content="0; url="index.php"" />'
    echo $backtoindex;
}else{
$sqlregi = "INSERT INTO registration(nickname,say) values('{$_POST['nickname']}','{$_POST['say']}')";
$queryregi = mysqli_query($conn, $sqlregi);
};


?>
<meta http-equiv="Refresh" content="0; url='index.php'" />