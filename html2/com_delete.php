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
	<?php
        include 'connvar.php';
        $writtendb = "SELECT written from com where id=".$_POST['id'];

        if($writtendb == $_POST['nickname']){
            $deletefromdb = "DELETE from com where id=".$_POST['id'];
            mysqli_query($conn,$deletefromdb);
            echo '성공적으로 삭제되었습니다';
            echo "<br><form action = 'community.php' method='post'><input type='hidden' name='nickname' value='{$_POST['nickname']}'><button role='submit' class='btn btn-outline-warning'>Get back to community</button></form>";
        }else{
            echo '글쓴이와 정보가 일치하지 않습니다';
            echo "<br><form action = 'community.php'><button role='submit' class='btn btn-outline-warning'>Get Back To Community</button></form>";
        };
    ?>
	
    
    
  



  









	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
	 crossorigin="anonymous">
	</script>
</body>

</html>