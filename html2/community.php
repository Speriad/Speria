<!DOCTYPE html>

<head>
<?php include 'connvar.php'; ?>
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
			if(isset($_SESSION['nickname'])){
				echo "<h2>{$_SESSION['nickname']}, 환영합니다!</h2><br>";
				$createapost = "<div class='text-right'>
				<form action='com_create.php' method='post'><button role='submit' class='btn btn-outline-warning'>글 쓰기</button></form><form action='com_list.php'><button role='submit' class='btn btn-outline-warning'>내가 작성한 글</button>
			</div>";
			echo $createapost;
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
$sql = "SELECT * FROM com where type='p'";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)){
	  echo "<a href='com_show.php?id={$row[0]}'>{$row[1]}<span style='color: gray;'> ( $row[4] / $row[5] ) - {$row[3]} 에 의해 작성됨</span></a><br><hr>";
    };
    
  ?>
</ul>

    
    
  



  







</body>

</html>