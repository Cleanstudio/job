<?php
    //เชื่อมต่อฐานข้อมูล
    require('config.php');

    //รับค่าที่ส่งมาจากฟอร์มลงในตัวแปร
   $fname=$_POST["fname"]; 
   $lname= $_POST["lname"];
   $sex= $_POST["sex"];
   $agg= $_POST["agg"];
   $edu= $_POST["edu"];
   $skill= $_POST["skill"];

   //บันทึกข้อมูล
   $sql = "INSERT INTO employees(fname,lname,sex,agg,edu,skill) VALUES('$fname','$lname','$sex','$agg','$edu','$skill')";

   $result=mysqli_query($con,$sql); //สั่งรันคำสั่ง sql

   if($result){

     // echo "บันทึกข้อมูลสำเร็จ";
     $_SESSION['success'] = "เราได้รับข้อมูลของท่านเรียบร้อยแล้ว ขอบคุณที่ร่วมสมัครงานกับเรา";
     header("location:admin.php");

   }else{

        echo mysqli_error($con);

   }

?>