<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Job Application Form</title>
</head>
<body>

<div class="container mt-5">
    <form action="job_data.php" method="post" enctype="multipart/form-data">
    <h4  align="left" class="btn btn-success">&nbsp;ตำแหน่งที่ท่านต้องการสมัคร</h4>
    <div class="mb-3">
                <lable for="positions" class="form-lable"><i class="fas fa-user-md"></i> ตำแหน่งที่ต้องการสมัคร</lable>
                <!-- <select name="positions" required> -->

                <?php
                    //1. เชื่อมต่อ database:
                    include('connect/config.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้านนี้
                    //2. query ข้อมูลจากตาราง tb_member:
                    $query = "SELECT * FROM job_position ORDER BY id asc" or die("Error:" . mysqli_error());
                    //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
                    $result = mysqli_query($con, $query);

                    foreach( $result as $value ) 
                    
                    ?>
                <select name="positions" class="form-control" required>
                    <option value="">-ตำแหน่งที่ต้องการสมัคร-</option>
                    <?php foreach($result as $results){?>
                    <option value="<?php echo $results["position"];?>">
                    <?php echo $results["position"]; ?>
                    </option>
                    <?php } ?>
                </select>
            </div>

        <h4  align="left" class="bg-success">&nbsp;ข้อมูลส่วนบุคคลของผู้สมัครสอบ</h4>
        <div class="mb-3">
            <label for="name" class="form-label">ชื่อ-สกุล :</label>
            <input type="text" class="form-control" id="name" name="name" required placeholder="กรอกชื่อ-นามสกุล">
        </div>

        <div class="mb-3">
        <lable for="sex" class="form-label"><i class="fas fa-transgender"></i> เพศ :</lable>
                <input type="radio" name="sex" value="ชาย" required >ชาย
                <input type="radio" name="sex" value="หญิง" required >หญิง
                <input type="radio" name="sex" value="อื่นๆ" required >อื่นๆ
        </div>

        <div class="mb-3">
            <label for="birthday" class="form-label">วัน/เดือน/ปีเกิด :</label>
            <input type="date" class="form-control" id="birthday" name="birthday" required>
        </div>

        <div class="mb-3">
            <label for="agg" class="form-label">อายุ :</label>
            <input type="text" class="form-control" id="agg" name="agg" required placeholder="กรอกอายุ">
        </div>

        <div class="mb-3">
        <lable for="status" class="form-lable"><i class="fas fa-clipboard-list"></i> สถานภาพ</lable>
                <select name="status" required>
                    <option value="">-กรุณาเลือกสถานะ-</option>
                    <option value="โสด">โสด</option>
                    <option value="สมรส">สมรส</option>
                    <option value="หย่าร้าง">หย่าร้าง</option>
                    <option value="แยกกันอยู่">แยกกันอยู่</option>
                </select>
        </div>

        <div class="mb-3">
        <label for="nationality" class="form-label"><i class="fas fa-flag"></i><strong><span class="color-asterisk">*</span>สัญชาติ :</strong></label>
                <input type="text" class="form-control" id="nationality" name="nationality" onkeypress="return isCharacterKey(event);" value="ไทย" readonly="">
        </div>

        <div class="mb-3">
        <label for="ethnicity" class="form-label"><i class="fas fa-archway"></i><strong><span class="color-asterisk">*</span>เชื้อชาติ :</strong></label>
                <input type="text" class="form-control" id="ethnicity" name="ethnicity" value="" onkeypress="return isCharacterKey(event);" required placeholder="ระบุเชื้อชาติ">
        </div>

        <div class="mb-3">
        <lable for="religion" class="form-lable"><i class="fas fa-clipboard-list"></i> ศาสนา</lable>
                <select name="religion" required>
                    <option value="">-กรุณาเลือก-</option>
                    <option value="พุทธ">พุทธ</option>
                    <option value="คริสต์">คริสต์</option>
                    <option value="อิสลาม">อิสลาม</option>
                    <option value="อื่นๆ">อื่นๆ</option>
                </select>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">ที่อยู่ :</label>
            <input type="text" class="form-control" id="address" name="address" required placeholder="กรอกที่อยู่ตามทะเบียนบ้าน">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">อีเมล์ผู้สมัคร :</label>
            <input type="email" class="form-control" id="email" name="email" required placeholder="กรอกที่อยู่อีเมล์">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">เบอร์โทรศัพท์ :</label>
            <input type="text" class="form-control" id="phone" name="phone" required placeholder="กรอกเบอร์โทรศัพท์">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">อัพโหลดภาพถ่าย </label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
            <span style="color:red;font-size:15px;"> (อัพโหลดภาพถ่ายหน้าตรงขนาด 1.5 นิ้ว)</span>
        </div>

        <h4  align="left" class="bg-success">&nbsp;ข้อมูลด้านการศึกษา</h4>

        <div class="mb-3">
        <lable for="edu" class="form-lable"><i class="fas fa-clipboard-list"></i> ระดับการศึกษา</lable>
                <select name="edu" required>
                    <option value="">-กรุณาเลือกระดับการศึกษา-</option>
                    <option value="มัธยมศึกษาตอนต้น">มัธยมศึกษาตอนต้น</option>
                    <option value="มัธยมศึกษาตอนปลาย">มัธยมศึกษาตอนปลาย</option>
                    <option value="ระดับ ปวช.">ระดับ ปวช.</option>
                    <option value="ระดับ ปวส.หรือเทียบเท่า">ระดับ ปวส.หรือเทียบเท่า</option>
                    <option value="ปริญญาตรี">ปริญญาตรี</option>
                    <option value="ปริญญาโท">ปริญญาโท</option>
                    <option value="ปริญญาเอก">ปริญญาเอก</option>
                </select>
        </div>

        <div class="mb-3">
            <label for="degree" class="form-label">ชื่อวุฒิการศึกษา :</label>
            <input type="text" class="form-control" id="degree" name="degree" required placeholder="เช่น วิทยาศาสตรบัณฑิต, บัญชีบัณฑิต ,สาขาอิเล็กทรอนิกส์">
        </div>

        <div class="mb-3">
            <label for="nameedu" class="form-label">ชื่อสถานศึกษา :</label>
            <input type="text" class="form-control" id="nameedu" name="nameedu" required placeholder="ระบุชื่อสถานศึกษา">
        </div>

        <div class="mb-3">
            <label for="ex" class="form-label">วันที่สำเร็จการศึกษา :</label>
            <input type="date" class="form-control" id="ex" name="ex" required >
            <span style="color:red;font-size:15px;"> (นับถึงวันที่ปิดรับสมัคร)</span>
        </div>

        <div class="mb-3">
            <label for="gpa" class="form-label">คะแนนเฉลี่ยสะสม :</label>
            <input type="text" class="form-control" id="gpa" name="gpa" required placeholder="ระบบเกรดเฉลี่ยสะสม">
        </div>

        <div class="mb-3">
            <label for="resume" class="form-label">Resume (PDF only)</label>
            <input type="file" class="form-control" id="resume" name="resume" accept=".pdf" required>
        </div>

        <div class="card mt-4">
                      <h4 aligh="left" class="bg-success">&nbsp;บุคคลที่สามารถติดต่อได้ในกรณีฉุกเฉิน</h4>
                      <div class="card-body">
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="personal"><strong><span class="color-asterisk">*</span>คำนำหน้า</strong></label>
                            <select class="custom-select" id="personal" name="personal" onchange="hide_validate(this.value,this.id);otherPrefix(this.value);">
                              <option value="" selected="selected">โปรดเลือก</option>
                              <option value="นาย">นาย</option>
                              <option value="นาง">นาง</option>
                              <option value="นางสาว">นางสาว</option>
                              <option value="อื่นๆ">อื่นๆ</option>                            
                            </select>
                          </div>
                          <div class="form-group col-md-4" id="div_personal_free_cols" style="display:none;"></div>
                          <div class="form-group col-md-4">
                            <label for="personal_firstname"><strong><span class="color-asterisk">*</span>ชื่อ</strong></label>
                            <input type="text" class="form-control" id="personal_firstname" name="personal_firstname" value="" maxlength="30" onkeypress="return isCharacterKey(event);">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="personal_surname"><strong><span class="color-asterisk">*</span>นามสกุล</strong></label>
                            <input type="text" class="form-control" id="personal_surname" name="personal_surname" value="" maxlength="30" onkeypress="return isCharacterKey(event);">
                          </div>
                        </div>
                        <div class="form-row">
                          
                          <div class="form-group col-md-4">
                            <label for="personal_relation"><strong><span class="color-asterisk">*</span>เกี่ยวข้องเป็น</strong></label>
                            <input type="text" class="form-control" id="personal_relation" name="personal_relation" onkeypress="return isCharacterKey(event);" maxlength="50" value="">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="personal_tel"><strong><span class="color-asterisk">*</span>โทรศัพท์</strong></label>
                            <input type="text" class="form-control" id="personal_tel" name="personal_tel" maxlength="10" onkeypress="return isNumberKey1(event)" onchange="sameNumber()" value="">
                            <span style="display: none;" id="personal_tel-error" class="error invalid-feedback">โปรดระบุหมายเลขโทรศัพท์อื่น</span>
                          </div>
                        </div>
                      </div>
                    </div>

        <div class="card-body">
                  <div class="form-row">
                    <div class="col-md-12" style="background-color:#FFFFFF;">
                      <div class="form-row mt-2">
                        <div class="col-md-12 mb-3">
                          <dv>
                            <label><span style="color: rgb(0, 0, 0);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1) ข้าพเจ้าขอรับรองว่า ข้อความดังกล่าวข้างต้นเป็นความจริงทุกประการ และข้าพเจ้าเป็นผู้มีคุณสมบัติครบถ้วนตามประกาศรับสมัครสอบหาก ปรากฎว่าเป็นความเท็จ หรือเอกสารหลักฐานใดไม่ถูกต้องครบถ้วน หรือไม่ปฎิบัติตามที่กองบัญชาการกองทัพไทย โดยคณะกรรมการดำเนินงานสอบฯกำหนด ให้ถือว่าข้าพเจ้าสละสิทธิ์ในการสอบครั้งนี้ และจะไม่เรียกร้องสิทธิ์ใดๆทั้งสิ้น และหากมีการปลอมแปลงเอกสารหลักฐานใดๆ ต่อเจ้าหน้าที่ ข้าพเจ้ายินยอมให้ทางราชการดำเนินคดีตามกฎหมาย</span><br><span style="color: rgb(0, 0, 0);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2) ข้าพเจ้าได้ศึกษาและทำความเข้าใจพระราชบัญญัติคุ้มครองข้อมูลส่วนบุคคล พ.ศ. 2562 ตลอดจนประกาศและระเบียบที่เกี่ยวข้องโดยละเอียดครบถ้วนแล้ว ข้าพเจ้าขอแสดงความยินยอมให้หน่วยงานหรือบุคคลที่เกี่ยวข้องกับการดำเนินการสรรหา สามารถเก็บ รวบรวม ใช้ และเปิดเผยข้อมูลส่วนบุคคลที่เกี่ยวข้องกับข้าพเจ้า เพื่อประโยชน์ของทางราชการตามกฎหมายที่เกี่ยวข้อง</span></label>
                          </dv>
                          <div class="custom-control custom-checkbox" align="center">
                            <br>
                            <input type="checkbox" class="custom-control-input" id="agree" name="agree" value="ยอมรับ" required>
                            <label class="custom-control-label" for="agree"><b>ข้าพเจ้าขอให้คำรับรองและแสดงความยินยอมตามเงื่อนไขทุกประการ</b></label>
                          </div>
                        </div>
                      </div>
                    </div>

        <!-- <button type="submit" class="btn btn-success">บันทึกข้อมูลการสมัคร</button> -->
        <div class="mb-3">
        <input type="submit" value="บันทึกขึ้มูล" class="btn btn-success" onclick="return confirm('ตรวจสอบความถูกต้องของข้อมูล และต้องการบันทึกข้อมูลใช่หรือไม่')">
                    &nbsp;<input type="reset" value="รีเซ็ตข้อมูล" class="btn btn-warning">
                    &nbsp;<a href="index.php" class="btn btn-danger">ยกเลิก</a>
                </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
