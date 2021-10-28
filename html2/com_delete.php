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
            $deletefromdb2 = "DELETE from com where method='r' and title={$_SESSION['id']}";
            mysqli_query($conn,$deletefromdb);
            mysqli_query($conn,$deletefromdb2);
            echo '<script>alert("성공적으로 글이 삭제되었습니다")</script>';
          }else{
            echo "<script>alert('글 작성자만 게시글을 삭제 할수 있습니다')</script>";
          };
        }else{
            echo '<script>alert("로그인 없이는 이 게시글을 삭제 할수 없습니다")</script>';
            };
    ?>

<meta http-equiv="Refresh" content="0; url='community.php'" />
	
    
    
  



  









</body>

</html>