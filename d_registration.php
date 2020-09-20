<?php
   session_start();
   header('location:index.php');
   $con=mysqli_connect('localhost','root','');
   mysqli_select_db($con,'dbms');
   $name=$_POST['d_Username'];
   $avail=$_POST['a_time'];
   $phone=$_POST['d_phn'];
   $H_name=$_POST['H_name'];
    $id="select H_id from hospital where H_name ='$H_name';";
    $res=mysqli_query($con,$id);
    if (mysqli_num_rows($res) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($res)) {
            $h_id=$row['H_id'];
        }
    }

   $s="select * from ambulance where Ad_name='$name';";
   $result=mysqli_query($con,$s);
   $num=mysqli_num_rows($result);
   if($num==1)
   {
       echo "Username is already taken";
   }
   else{
       $d_registration="insert into ambulance(Ad_name,Hos_id,Ad_phnno,A_availtime,Adm_id,Us_id) values('$name','$h_id','$phone','$avail',161,10020);";
       mysqli_query($con,$d_registration);
       echo"Registration Successful";
   }
?>