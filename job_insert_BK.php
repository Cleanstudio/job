<?php
    //เชื่อมต่อฐานข้อมูล
    require('connect/config.php');

    //รับค่าที่ส่งมาจากฟอร์มลงในตัวแปร
   $name=$_POST["name"]; 
   $sex= $_POST["sex"];
   $birthday= $_POST["birthday"];
   $agg= $_POST["agg"];
   $address= $_POST["address"];
   $tab= $_POST["tab"];
   $peo= $_POST["peo"];
   $wut= $_POST["wut"];
   $edu= $_POST["edu"];
   $skills= $_POST["skills"];
   $phone= $_POST["phone"];
   $positions= $_POST["positions"];
   $agree= $_POST["agree"];

   //บันทึกข้อมูล
   $sql = "INSERT INTO job_general(name,sex,birthday,agg,address,tab,peo,wut,edu,skills,phone,positions,agree) VALUES('$name','$sex','$birthday','$agg','$address','$tab','$peo','$wut','$edu','$skills','$phone','$positions','$agree')";

   $result=mysqli_query($con,$sql); //สั่งรันคำสั่ง sql

   if($result){

     // echo "บันทึกข้อมูลสำเร็จ";
     echo "<script> window.location='kwAlert.php' </script>";
     $_SESSION['success'] = "Successfully";
     
   }else{

        // echo mysqli_error($con);
        $_SESSION['error'] = "มีข้อผิดพลาดเกิดขึ้น!";

   }

   mysqli_close($con);

?>
