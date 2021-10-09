<!doctype html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://cdn.icon-icons.com/icons2/2107/PNG/512/file_type_php_icon_130266.png" rel="shortcut icon" type="image/x-icon">
	<title>Study</title>
</head>
<body>
<h1>Parameter</h1>
<ol>
    <li><a href='study.php?id=HTML&text=HTML is Hyper Text Markup Language'>HTML</a></li>
    <li><a href='study.php?id=CSS&text=CSS is design Language'>CSS</a></li>
    <li><a href='study.php?id=JavaScript&text=JavaScript is popular'>JavaScript</a></li>
</ol>

    
<h2>
<?php
     if(isset($_GET['id'])){
        echo $_GET['id'];
      }else{
        echo 'Click Anything You want to know';
      }
?>
</h2>
<p>
<?php
     if(isset($_GET['text'])){
        echo $_GET['text'];
      }else{
        echo 'Here is Description';
      }
?>
</p>
<!-- --------------------------------------------------------------------- -->
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
echo nl2br($str);  //문자열에 포함된 문자를 <br>태그로 모두 바꿔준다
?>

<h2>Comparison Operators & Boolean data type</h2>
<?php
var_dump(1);  //값을 출력하면서 문자열인지 숫자열인지 구별해줌
var_dump(1>1)  //true 인지 false 인지 구별해줌


?>

<h2>IF</h2>
<?php
$forif = 'Drizzy Gave me a gift';
if($forif == 'Drizzy Gave me a gift'){
    echo 'This is one of the most true thing in the world';
}   


?>
<h2>Loop</h2>
<?php
$whilevariable = 1;
while($whilevariable<11){
    echo $whilevariable.'<br>';
    $whilevariable = $whilevariable + 1;
}

?>
<h2>Array</h2>
<?php
$arrayrappers = array('Jay-Z','Nas','Tupac','Weezy');
echo $arrayrappers[0];


?>








</body>

</html>