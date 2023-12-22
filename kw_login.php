<!DOCTYPE html>
<html>
<head>
	<title>ลงชื่อเข้าใช้</title>
	<link rel="stylesheet" href="assets/style.css">
</head>
<body>
	<div class="container">
     <form action="login_data.php" method="post" class="form">
     	<h2>สำหรับAdmin ลงชื่อเข้าใช้</h2>
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
         <div class="form-control">
     	<label class="form-lable">ชื่อผู้ใช้งาน</label>
     	<input type="text" name="uname" require placeholder="User Name">
		</div>

		<div class="form-control">
     	<label class="formlable">รหัสผ่าน</label>
     	<input type="password" name="password" require placeholder="Password">
		</div>

     	<button type="submit">เข้าสู่ระบบ</button>
     </form>
	</div>
		<script src="assets/script.js"></script>
</body>
</html>