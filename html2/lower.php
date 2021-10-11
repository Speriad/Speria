<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="https://i.ibb.co/hKp3HtP/DAMN.jpg" rel="shortcut icon" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
	 crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
   <meta name="description" content="Old MooHipGal (2021 Re-Launched)">

	<title>Lower Game</title>
    <style>
      body {
			background-color: darkgray;
		}
    a{
      text-decoration: none;
      color:white;
    }
    </style>
</head>
<body>
  <div class="input-group mb-3">
  <input type="number" class="form-control" placeholder="당신의 숫자를 입력해주세요" aria-label="Username" id='user'>
  </div>
  <button class='btn btn-outline-warning' role='submit' onclick=lower()>게임 시작</button>
  <p>
    <br>소수를 입력하면 자동으로 내림하여 자연수로 시작됩니다
  </p>
  <p>
    <form action='html.html'>
      <button class='btn btn-outline-warning' role='submit'>무힙갤로 돌아가기</button>
    </form>
  </p>
  <script>
    function lower(){
    var userint=parseInt(document.getElementById('user').value)
    var aiint=parseInt(Math.random()*99+1)
    if(userint < 1){
      alert('1 이상의 정수를 입력해주세요')
    }else if(userint > 98){
      alert('98 이하의 정수를 입력해주세요')
    }else{
      if(aiint > userint){
        alert('AI의 선택 : '+aiint)
        alert('당신이 패배하셨습니다.')
      }else if(aiint < userint){
        alert('AI의 선택 : '+aiint)
        alert('당신이 승리하였습니다!')
      }else{
        alert('AI의 선택 : '+aiint)
        alert('무승부 입니다.')
      }
    }
    }
  </script>
</body>
</html>