<?php
   session_start();
   header('location:index.php');
   $con=mysqli_connect('localhost','root','');
   mysqli_select_db($con,'dbms');
   $name=$_POST['Username'];
   $pass=$_POST['Password'];
   $phone=$_POST['Phone-no'];
   $s="select * from users where U_name='$name';";
   $result=mysqli_query($con,$s);
   $num=mysqli_num_rows($result);
   if($num==1)
   {
       echo "Username is already taken";
   }
   else{
       $registration="insert into users(U_name,U_passd,U_phn,Adm_id) values('$name','$pass',$phone,108);";
       mysqli_query($con,$registration);
       echo"Registration Successful";
   }
?>