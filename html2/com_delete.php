<!doctype html>

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
	<?php
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
	
    
    
  



  









</body>

</html>