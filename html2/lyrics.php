<!doctype html>

<head>
<?php
    include 'connvar.php';
  ?>
	<style type='text/css'>
		body {
			background-color: white;
		}
        a{
            text-decoration: none;
        }
	</style>
</head>

<body>
	<!-- NAVBAR 구현 -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
  <div class="container">
    <a class="navbar-brand">가사</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#content" aria-controls="content" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="content">   
      <?php
	  if(isset($_POST['nickname'])){
        $button1 = "<form action='index.php' method='post' class='d-flex p-2'><input type='hidden' name='nickname' value='{$_POST['nickname']}'>
        <button class='btn btn-outline-primary' type='submit'>로비 페이지로 돌아가기</button>
        </form>";
        echo $button1;
	  }else{
		$button1 = "<form action='index.php' class='d-flex p-2'>
        <button class='btn btn-outline-primary' type='submit'>로비 페이지로 돌아가기</button>
        </form>";
        echo $button1;
	  };
      ?>
  </div>
  </div>
</nav>

    
    
  



  









	</script>
</body>

</html>