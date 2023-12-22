<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบ ข้อสอบออนไลน์</title>
    <!-- <link rel="stylesheet" href="intro.css"> -->
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body>
    <?php include 'connect/config.php';?>

    <?php
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $confirmpassword=$_POST['confirmpassword'];

        mysqli_query($connect, "INSERT INTO user (username, email, password, confirmpassword)
                                VALUES ('$username', '$email', '$password', '$confirmpassword')");
        if (mysqli_affected_rows($connect) > 0) {
            echo '<p>เพิ่มรายการสำเร็จ</p>';
            echo '<a href="index.php">กลับไปหน้าหลัก</a>';
        } else {
            echo 'ข้อมูลยังไม่ถูกเพิ่ม';
            echo mysqli_error($connect);
        }
    ?>

    <div class="wrapper">
        <form id="form" class="form">
            <h2>แบบฟอร์มลงทะเบียน</h2>
            <div class="wrapper">
                <label for="username">ชื่อผู้ใช้</label>
                <input type="text" name="" id="username" placeholder="Enter Your Username">
                <small>error message</small>
            </div>
            <div class="wrapper">
                <label for="email">อีเมล</label>
                <input type="text" name="" id="email" placeholder="Enter Your Email">
                <small>error message</small>
            </div>
            <div class="wrapper">
                <label for="password">รหัสผ่าน</label>
                <input type="password" name="" id="password" placeholder="Enter Your Password">
                <small>error message</small>
            </div>
            <div class="wrapper">
                <label for="password">ยืนยันรหัสผ่าน</label>
                <input type="password" name="" id="re-password" placeholder="Enter Your Re-Password">
                <small>error message</small>
            </div>
            <button type="submit">ลงทะเบียน</button>
        </form>
    </div>
    <!-- <script src="script.js"></script> -->
</body>
</html>