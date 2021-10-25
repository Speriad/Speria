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
        $writtendb = "SELECT * from com where id=".$_SESSION['id'];
        $resultwritten = mysqli_query($conn, $writtendb);
        $rowwritten = mysqli_fetch_array($resultwritten);

        if(isset($_SESSION['nickname'])){
          if($_SESSION['nickname'] == $rowwritten[3]){
            $deletefromdb = "DELETE from com where id=".$_SESSION['id'];
            mysqli_query($conn,$deletefromdb);
            echo '<script>alert("A Post has been removed successfully")</script>';
          }else{
            echo "<script>alert('Only Writer of this post can remove this post')</script>";
          };
        }else{
            echo '<script>alert("Guest Can\'t remove a post")</script>';
            };
    ?>

<meta http-equiv="Refresh" content="0; url='community.php'" />
	
    
    
  



  









	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
	 crossorigin="anonymous">
	</script>
</body>

</html>