<!DOCTYPE html>
<html>
<head>
<?php
include 'connvar.php';
?>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
  <div class="container">
    <a class="navbar-brand">댓글</a>
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
<form action='com_re.php'>
    
</form>
</body>
</html>