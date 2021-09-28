<!doctype html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://cdn.icon-icons.com/icons2/2107/PNG/512/file_type_php_icon_130266.png" rel="shortcut icon" type="image/x-icon">
	<title>Study</title>
</head>
<body>
<h1>Parameter</h1>
<ol>
    <li><a href='study.php?id=HTML'>HTML</a></li>
    <li><a href='study.php?id=CSS'>CSS</a></li>
    <li><a href='study.php?id=JavaScript'>JavaScript</a></li>
</ol>

    
<h2>
<?php
    echo $_GET['id'];
?>
</h2>

<h1>Function</h1>
<?php
$str = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Officia unde fuga cum quo animi enim temporibus corporis beatae blanditiis! 
Facere porro quis officia, qui sunt eum accusamus! Necessitatibus, fuga dignissimos!';
echo $str;
?>

<h2>strlen()</h2>
<?php
echo strlen($str);  //문자열의 글자수를 세줌
?>

<h2>nl2br</h2>
<?php
echo nl2br($str);
?>
  









</body>

</html>