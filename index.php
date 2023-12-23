<?php
$email=$-request['email'];
$password=$-request['password'];
if(isset($-post['bntest])){
$host="localhost";
$user="root";
$password="";
$db="bookstore";

$conn=mysqii-connect($host,$user,$passward,$db);
$insert="insert into users values('$email','$password');
$mysqli-query($conn,insert);
if($conn){
echo("<h1 style=' color;green;'>your Registion is done!</h1>");}
else{
echo("<h1 style=' color;red;'>your Registion is faild!</h1>");
}
