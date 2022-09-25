<!doctype html>

<head>
  <?php
  include 'connvar.php';
  ?>
  <style type='text/css'>
    body {
      background-color: white;
    }

    a {
      text-decoration: none;
    }
  </style>
</head>

<body>
  <!-- NAVBAR 구현 -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
    <div class="container">
      <a class="navbar-brand">타입 비트</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#content" aria-controls="content" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="content">
        <?php
        if (isset($_POST['nickname'])) {
          $button1 = "<form action='index.php' method='post' class='d-flex p-2'><input type='hidden' name='nickname' value='{$_POST['nickname']}'>
        <button class='btn btn-outline-primary' type='submit'>로비 페이지로 돌아가기</button>
        </form>";
          echo $button1;
        } else {
          $button1 = "<form action='index.php' class='d-flex p-2'>
        <button class='btn btn-outline-primary' type='submit'>로비 페이지로 돌아가기</button>
        </form>";
          echo $button1;
        };
        ?>
      </div>
    </div>
  </nav>

  <section class='bg-dark text-white p-5 p-lg-0 pt-lg-5 text-center text-sm-start'>
    <div class='container'>
      <div class='d-sm-flex align-items-center justify-content-between'>
        <?php
        if (isset($_SESSION['nickname'])) {
          echo "<div class='py-4'><form action='com_create.php' method='post'><button role='submit' class='btn btn-outline-warning' name='typebeatcreate'>비트 업로드</button></form></div>";
        };
        ?>
      </div>
    </div>
  </section>

  <?php
  $sql = "SELECT * from com where method='typebeat'";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_array($result)) {
    $url = 'typebeat/' . $row[8];
    echo
    "<div class='border-0 d-flex align-items-center p-2 justify-content-center text-secondary'>
    <span class='px-5'>{$row[1]}</span>
    <audio controls>
  <source src='{$url}' type='audio/mpeg'>
</audio>
<span class='px-5'>by {$row[3]}</span>
    </div>";
  };

  ?>

















  </script>
</body>

</html>