<?php
include 'connvar.php';
if(isset($_SESSION['nickname'])){
$moregood = "UPDATE com SET good=good+1 where id={$_SESSION['id']}";
mysqli_query($conn, $moregood);
echo "<meta http-equiv='Refresh' content=\"0; url='com_show.php?id={$_SESSION['id']}'\" />";

}else{
    echo "<script>alert('로그인 후 이용 가능합니다')</script>";
    echo "<meta http-equiv='Refresh' content=\"0; url='com_show.php?id={$_SESSION['id']}'\" />";
};
?>

