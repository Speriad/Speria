<?php
include 'connvar.php';
if (isset($_SESSION['nickname'])) {
    $checkifalready = "SELECT * from likebutton where postid={$_SESSION['id']}";
    $checkifalreadyquery = mysqli_query($conn, $checkifalready);
    $checkifalreadyrow = mysqli_fetch_array($checkifalreadyquery);
    if (isset($checkifalreadyrow)) {
        if ($checkifalready[3] == 'like') {
            $lessgood = "UPDATE com SET good=good-1 where id={$_SESSION['id']}";
            mysqli_query($conn, $lessgood);
            $removefromlikebutton = "DELETE from likebutton where postid = {$_SESSION['id']} and nickname='{$_SESSION['nickname']}'";
            mysqli_query($conn, $removefromlikebutton);
            echo "<meta http-equiv='Refresh' content=\"0; url='com_show.php?id={$_SESSION['id']}'\" />";
        } elseif ($checkifalreadyrow[3] == 'hate') {
            $changelikeandhate = "UPDATE com SET good=good+1 and hate=hate-1 where id={$_SESSION['id']}";
            mysqli_query($conn, $changelikeandhate);
            $changefromlikebutton = "UPDATE likebutton SET type='hate' where postid={$_SESSION['id']} and nickname='{$_SESSION['nickname']}'";
            mysqli_query($conn, $changefromlikebutton);
            echo "<meta http-equiv='Refresh' content=\"0; url='com_show.php?id={$_SESSION['id']}'\" />";
        };
    } elseif (!isset($checkifalreadyrow)) {
        $moregood = "UPDATE com SET good=good+1 where id={$_SESSION['id']}";
        mysqli_query($conn, $moregood);
        $sql = "SELECT * from com where id={$_SESSION['id']}";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $addtolikelist = "INSERT into likebutton (nickname, postid, type, title, written) VALUES ('{$_SESSION['nickname']}', {$_SESSION['id']}, 'like', '{$row[1]}', '{$row[3]}')";
        mysqli_query($conn, $addtolikelist);
        echo "<meta http-equiv='Refresh' content=\"0; url='com_show.php?id={$_SESSION['id']}'\" />";
    };
} else {
    echo "<script>alert('로그인 후 이용 가능합니다')</script>";
    echo "<meta http-equiv='Refresh' content=\"0; url='com_show.php?id={$_SESSION['id']}'\" />";
};
