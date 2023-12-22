<!DOCTYPE html>
<html>
<head>
	<title>ลงทะเบียนสมาชิก</title>
	<link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
    <form class="form" action='register_data.php' method="POST">
      <fieldset>
          <h3>ลงทะเบียนสมาชิก</h3>        
        <div class="form-control">
          <!-- ชื่อผู้ใช้งาน -->
          <label class="form-label"  for="user_name">Username</label>
          <div class="form-control">
            <input type="text" id="user_name" name="user_name" require placeholder="" >
            <p class="help-block">ชื่อผู้ใช้สามารถมีตัวอักษรหรือตัวเลขใดก็ได้โดยไม่ต้องเว้นวรรค</p>
          </div>
        </div>
    
        <div class="form-control">
          <!-- Password-->
          <label class="form-label" for="password">รหัสผ่าน</label>
          <div class="form-control">
            <input type="password" id="password" name="password" require placeholder="" >
            <p class="help-block">กรุณาระบุอีเมล์ของคุณ</p>
          </div>
        </div>

        <div class="form-control">
          <!-- ชื่อ -->
          <label class="form-label" for="user_fname">ชื่อ</label>
          <div class="form-control">
            <input type="text" id="user_fname" name="user_fname" require placeholder="" >
            <p class="help-block">กรอกชื่อ โดยไม่ต้องใส่คำนำหน้าชื่อ</p>
          </div>
        </div>

        <div class="form-control">
          <!-- นามสกุล -->
          <label class="form-label" for="user_lname">นามสกุล</label>
          <div class="form-control">
            <input type="text" id="user_lname" name="user_lname" require placeholder="" >
            <p class="help-block">ใส่นามสกุลของท่าน</p>
          </div>
        </div>

        <div class="form-control">
          <!-- เพศ -->
          <label class="form-label" for="user_sex">เพศ</label>
          <div class="form-control">
            <input type="text" id="user_sex" name="user_sex" require placeholder="" >
            <p class="help-block">รหัสผ่านควรมีอย่างน้อย 4 ตัวอักษร</p>
          </div>
        </div>

        <div class="form-control">
          <!-- E-mail -->
          <label class="form-label" for="user_email">อีเมล์</label>
          <div class="form-control">
            <input type="email" id="user_email" name="user_email" require placeholder="" >
            <p class="help-block">กรอกอีเมล์ของท่าน</p>
          </div>
        </div>
    
        <div class="form-control">
          <!-- Button -->
          <div class="form-control">
            <button class="btn btn-success" <a href="register.php" onclick="return confirm('เราได้รับข้อมูลการสมัครสมาชิกของท่านแล้ว')">สมัครสมาชิก</a></button>
          </div>
        </div>
      </fieldset>
    </form>
	</div>
		<script src="assets/script.js"></script>
</body>
</html>


