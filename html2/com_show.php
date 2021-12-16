<!doctype html>

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
$row2 = mysqli_fetch_array($result);
echo '<h1 style="text-align: center;">'.$row2[1]."<span style='color: gray;'> - ".$row2[3]." 에 의해 작성됨</span></h1>";
echo '<hr>';
if(isset($row2[7])){
  echo "<img src='com/{$row2[7]}'>";
};
echo '<br><h3 style="text-align: center;">'.$row2[2].'</h3><br><br><br><br><br>';

if(isset($_SESSION['nickname'])){
if($_SESSION['nickname'] == $row2[3]){
  $update_link = "<br><div class='text-center'><div class='container mt-3'><div class='btn-group btn-group-lg'><form action=".$idtoupdate_link." method='POST'><button role='submit' class='btn btn-warning'>수정하기</button></form>";
  $delete_link = "<form action=".$idtodelete_link." method='POST'><button class='btn btn-danger'>삭제하기</button></form></div></div></div>";

  echo $update_link;
  echo $delete_link;
};
};

echo "<br><div class='text-center'><div class='container mt-3'><div class='btn btn-group btn-group-lg'>
<form action='com_like.php' method='post'><button role='submit' class='btn btn-primary'><i class='bi bi-hand-thumbs-up-fill'></i> {$row2[4]}</button></form>
<form action='com_hate.php' method='post'><button role='submit' class='btn btn-primary'><i class='bi bi-hand-thumbs-down-fill'></i> {$row2[5]}</button></form>
</div></div></div>";

echo "<br><br><h3>댓글</h3><hr>";
if(isset($_SESSION['nickname'])){

$form = "<form action='com_re.php' method='post'>
<input type='hidden' name='method' value='r'>
<input type='hidden' name='title' value={$_SESSION['id']}>
<textarea class='form-control' rows='5' name='say' placeholder='댓글을 작성해주세요' required></textarea>
<button role='submit' class='btn btn-warning'>댓글 달기</button>
</form>";

echo $form;
};

?>
<ul style='text-align: center;'>
<?php
$sqlcomment = "SELECT * FROM com where method='r' AND title={$_SESSION['id']}";
$resultcomment = mysqli_query($conn, $sqlcomment);

while($rowcomment = mysqli_fetch_array($resultcomment)){
	  echo "<a>{$rowcomment[2]}<span style='color: gray;'> - {$rowcomment[3]} 에 의해 작성됨</span></a><br><hr>";
    };























?>
</ul>
<br>  
</body>
</html>