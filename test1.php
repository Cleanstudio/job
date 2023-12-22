<div class="card mt-4">
                      <div class="card-header" style="background-color:#7781ea;">
                        <strong>
                          <h5 style="color: #FFFFFF;">ประวัติส่วนบุคคล</h5>
                        </strong>
                      </div>
                      <div class="card-body">
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="prefix"><strong><span class="color-asterisk">*</span>คำนำหน้า</strong></label>
                            <select class="custom-select" id="prefix" name="prefix" onchange="hide_validate(this.value,this.id);">
                              <option value="" selected="selected">โปรดเลือก</option><option value="นาย">นาย</option><option value="นาง">นาง</option><option value="นางสาว">นางสาว</option><option value="อื่นๆ">อื่นๆ</option>                            </select>
                          </div>
                          <div class="form-group col-md-4" id="div_prefix_oth" style="display:none">
                            <label for="prefix_oth"><strong><span class="color-asterisk">*</span><span>ระบุคำนำหน้า</span></strong></label>
                            <input type="text" class="form-control" id="prefix_oth" name="prefix_oth" value="" maxlength="30" onkeypress="return isCharacterKeys(event);" disabled="">
                          </div>
                          <div class="form-group col-md-4" id="div_free_cols" style="display:none"></div>
                          <div class="form-group col-md-4">
                            <label for="firstname"><strong><span class="color-asterisk">*</span>ชื่อ</strong></label>
                            <input type="text" class="form-control" id="firstname" name="firstname" value="" maxlength="30" onkeypress="return isCharacterKey(event);">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="surname"><strong><span class="color-asterisk">*</span>นามสกุล</strong></label>
                            <input type="text" class="form-control" id="surname" name="surname" value="" maxlength="30" onkeypress="return isCharacterKey(event);">
                          </div>
                        </div>
                                                <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="sex"><strong><span class="color-asterisk">*</span>เพศ</strong></label>
                            <input type="hidden" id="CheckGender" value="A">
                            <select class="custom-select" id="sex" name="sex">
                              <option value="" selected="selected">โปรดเลือก</option><option value="ชาย" id="men">ชาย</option><option value="หญิง" id="women">หญิง</option>                            </select>
                          </div>
                                                      <div class="form-group col-md-4">
                              <label for="nationality"><strong><span class="color-asterisk">*</span>สัญชาติ</strong></label>
                              <input type="text" class="form-control color-text" id="nationality" name="nationality" onkeypress="return isCharacterKey(event);" value="ไทย" readonly="">
                            </div>
                                                                                <div class="form-group col-md-4">
                              <label for="nationalism"><strong><span class="color-asterisk">*</span>เชื้อชาติ</strong></label>
                              <input type="text" class="form-control" id="nationalism" name="nationalism" value="" onkeypress="return isCharacterKey(event);">
                            </div>
                                                                                <div class="form-group col-md-4">
                              <label for="religion"><strong><span class="color-asterisk">*</span>ศาสนา</strong></label>
                              <select class="custom-select" id="religion" name="religion" onchange="CreateAttribute(this.value,this.id,1)">
                                <option value="" selected="selected">โปรดเลือก</option><option value="พุทธ">พุทธ</option><option value="อิสลาม">อิสลาม</option><option value="คริสต์">คริสต์</option><option value="อื่นๆ">อื่นๆ</option>                              </select>
                            </div>
                            <div class="form-group col-md-4" id="box_religion_oth" style="display:none;">
                              <label for="religion_oth"><strong><span class="color-asterisk">*</span><span>ระบุศาสนา</span></strong></label>
                              <input type="text" class="form-control" id="religion_oth" name="religion_oth" value="" maxlength="30" onkeypress="return isCharacterKeys(event);">
                            </div>
                                                                                <div class="form-group col-md-4">
                              <label for="status"><strong><span class="color-asterisk">*</span>สถานภาพ</strong></label>
                              <select class="custom-select" id="status" name="status">
                                <option value="" selected="selected">โปรดเลือก</option><option value="โสด">โสด</option><option value="สมรส">สมรส</option><option value="หย่าร้าง">หย่าร้าง</option><option value="ม่าย/หม้าย">ม่าย/หม้าย</option>                              </select>
                            </div>
                                                    <div class="form-group col-md-4">
                                                        <input type="hidden" id="AgeMin" name="AgeMin" value="18" readonly="">
                            <input type="hidden" id="AgeMax" name="AgeMax" value="35" readonly="">
                            <label for="dateofbirth"><strong><span class="color-asterisk">*</span>วันเกิด</strong>
                              <span style="color:red;font-size:15px;"> (อายุต้องไม่ต่ำกว่า 18 ปี และไม่เกิน 35 ปี)</span>
                            </label>
                            <input type="text" class="custom-select" data-provide="datepicker-rangedmy" data-date-language="th-th" id="dateofbirth" name="dateofbirth" placeholder="นับถึงวันที่ปิดรับสมัคร" value="" readonly="">
                            <div id="dob_invalid" class="invalid-feedback">อายุต้องไม่ต่ำกว่า 18 ปี และไม่เกิน 35 ปี</div>
                          </div>
                          <div class="form-group col-md-4">
                            <label for="CustomerID"><strong><span class="color-asterisk">*</span>เลขประจำตัวประชาชน</strong></label>
                            <input type="text" class="form-control" id="CustomerID" name="CustomerID" placeholder="X-XXXX-XXXXX-XX-X" value="">
                            <div id="CusID-valid" class="valid-feedback" style="font-size:16px;">เลขประจำตัวประชาชนถูกต้อง</div>
                          </div>
                                                                                <div class="form-group col-md-4">
                              <label for="card_amphur"><strong><span class="color-asterisk">*</span>ออกให้ ณ อำเภอ/เขต</strong></label>
                              <input type="text" class="form-control" id="card_amphur" name="card_amphur" value="" maxlength="50" onkeypress="return isTrapSpecialKey(event);">
                            </div>
                                                                                <div class="form-group col-md-4">
                              <label for="card_province"><strong><span class="color-asterisk"></span>ออกให้ ณ จังหวัด</strong></label>
                              <select class="js-example-basic-single form-control select2-hidden-accessible" style="width:100%;" id="card_province" name="card_province" onchange="card_province_validate()" data-select2-id="select2-data-card_province" tabindex="-1" aria-hidden="true"><option value="" id="0" selected="" data-select2-id="select2-data-0">โปรดเลือก</option><option value="กรุงเทพมหานคร" id="1">กรุงเทพมหานคร</option><option value="กระบี่" id="2">กระบี่</option><option value="กาญจนบุรี" id="3">กาญจนบุรี</option><option value="กาฬสินธุ์" id="4">กาฬสินธุ์</option><option value="กำแพงเพชร" id="5">กำแพงเพชร</option><option value="ขอนแก่น" id="6">ขอนแก่น</option><option value="จันทบุรี" id="7">จันทบุรี</option><option value="ฉะเชิงเทรา" id="8">ฉะเชิงเทรา</option><option value="ชลบุรี" id="9">ชลบุรี</option><option value="ชัยนาท" id="10">ชัยนาท</option><option value="ชัยภูมิ" id="11">ชัยภูมิ</option><option value="ชุมพร" id="12">ชุมพร</option><option value="เชียงใหม่" id="13">เชียงใหม่</option><option value="เชียงราย" id="14">เชียงราย</option><option value="ตรัง" id="15">ตรัง</option><option value="ตราด" id="16">ตราด</option><option value="ตาก" id="17">ตาก</option><option value="นครนายก" id="18">นครนายก</option><option value="นครปฐม" id="19">นครปฐม</option><option value="นครพนม" id="20">นครพนม</option><option value="นครราชสีมา" id="21">นครราชสีมา</option><option value="นครศรีธรรมราช" id="22">นครศรีธรรมราช</option><option value="นครสวรรค์" id="23">นครสวรรค์</option><option value="นนทบุรี" id="24">นนทบุรี</option><option value="นราธิวาส" id="25">นราธิวาส</option><option value="น่าน" id="26">น่าน</option><option value="บึงกาฬ" id="27">บึงกาฬ</option><option value="บุรีรัมย์" id="28">บุรีรัมย์</option><option value="ปทุมธานี" id="29">ปทุมธานี</option><option value="ประจวบคีรีขันธ์" id="30">ประจวบคีรีขันธ์</option><option value="ปราจีนบุรี" id="31">ปราจีนบุรี</option><option value="ปัตตานี" id="32">ปัตตานี</option><option value="พระนครศรีอยุธยา" id="33">พระนครศรีอยุธยา</option><option value="พะเยา" id="34">พะเยา</option><option value="พังงา" id="35">พังงา</option><option value="พัทลุง" id="36">พัทลุง</option><option value="พิจิตร" id="37">พิจิตร</option><option value="พิษณุโลก" id="38">พิษณุโลก</option><option value="เพชรบุรี" id="39">เพชรบุรี</option><option value="เพชรบูรณ์" id="40">เพชรบูรณ์</option><option value="แพร่" id="41">แพร่</option><option value="ภูเก็ต" id="42">ภูเก็ต</option><option value="มหาสารคาม" id="43">มหาสารคาม</option><option value="มุกดาหาร" id="44">มุกดาหาร</option><option value="แม่ฮ่องสอน" id="45">แม่ฮ่องสอน</option><option value="ยโสธร" id="46">ยโสธร</option><option value="ยะลา" id="47">ยะลา</option><option value="ร้อยเอ็ด" id="48">ร้อยเอ็ด</option><option value="ระนอง" id="49">ระนอง</option><option value="ระยอง" id="50">ระยอง</option><option value="ราชบุรี" id="51">ราชบุรี</option><option value="ลพบุรี" id="52">ลพบุรี</option><option value="ลำปาง" id="53">ลำปาง</option><option value="ลำพูน" id="54">ลำพูน</option><option value="เลย" id="55">เลย</option><option value="ศรีสะเกษ" id="56">ศรีสะเกษ</option><option value="สกลนคร" id="57">สกลนคร</option><option value="สงขลา" id="58">สงขลา</option><option value="สตูล" id="59">สตูล</option><option value="สมุทรปราการ" id="60">สมุทรปราการ</option><option value="สมุทรสงคราม" id="61">สมุทรสงคราม</option><option value="สมุทรสาคร" id="62">สมุทรสาคร</option><option value="สระแก้ว" id="63">สระแก้ว</option><option value="สระบุรี" id="64">สระบุรี</option><option value="สิงห์บุรี" id="65">สิงห์บุรี</option><option value="สุโขทัย" id="66">สุโขทัย</option><option value="สุพรรณบุรี" id="67">สุพรรณบุรี</option><option value="สุราษฎร์ธานี" id="68">สุราษฎร์ธานี</option><option value="สุรินทร์" id="69">สุรินทร์</option><option value="หนองคาย" id="70">หนองคาย</option><option value="หนองบัวลำภู" id="71">หนองบัวลำภู</option><option value="อ่างทอง" id="72">อ่างทอง</option><option value="อำนาจเจริญ" id="73">อำนาจเจริญ</option><option value="อุดรธานี" id="74">อุดรธานี</option><option value="อุตรดิตถ์" id="75">อุตรดิตถ์</option><option value="อุทัยธานี" id="76">อุทัยธานี</option><option value="อุบลราชธานี" id="77">อุบลราชธานี</option></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-1-lzt1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-card_province-container" aria-controls="select2-card_province-container"><span class="select2-selection__rendered" id="select2-card_province-container" role="textbox" aria-readonly="true" title="โปรดเลือก">โปรดเลือก</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                              <input type="hidden" name="province_session" id="province_session" value="">
                              <div id="card_province-valid" class="invalid-feedback" style="font-size: 16px;">โปรดเลือกจังหวัดที่ออกให้</div>
                            </div>
                                                    <!-- </div>
                        <div class="form-row"> -->
                                                  </div>
                        <div class="form-row" id="RelSoldierBox" style="display:none;">
                          <div class="form-group col-md-4">
                            <label for="RelSoldier"><strong>การรับราชการทหาร</strong></label>
                            <select class="custom-select" id="RelSoldier" name="RelSoldier" required="" onchange="soldier_reason()" disabled="">
                              <option value="" selected="selected">โปรดเลือก</option><option value="ผ่านเกณฑ์ทหารแล้ว">ผ่านเกณฑ์ทหารแล้ว</option><option value="จบวิชารักษาดินแดน">จบวิชารักษาดินแดน</option><option value="ได้รับการยกเว้น">ได้รับการยกเว้น</option><option value="รอรับการคัดเลือก">รอรับการคัดเลือก</option>                            </select>
                          </div>
                          <div class="form-group col-md-4 d-none" id="box-SoldierReason">
                            <label for="SoldierReason"><strong><span class="color-asterisk">*</span>เนื่องจาก</strong></label>
                            <input type="hidden" id="s2_validate19" value="1">
                            <input type="text" class="form-control" id="SoldierReason" name="SoldierReason" value="" maxlength="50" required="">
                          </div>
                          <div class="form-group col-md-8"></div>
                        </div>
                      </div>
                                          </div>