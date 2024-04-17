<?php
$con=mysqli_connect('localhost','root');
if($con){
    echo 'Connection successful';
}else{
    echo 'no connection';
}
mysqli_select_db($con,'userdata');
$user=$_POST['user'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$comment=$_POST['comment'];

$query="insert into userdata (user,email,phone,comment) values('$user','$email','$phone','$comment')";

mysqli_query($con,$query);
header('location:index.php');

?>