<!DOCTYPE html>

<head>
<?php include 'connvar.php'; 
?>
	<style type='text/css'>
		ul{
   list-style:none;
      }  
    body{
      background-color: white;
    }
    a{
      color: black;
      text-decoration: none;
    }
    hr{
      margin: 7px;
    }
	</style>
</head>

<body>
	<!-- NAVBAR 구현 -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
  <div class="container">
    <a class="navbar-brand">커뮤니티</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#content" aria-controls="content" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="content">   
      <?php
        $button1 = "<form action='index.php' method='post' class='d-flex p-2'>
        <button class='btn btn-outline-primary' type='submit'>로비 페이지로 돌아가기</button>
        </form>";
        echo $button1;
      ?>
  </div>
  </div>
</nav>

<section class='bg-dark text-white p-5 p-lg-0 pt-lg-5 text-center text-sm-start'>
    <div class='container'>
      <div class='d-sm-flex align-items-center justify-content-between'>
        <div>
          <?php

      if(isset($_POST['partner'])){
        echo "<h2>{$_SESSION['nickname']}, 환영합니다!</h2>파트너쉽 신청내역이 아래에 나타납니다<br><br><form action='community.php'><button role='submit' class='btn btn-outline-warning'>커뮤니티로 돌아가기</button></form><br><br>";
      }elseif(isset($_POST['list'])){
				echo "<h2>{$_SESSION['nickname']}, 환영합니다!</h2>썼던 글들이 아래에 나타납니다<br><br><form action='community.php'><button role='submit' class='btn btn-outline-warning'>커뮤니티로 돌아가기</button></form><br><br>";
			}elseif(isset($_POST['account'])){
        echo "<h2>{$_SESSION['nickname']}, 환영합니다!</h2>유저들의 계정을 관리할 수 있습니다. 다른 파트너의 파트너쉽을 무단으로 해지할 시 처벌을 받을 수 있습니다.<br><br><form action='community.php'><button role='submit' class='btn btn-outline-warning'>커뮤니티로 돌아가기</button></form><br><br>";
      }elseif(isset($_SESSION['nickname']) and $row2[3] == 'y'){
				echo "<h2>{$_SESSION['nickname']}, 환영합니다!</h2><br>";
				$buttonforpartner = "<div class='text-right'>
        <form action='com_create.php' method='post'><button role='submit' class='btn btn-outline-warning'>글 쓰기</button></form>
        <form action='community.php' method='post'><button role='submit' class='btn btn-outline-warning' name='list'>내가 작성한 글</button></form>
        <form action='community.php' method='post'><button role='submit' class='btn btn-outline-warning' name='partner'>파트너쉽 신청 내역 보기</button></form>
        <form action='community.php' method='post'><button role='submit' class='btn btn-outline-warning' name='account'>계정 관리하기</button></form></div>";
			echo $buttonforpartner;
			}elseif(isset($_SESSION['nickname'])){
        echo "<h2>{$_SESSION['nickname']}, 환영합니다!</h2><br>";
        $buttonforuser = "<div class='text-right'><form action='com_create.php' method='post'><button role='submit' class='btn btn-outline-warning'>글 쓰기</button></form>
        <form action='community.php' method='post'><button role='submit' class='btn btn-outline-warning' name='list'>내가 작성한 글</button></form></div>";
        echo $buttonforuser;
      }else{
				echo '<h2>당신은 게스트 상태입니다. 글을 보는것만 가능합니다</h2>';
			};
		  ?>
        <br><br><div class='text-light'>너희는 지금부터 길거리 지식의 힘을 느끼게 될거다<br>- 닥터 드레</div><br>
        </div>
      </div>
    </div>
  </section>
  <ul style='text-align:center;'>
    <?php
$sql = "SELECT * FROM com where method='p'";
$result = mysqli_query($conn, $sql);

