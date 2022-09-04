<!DOCTYPE html>

<head>
<?php include 'connvar.php'; ?>
  <style>
    body{
      background-color: white;
      color: black;
    }
    a{
      color: yellow;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
  <div class="container">
    <a class="navbar-brand">커뮤니티</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#content" aria-controls="content" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="content">   
        <form action='community.php' method='post' class='d-flex p-2'>
        <button class='btn btn-outline-primary' type='submit'>커뮤니티로 돌아가기</button>
        </form>
  </div>
  </div>
</nav>

<br>
<?php

$_SESSION['id'] = $_GET['id'];
$idtoupdate_link = "com_update_show.php";
$idtodelete_link = "com_delete.php";
$sql = "SELECT * FROM com where id={$_SESSION['id']}";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$sql2 = "SELECT * from registration where nickname = '{$_SESSION['nickname']}'";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_array($result2);
echo '<h1 style="text-align: center;">'.$row[1]."<span style='color: gray;'> - ".$row[3]." 에 의해 작성됨</span></h1>";
echo "<div style='color: gray; text-align: center;'>{$row[7]}</div>";
echo '<hr>';
if(isset($row[8])){
  echo "<img src='{$row[8]}' class='rounded mx-auto d-block'>";
};
echo '<br><h3 style="text-align: center;">'.nl2br($row[2]).'</h3><br><br><br><br><br>';

if(isset($_SESSION['nickname'])){
if($_SESSION['nickname'] == $row[3]){
  $update_link = "<br><div class='text-center'><div class='container mt-3'><div class='btn-group btn-group-lg'><form action=".$idtoupdate_link." method='POST'><button role='submit' class='btn btn-warning'>수정하기</button></form>";
  $delete_link = "<form action=".$idtodelete_link." method='POST'><button class='btn btn-danger'>삭제하기</button></form></div></div></div>";

  echo $update_link;
  echo $delete_link;
}elseif($row2[3] == 'y'){
  $delete_link = "<div class='text-center'><div class='container mt-3'><div class='btn btn-group btn-group-lg'>
  <form action=".$idtodelete_link." method='POST'><button class='btn btn-danger'>삭제하기</button></form></div></div></div>";

  echo $delete_link;
};
};

echo "<br><div class='text-center'><div class='container mt-3'><div class='btn btn-group btn-group-lg'>
<form action='com_like.php' method='post'><button role='submit' class='btn btn-primary'><i class='bi bi-hand-thumbs-up-fill'></i> {$row[4]}</button></form>
<form action='com_hate.php' method='post'><button role='submit' class='btn btn-primary'><i class='bi bi-hand-thumbs-down-fill'></i> {$row[5]}</button></form>
</div></div></div>";

$sqlcomment = "SELECT * FROM com where method='r' AND title={$_SESSION['id']}";
$resultcomment = mysqli_query($conn, $sqlcomment);
$commentn = mysqli_num_rows($resultcomment);

echo "<br><br><h3>댓글<span style='color: gray;'> - {$commentn}</span></h3><hr>";
if(isset($_SESSION['nickname'])){

$form = "<form action='com_re.php' method='post'>
<input type='hidden' name='method' value='r'>
<input type='hidden' name='title' value={$_SESSION['id']}>
<textarea class='form-control' rows='5' name='say' placeholder='댓글을 작성해주세요' required></textarea>
<button role='submit' class='btn btn-warning'>댓글 달기</button>
</form>";

echo $form;
};

echo "<ul style='text-align: center;'>";
$sqlcomment = "SELECT * FROM com where method='r' AND title={$_SESSION['id']}";
$resultcomment = mysqli_query($conn, $sqlcomment);

$sqlpartner = "SELECT * from registration where nickname='{$_SESSION['nickname']}'";
$resultpartner = mysqli_query($conn, $sqlpartner);
$rowpartner = mysqli_fetch_array($resultpartner);

while($rowcomment = mysqli_fetch_array($resultcomment)){
        $nl2brcomment = nl2br($rowcomment[2]);
	  echo "{$nl2brcomment}<div style='color: gray;'> - {$rowcomment[3]} 에 의해 작성됨 - {$rowcomment[7]}</div><br>";
    if(isset($_SESSION['nickname'])){
    if($_SESSION['nickname'] == $rowcomment[3] or $rowpartner[3] == 'y'){
      echo "<form action='com_show.php?id={$_SESSION['id']}' method='post'><input type='hidden' name='commentid' value={$rowcomment[0]}><button role='submit' class='btn btn-danger' name='deletecomment'>삭제하기</button></form></span><hr>";
    }else{
      echo "</span><hr>";
    };
    };
  };

if(isset($_POST['deletecomment'])){
  $deletesql = "DELETE FROM com where title={$_SESSION['id']} and id={$_POST['commentid']}";
  $deletequery = mysqli_query($conn, $deletesql);
  echo "<meta http-equiv='Refresh' content='0; url='com_show.php?id={$_SESSION['id']}'' />"; 
};





















?>
</ul>
<br>  
</body>
</html>