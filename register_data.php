<?php
    //เชื่อมต่อฐานข้อมูล
    require('connect/config.php');

    //รับค่าที่ส่งมาจากฟอร์มลงในตัวแปร
   $user_name=$_POST["user_name"]; 
   $password= $_POST["password"];
   $user_fname= $_POST["user_fname"];
   $user_lname= $_POST["user_lname"];
   $user_sex= $_POST["user_sex"];
   $user_email= $_POST["user_email"];

   //บันทึกข้อมูล
   $sql = "INSERT INTO users (user_name,password,user_fname,user_lname,user_sex,user_email) VALUES('$user_name','$password','$user_fname','$user_lname','$user_sex','$user_email')";

   $result=mysqli_query($con,$sql); //สั่งรันคำสั่ง sql

   if($result){

        echo "บันทึกข้อมูลสำเร็จ";
        header("Location: index.php");
        exit();

   }else{

        echo mysqli_error($con);

   }

?>