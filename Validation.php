<?php
   session_start();
   $con=mysqli_connect('localhost','root','');
   mysqli_select_db($con,'dbms');
   $name=$_POST['Username'];
   $pass=$_POST['Password'];
   $s="select * from users where U_name='$name' && U_passd='$pass';";
   $result=mysqli_query($con,$s);
   $num=mysqli_num_rows($result);
   if($num==1)
   {
      header('location:home.php'); 
      echo "<h2>Successfully login<h2>";
   }
   else{
    header('location:index.php'); 
    echo "<h2>Wrong username or password<h2>";
   }
?>