<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="assets/style.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <br>
<div class="container">

        <!-- <a href="index.php" class="text-center"><img src="assets/img/kwtlogo.png" alt="" class="img-fluid"></a> -->
            <h4  align="left" class="bg-success">&nbsp;ข้อมูลส่วนบุคคลของผู้สมัครสอบ</h4><br>

        <!-- <h3 class="text-center my-4">แบบฟอร์มสมัครสอบ รพ.ค่ายวีรวัฒน์โยธิน</h3> -->
<form action="job_insert.php" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
                <lable for="names" class="col-sm-2" ><i class="fas fa-address-card"></i> ชื่อ-สกุล</lable>
                <div class="col-sm-4">
                <input type="text" name="name" id="" class="form-control" required placeholder="กรอกชื่อ-สกุล ใส่คำนำหน้าชื่อ เช่น น.ส. ก,นาย ข">
                </div>
            </div>

            <div class="form-group row">
                <lable for="sex" class="col-sm-2"><i class="fas fa-transgender"></i> เพศ</lable>
                <div class="col-sm-4">
                <input type="radio" name="sex" value="ชาย">ชาย
                <input type="radio" name="sex" value="หญิง">หญิง
                <input type="radio" name="sex" value="อื่นๆ">อื่นๆ
                </div>
            </div>

            <div class="form-group row">
                <label for="nationality" class="col-sm-2"><i class="fas fa-flag"></i><strong><span class="color-asterisk">*</span>สัญชาติ</strong></label>
                <div class="col-sm-4">
                <input type="text" class="form-control color-text" id="nationality" name="nationality" onkeypress="return isCharacterKey(event);" value="ไทย" readonly="">
                </div>
            </div>

            <div class="form-group row">
                <label for="nationalism" class="col-sm-2"><i class="fas fa-archway"></i><strong><span class="color-asterisk">*</span>เชื้อชาติ</strong></label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="nationalism" name="nationalism" value="" onkeypress="return isCharacterKey(event);" required placeholder="ระบุเชื้อชาติ">
                </div>
            </div>

            <div class="form-group row">
                <lable for="edu" class="col-sm-2"><i class="fas fa-clipboard-list"></i> ศาสนา</lable>
                <div class="col-sm-4">
                <select name="edu" required>
                    <option value="">-กรุณาเลือก-</option>
                    <option value="พุทธ">พุทธ</option>
                    <option value="คริสต์">คริสต์</option>
                    <option value="อิสลาม">อิสลาม</option>
                    <option value="อื่นๆ">อื่นๆ</option>
                </select>
                </div>
            </div>

            <div class="form-group row">
                <lable for="birthday" class="col-sm-2"><i class="fas fa-calendar-alt"></i> วัน-เดือน-ปีเกิด</lable>
                <div class="col-sm-4">
                <input type="date" name="birthday" id="" class="form-control" required placeholder="ระบุวัน/เดือน/ปีเกิด">
                </div>
            </div>
            
            <div class="form-group row">
                <lable for="agg" class="col-sm-2"><i class="fas fa-birthday-cake"></i> อายุ</lable>
                <div class="col-sm-4">
                <input type="text" name="agg" id="" class="form-control" required placeholder="กรอกอายุ">
                <span style="color:red;font-size:15px;"> (อายุต้องไม่ต่ำกว่า 18 ปี และไม่เกิน 35 ปี)</span>
                </div>
            </div>

            <div class="form-group row">
                <lable for="edu" class="col-sm-2"><i class="fas fa-clipboard-list"></i> สถานภาพ</lable>
                <div class="col-sm-4">
                <select name="edu" required>
                    <option value="">-กรุณาเลือกสถานะ-</option>
                    <option value="โสด">โสด</option>
                    <option value="สมรส">สมรส</option>
                    <option value="หย่าร้าง">หย่าร้าง</option>
                    <option value="แยกกันอยู่">แยกกันอยู่</option>
                </select>
                </div>
            </div>

            <div class="form-group row">
                <lable for="address" class="col-sm-2"><i class="fas fa-map-marked-alt"></i> ที่อยู่ตามทะเบียนบ้าน</lable>
                <div class="col-sm-4">
                <input type="text" name="address" id="" class="form-control" required placeholder="กรอกที่อยู่ตามทะเบียนบ้าน">
                </div>
            </div>

            <div class="form-group row">
                <lable for="names" class="col-sm-2" ><i class="fas fa-address-card"></i> เลขประจำตัวประชาชน</lable>
                <div class="col-sm-4">
                <input type="text" name="name" id="" class="form-control" required placeholder="X-XXXX-XXXXX-XX-X">
                </div>
            </div>

            <div class="form-group row">
                <lable for="names" class="col-sm-2" ><i class="fas fa-address-card"></i> ออกให้ ณ อำเภอ/เขต</lable>
                <div class="col-sm-4">
                <input type="text" name="name" id="" class="form-control" required placeholder="อำเภอ/เขต ที่ออกบัตร">
                </div>
            </div>

            <div class="form-group row">
                <lable for="names" class="col-sm-2" ><i class="fas fa-address-card"></i> ออกให้ ณ จังหวัด</lable>
                <div class="col-sm-4">
                <input type="text" name="name" id="" class="form-control" required placeholder="กรอกจังหวัดที่ออกบัตรให้">
                </div>
            </div>

            <div class="form-group row">
                <lable for="tab" class="col-sm-2"><i class="fas fa-map-marker-alt"></i> สำเนาทะเบียนบ้าน</lable>
                <div class="col-sm-4">
                <input type="file" name="tab" id="" class="form-control" required placeholder="สำเนาทะเบียนบ้าน" accept="application/pdf">
                </div>
            </div>

            <div class="form-group row">
                <lable for="peo" class="col-sm-2"><i class="fas fa-address-card"></i> สำเนาบัตรประชาชน</lable>
                <div class="col-sm-4">
                <input type="file" name="peo" id="" class="form-control" required placeholder="สำเนาบัตรประชาชน" accept="application/pdf">
                </div>
            </div>

            <h4  align="left" class="bg-success">&nbsp;ข้อมูลทางการศึกษา</h4><br>

            <div class="form-group row">
                <lable for="wut" class="col-sm-2"><i class="fas fa-university"></i> สำเนาวุฒิการศึกษา</lable>
                <div class="col-sm-4">
                <input type="file" name="wut" id="" class="form-control" required placeholder="สำเนาวุฒิการศึกษา" accept="application/pdf">
                </div>
            </div>

            <div class="form-group row">
                <lable for="edu" class="col-sm-2"><i class="fas fa-clipboard-list"></i> ระดับการศึกษา</lable>
                <div class="col-sm-4">
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
            </div>

            <div class="form-group row">
                <lable for="phone" class="col-sm-2"><i class="fas fa-mobile-alt"></i> เบอร์โทรที่สามารถติดต่อได้</lable>
                <div class="col-sm-4">
                <input type="text" name="phone" id="" class="form-control" required placeholder="เบอร์โทรศัพท์ที่สามารถติดต่อได้"><br>
                </div>
            </div>

            <div class="form-group row">
                <lable for="positions" class="col-sm-2"><i class="fas fa-user-md"></i> ตำแหน่งที่ต้องการสมัคร</lable>
                <div class="col-sm-4">
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
            </div>

            <div class="form-group row">
                <lable for="skills" class="col-sm-2"><i class="fas fa-arrows-alt"></i> ความสมารถพิเศษ</lable>
                <div class="col-sm-4">
                <input type="text" name="skills" id="" class="form-control" required placeholder="ความสมารถพิเศษ"><br>
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
      

                    <input type="submit" value="บันทึกขึ้มูล" class="btn btn-success" onclick="return confirm('ตรวจสอบความถูกต้องของข้อมูล และต้องการบันทึกข้อมูลใช่หรือไม่')">
                    &nbsp;<input type="reset" value="รีเซ็ตข้อมูล" class="btn btn-warning">
                    &nbsp;<a href="index.php" class="btn btn-primary">ยกเลิก</a>
                </div>
            </div>
            
    </div>
</form>   

<?php 
mysqli_close($con);
?>

</body>
</html>