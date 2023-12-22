<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บันทึกข้อมูลพนักงาน</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3 class="text-center my-3">แบบฟอร์มข้อมูล</h3>
        <form action="insertdata.php" method="POST">
            <div class="form-group">
                <lable for="firstname">ชื่อพนักงาน</lable>
                <input type="text" name="fname" id="" class="form-control">
            </div>

            <div class="form-group">
                <lable for="lasname">นามสกุลพนักงาน</lable>
                <input type="text" name="lname" id="" class="form-control">
            </div>
            
            <input type="submit" value="บันทึกขึ้มูล" class="btn btn-success">
            <input type="reset" value="รีเซ็ตข้อมูล" class="btn btn-danger">
            <a href="index.php" class="btn btn-primary">กลับสู่หน้าหลัก</a>
        </form>
    </div>
    
</body>
</html>