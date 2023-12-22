<?php
    //เชื่อมต่อฐานข้อมูล
    require('connect/config.php');

    //รับค่าที่ส่งมาจากฟอร์มลงในตัวแปร
   $fname=$_POST["fname"]; 
   $lname= $_POST["lname"];

   //บันทึกข้อมูล
   $sql = "INSERT INTO employees(fname,lname) VALUES('$fname','$lname')";

   $result=mysqli_query($con,$sql); //สั่งรันคำสั่ง sql

   if($result){

        echo "บันทึกข้อมูลสำเร็จ";

   }else{

        echo mysqli_error($con);

   }

?>