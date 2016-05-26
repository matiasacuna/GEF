<?php
include('connection.php');
session_start();
$user_check=$_SESSION['mail_stud'];

$ses_sql = mysqli_query($db,"SELECT mail FROM users_student WHERE mail='$user_check' ");
$name_sql = mysqli_query($db,"SELECT name FROM users_student WHERE mail='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$row2=mysqli_fetch_array($name_sql,MYSQLI_ASSOC);
$login_user=$row['mail_stud'];
$name2=$row2['name'];

if(!isset($user_check))
{
header("Location: loginalumno.php");
}
?>