<?php
$conn = mysqli_connect('localhost','root','','test');

$query = 'INSERT into registration(nickname,say) 
VALUE ("Testing","Hello World!")';

$result = mysqli_query($conn,$query);
if($result === false){
    echo mysqil_error($conn);
}




























?>