<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บันทึกสำเร็จ</title>
    <!-- Bootstrap CSS -->
    <link href="assets/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="assets/dist/css/adminlte.min.css" rel="stylesheet">
    <script src="assets/dist/sweetalert2.all.min.js"></script>
</head>
<body>
    <div class="form-control">
        <h3><a href="index.php">กลับสู่หน้าสมัครสอบ</a></h3>
    </div>
<script>
    setTimeout(function() {
    Swal.fire({
  title: "บันทึกข้อมูลสำเร็จ!",
  text: "เราได้รับข้อมูลของท่านแล้ว ขอบคุณที่มาร่วมงานกับเรา?",
  icon: "success"
    }, function() {
    window.location = "index.php"; //หน้าที่ต้องการให้ลิงค์ไป        
    });
  }, 100);
    </script>
</body>
</html>