$sql2 = "SELECT * FROM com where method='partner'";
$result2 = mysqli_query($conn, $sql2);

$sql3 = "SELECT * FROM com where method='p' and written='{$_SESSION['nickname']}'";
$result3 = mysqli_query($conn, $sql3);

$sql4 = "SELECT * FROM registration";
$result4 = mysqli_query($conn, $sql4);

$sql5 = "SELECT * from registration where nickname = '{$_SESSION['nickname']}'";
$result5 = mysqli_query($conn, $sql5);
$row5 = mysqli_fetch_array($result5);

if(isset($_POST['partner'])){
  if($row5[3] == 'y'){
  while($row2 = mysqli_fetch_array($result2)){
	  echo "<a href='com_show.php?id={$row2[0]}'>{$row2[1]}<span style='color: gray;'> ( $row2[4] / $row2[5] ) - {$row2[3]} 에 의해 작성됨</span></a><br><hr>";
    };
  };
}elseif(isset($_POST['list'])){  
  while($row3 = mysqli_fetch_array($result3)){
	  echo "<a href='com_show.php?id={$row3[0]}'>{$row3[1]}<span style='color: gray;'> ( $row3[4] / $row3[5] ) - {$row3[3]} 에 의해 작성됨</span></a><br><hr>";
    };
  }elseif(isset($_POST['account'])){
    if($row5[3] == 'y'){
    while($row4 = mysqli_fetch_array($result4)){
      if($row4[3] == 'y'){
      echo "{$row4[1]}<br><span><form action='community.php' method='post'><input type='hidden' name='userpartner' value='{$row4[3]}'><input type='hidden' name='userid' value='{$row4[1]}'>
      <button role='submit' class='btn btn-primary' name='upgradepartner'>파트너쉽 해지</button>
      <button role='submit' class='btn btn-danger' name='accountdelete'>계정 삭제</button></form></span><hr>";
      }else{
      echo "{$row4[1]}<br><span><form action='community.php' method='post'><input type='hidden' name='userpartner' value='{$row4[3]}'><input type='hidden' name='userid' value='{$row4[1]}'>
      <button role='submit' class='btn btn-primary' name='upgradepartner'>파트너쉽 부여</button>
      <button role='submit' class='btn btn-danger' name='accountdelete'>계정 삭제</button></form></span><hr>";
      };
    };
  };
  }else{
    while($row = mysqli_fetch_array($result)){
      echo "<a href='com_show.php?id={$row[0]}'>{$row[1]}<span style='color: gray;'> ( $row[4] / $row[5] ) - {$row[3]} 에 의해 작성됨</span></a><br><hr>";
      };
  };

  if(isset($_POST['upgradepartner'])){
    if($row5[3] == 'y'){
    if($_POST['userpartner'] == 'n'){
    $updatefromdb = "UPDATE registration set partner= 'y' where nickname='{$_POST['userid']}'";
  mysqli_query($conn, $updatefromdb);  
  echo "<meta http-equiv='Refresh' content='0; url='community.php'' />";

    }elseif($_POST['userpartner'] == 'y'){

      $updatefromdb = "UPDATE registration set partner= 'n' where nickname='{$_POST['userid']}'";
  mysqli_query($conn, $updatefromdb);
  echo "<meta http-equiv='Refresh' content='0; url='community.php'' />";

    };
  echo '<script>alert("성공적으로 수정되었습니다")</script>';
    };

  }elseif(isset($_POST['accountdelete'])){
    if($row5[3] == 'y'){
    $updatefromdb = "DELETE from registration where nickname='{$_POST['userid']}'";
    $updatefromdb2 = "DELETE from com where written='{$_POST['userid']}'";
  mysqli_query($conn, $updatefromdb);
  mysqli_query($conn, $updatefromdb2);
  echo "<meta http-equiv='Refresh' content='0; url='community.php'' />";
  }
};
    
  ?>
</ul>

    
    
  



  







</body>

</html>