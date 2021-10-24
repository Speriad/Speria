<!doctype html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="https://i.ibb.co/hKp3HtP/DAMN.jpg" rel="shortcut icon" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
	 crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

	<title>MooHipGal</title>
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
    <a class="navbar-brand">Community</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#content" aria-controls="content" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="content">   
      <?php
      include 'connvar.php';
	  if(isset($_POST['nickname'])){
        $button1 = "<form action='index.php' method='post' class='d-flex p-2'><input type='hidden' name='nickname' value='{$_POST['nickname']}'>
        <button class='btn btn-outline-primary' type='submit'>Go To Lobby Page</button>
        </form>";
        echo $button1;
	  }else{
		$button1 = "<form action='index.php' class='d-flex p-2'>
        <button class='btn btn-outline-primary' type='submit'>Go To Lobby Page</button>
        </form>";
        echo $button1;
	  };
      ?>
  </div>
  </div>
</nav>

<section class='bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start'>
    <div class='container'>
      <div class='d-sm-flex align-items-center justify-content-between'>
        <div>
          <?php
			if(isset($_POST['nickname'])){
				echo "<h2>Hello, {$_POST['nickname']}!</h2>";
				$createapost = "<div class='text-right'>
				<form action='com_create.php' method='post'><input type='hidden' name='nickname' value='{$_POST['nickname']}'><button role='submit' class='btn btn-outline-warning'>Create a Post</button></form>
			</div>";
			echo $createapost;
			}else{
				echo '<h2>Hello, Guest! You can\'t create a post without login</h2>';
			};
		  ?>
        </div>
      </div>
    </div>
  </section>
  <ul style='text-align:center;'>
    <?php
$sql = 'SELECT * FROM com';
$result = mysqli_query($conn, $sql);

if(isset($_POST['nickname'])){
while($row = mysqli_fetch_array($result)){
	  echo "<br><form action = 'com_show.php' method='post'><input type='hidden' name='nickname' value='{$_POST['nickname']}'><input type='hidden' name='id' value='{$row[0]}'><button role='submit' class='btn btn-light'>{$row[1]}</button></form><br><hr style='border: solid 100% black;'>";
  };
}else{
	while($row = mysqli_fetch_array($result)){
		echo "<br><form action = 'com_show.php' method='post'><input type='hidden' name='id' value='{$row[0]}'><button role='submit' class='btn btn-light'>{$row[1]}</button></form><br><hr style='border: solid 100% black;'>";
  };
};
  ?>
</ul>

    
    
  



  









	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
	 crossorigin="anonymous">
	</script>
</body>

</html>