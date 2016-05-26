<?php
include('connection.php');
session_start();
$user_check=$_SESSION['mail_prof'];

$ses_sql = mysqli_query($db,"SELECT mail as mail_prof FROM users_professor WHERE mail='$user_check' ");
$name_sql = mysqli_query($db,"SELECT name FROM users_professor WHERE mail='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$row2=mysqli_fetch_array($name_sql,MYSQLI_ASSOC);
$login_user=$row['mail_prof'];
$name2=$row2['name'];

if(!isset($user_check))
{
header("Location: loginprofe.php");
}
?>