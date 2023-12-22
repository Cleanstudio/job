<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<?php
//1. เชื่อมต่อ database:
include('connect/config.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_member:
$query = "SELECT * FROM job_position ORDER BY id asc" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
echo "<div class='container'>";
echo "<div class='row'>";
echo "<div class='col-md-8'>";
echo '<h4 align="center"> Display Data From database with foreach Loop </h4>';
echo "<table border='1' align='center' class='table table-hover'>";
  echo "
  <tr align='center' bgcolor='#CCCCCC'>
    <td>ตำแหน่งงาน</td>
    <td>อัตราเงินเดือน</td>
  </tr>";
  foreach( $result as $value ) {
  echo "<tr>";
    echo "<td>" .$value["position"] .  "</td> ";
    echo "<td>" .$value["pay"] .  "</td> ";
  echo "</tr>";
  }
echo "</table>";
//5. close connection
echo '<hr>';

?>
  <h2>
  Example Call Option Selected from database
</h2>
<form action="test.php" method="post" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-3  control-label">
      Column member_name :  
    </div>
    <div class="col-sm-3">
  <select name="position" class="form-control" required>
    <option value="">-Choose-</option>
    <?php foreach($result as $results){?>
    <option value="<?php echo $results["position"];?>">
      <?php echo $results["position"]; ?>
      </option>
    <?php } ?>
  </select>
</div>
<div class="col-sm-1">
  <button type="submit" class="btn btn-primary"> Action </button>
</div>
</form>
</div>
</div>
</div>

<?php 
mysqli_close($con);
?>