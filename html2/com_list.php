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
    <a class="navbar-brand">글 기록</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#content" aria-controls="content" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="content">   
      <?php
        $button1 = "<form action='index.php' method='post' class='d-flex p-2'>
        <button class='btn btn-outline-primary' type='submit'>Go To Lobby Page</button>
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
				echo "<h2>{$_SESSION['nickname']}, 환영합니다!</h2>썼던 글들이 아래에 나타납니다<br><br>";
			}else{
				echo '<h2>로그인을 하지 않아 글 기록을 볼수 없습니다</h2>';
                echo "<meta http-equiv='Refresh' content='0; url='community.php'' />";
            };
		  ?>
        </div>
      </div>
    </div>
  </section>
  <ul style='text-align:center;'>
    <?php
$sql = "SELECT * FROM com where written='{$_SESSION['nickname']}'";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)){
	  echo "<a href='com_show.php?id={$row[0]}'>{$row[1]}</a><br><hr>";
    };
    
  ?>
</ul>

    
    
  



  







</body>

</html>