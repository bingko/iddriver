<div class='alert alert-success' style="display:none">สมัครเรียนเสร็จสมบูรณื</div>
<section id="content" style="background:transparent">
    <div class="container" style="">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">ข้อมูลผู้สมัคร</h3>
                    </div>
                    <div class="panel-body">
                        <?php $id=array( 'id'=> 'registerform','novalidate'=>'true'); echo form_open_multipart('main/view_register',$id); ?>
                        <div class="form-group">
                            <label for="usr">หลักสูตร</label>
                            <select name='course' class="form-control" id='courseselect'>
                                   <option value="1">ใบอนุญาตรถยนต์</option>
                                   <option value="2">ใบอนุญาตรถจักรยายนต์</option>
                                   <option value="3">ใบอนุญาตรถขนส่งบรรทุก</option>
                                   <option value="4">ใบอนูญาติรถลากจูง </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>เลขบัตรประจำตัวประชาชน:</label>
                            <input type="text" name='citizenID' class="form-control" required>
                            <label>ชื่อ (Firstname):</label>
                            <input type="text" name='firstname' class="form-control" required>
                            <label>นามสกุล (Lastname):</label>
                            <input type="text" name='lastname' class="form-control" required>
                            <label>ที่อยู่ (Address):</label>
                            <textarea name='address' class="form-control" required></textarea>

                            <label>Email:</label>
                            <input type="text" name='email' class="form-control" required>
                            <label>เบอร์โทรศัพท์ (Phone No.):</label>
                            <input type="text" name='phoneNumber' class="form-control">
                            <label>โทรศัพท์มือถือ (Mobile No.):</label>
                            <input type="text" name='mobileNumber' class="form-control" required>
                            <h3>เอกสารที่ต้องใช้</h3>
                            <label for="usr">สำเนาบัตรประชาชน</label>
                            <input type="file" name="files[]" class="file" data-preview-file-type="text" required>
                            <label for="usr">รูปถ่าย</label>
                            <input type="file" name="files[]" class="file" data-preview-file-type="text" required>

                                </div>

                                <?php //$this->captcha->create_captcha(); ?>
                            <label for="usr">โปรดกรอกรหัสด้านบน</label>
                                <input type="text" name="captcha" class="form-control" value="" />
                             <div class="row">
                                <div class="col-md-12">
                            <button class="btn btn-theme margintop10 pull-left" type="submit"> สมัครเรียน</button></div>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-xs-12 courseDetail" id="courseDetailList1" style="display:none">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">ใบอนุญาตรถยนต์</h3>
                    </div>
                    <div class="panel-body">

                        <div class="col-xs-12">
                            <img src="<?php echo base_url();?>/img/DSC_5333.jpg" alt="">
                        </div>
                        <div class="col-xs-12">
                            <p><b>อบรมทฤษฏี 5 ชม.</b></p>
                            <p>- วิชา กฎหมายจราจร-กฎหมายเกี่ยวข้องต่างๆ 2 ชั่วโมง</p>
                            <p>- วิชา เทคนิคขับขี่ปลอดภัย-พร้อมแก้ไขสถานการณ์ 1 ชั่วโมง</p>
                            <p>- วิชา มารยาทการขับขี่และดูแลบำรุงรักษารถ-พร้อมแก้ไขเบื้องต้น 2 ชั่วโมง</p>
                            <p><b>ฝึกภาคปฏิบัติ 10 ชม.</b></p>
                            <p>สอนขับด้วยครูฝึก(ที่ได้รับใบอนุญาตจากกรมการขนส่งทางบก) ครั้งละ 2 ชั่วโมง</p>
                            <p>รวม รถยนต์-ค่าน้ำมัน-ครูฝึก-สนามฝึก เป็นของสถาบันไอดี ไดรฟเวอร์</p>
                            <p><b>มีติวเตอร์ทั้งภาคทฤษฏี – ปฏิบัติ</b></p>
                            <p>- ให้ผู้เรียนใช้รถฝึกขับ PC ภายในห้อง ได้ฟรีฝึกทำข้อสอบจริง ด้วยระบบE-examที่ทันสมัยก่อนครูฝึกจะรับลงสนามฝึกขับรถจริง</p>
                            <hr>
                            <h3>15 ชม. / ราคา 5,300 บาท</h3>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-8 col-xs-12 courseDetail" id="courseDetailList2" style="display:none">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">ใบอนุญาตรถจักรยายนต์</h3>
                    </div>
                    <div class="panel-body">

                        <div class="col-xs-12">
                            <img src="<?php echo base_url();?>/img/DSC_5488.jpg" alt="">
                        </div>
                        <div class="col-xs-12">
                             <p>- <b>อบรมทฤษฏี 5 ชม.</b></p>
                            <p>- วิชา กฎหมายจราจร-กฎหมายเกี่ยวข้องต่างๆ 2 ชั่วโมง</p>
                            <p>- วิชา เทคนิคขับขี่ปลอดภัย-พร้อมแก้ไขสถานการณ์ 1 ชั่วโมง</p>
                            <p>- วิชา มารยาทการขับขี่และดูแลบำรุงรักษารถ-พร้อมแก้ไขเบื้องต้น 2 ชั่วโมง</p>
                            <p>- <b>ฝึกภาคปฏิบัติ 10 ชม.</b></p>
                            <p>สอนขับด้วยครูฝึก(ที่ได้รับใบอนุญาตจากกรมการขนส่งทางบก) ครั้งละ 2 ชั่วโมง</p>
                            <p>รวม รถยนต์-ค่าน้ำมัน-ครูฝึก-สนามฝึก เป็นของสถาบันไอดี ไดรฟเวอร์</p>
                            <p><b>มีติวเตอร์ทั้งภาคทฤษฏี</b></p>
                            <p>- ฝึกทำข้อสอบจริง ด้วยระบบE-examที่ทันสมัยก่อนครูฝึกจะรับลงสนามฝึกขับรถจริง</p>                            <hr>
                            <h3>15 ชม. / ราคา 2,500 บาท</h3>
                        </div>
                      

                    </div>
                </div>
            </div>
            <div class="col-md-8 col-xs-12 courseDetail" id="courseDetailList3" style="display:none">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">ใบอนุญาตรถขนส่งบรรทุก</h3>
                    </div>
                    <div class="panel-body">

                        <div class="col-xs-12">
                            <img src="<?php echo base_url();?>/img/DSC_5388.jpg" alt="">
                        </div>
                        <div class="colxs-12">
                            <p>อบรมทฤษฏีพร้อมปฏิบัติ </p>
                            <p><b>หลักฐานประกอบการสมัคร</b></p>
                            <p>1. สำเนาบัตรประชาชน4 ฉบับ (ใช้คัดประวัติด้วย)</p>
                            <p>2. สำเนาทะเบียนบ้าน 4 ฉบับ (ใช้คัดประวัติด้วย)</p>
                            <p>3. ใบรับรองแพทย์ (ตัวจริง) 1 ฉบับ ออกให้ไม่เกิน 30 วัน</p>
                            <p>4. รูปถ่ายขนาด 1 นิ้ว 6 รูป (ไม่สวมหมวก)</p>
                            <p>5. สำเนาใบขับขี่ส่วนบุคคล 1 ฉบับ</p>
                            <p><b>คุณสมบัติของผู้สมัครเรียน</b></p>
                            <p>1. อายุ 18 ปี บริบูรณ์ขึ้นไป</p>
                            <p>2. มีใบอนุญาตขับขี่รถยนต์ส่วนบุคคลแล้ว</p>
                            <p><b>มีติวเตอร์ทั้งภาคทฤษฏี</b></p>
                            <p>- ฝึกทำข้อสอบจริง ด้วยระบบE-examที่ทันสมัยก่อนครูฝึกจะรับลงสนามฝึกขับรถจริง</p>                            <hr>
                            <h3>ราคา 1,800 บาท</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-xs-12 courseDetail" id="courseDetailList4" style="display:none">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">ใบอนูญาติรถลากจูง</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-xs-12">
                            <img src="<?php echo base_url();?>/img/DSC_5333.jpg" alt="">
                        </div>
                        <div class="col-xs-12">
                                                    <p>อบรมทฤษฏีพร้อมปฏิบัติ </p>

                        <p><b>หลักฐานประกอบการสมัคร</b></p>

                        <p>1. สำเนาบัตรประชาชน4 ฉบับ (ใช้คัดประวัติด้วย)</p>

                        <p>2. สำเนาทะเบียนบ้าน 4 ฉบับ (ใช้คัดประวัติด้วย)</p>

                        <p>3. ใบรับรองแพทย์ (ตัวจริง) 1 ฉบับ ออกให้ไม่เกิน 30 วัน</p>

                        <p>4. รูปถ่ายขนาด 1 นิ้ว 6 รูป (ไม่สวมหมวก)</p>

                        <p>5. สำเนาใบขับขี่ส่วนบุคคล 1 ฉบับ</p>

                        <p><b>คุณสมบัติของผู้สมัครเรียน</b></p>

                        <p>1. อายุ 18 ปี บริบูรณ์ขึ้นไป</p>

                        <p>2. มีใบอนุญาตขับขี่รถยนต์ส่วนบุคคลแล้ว</p>

                        <p><b>มีติวเตอร์ทั้งภาคทฤษฏี</b></p>

                        <p>- ฝึกทำข้อสอบจริง ด้วยระบบE-examที่ทันสมัยก่อนครูฝึกจะรับลงสนามฝึกขับรถจริง</p>                            <hr>
                        <h3>ราคา 3,600 บาท</h3>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>

</section>

<style>
    h4 {
        color: black !important;
        text-decoration: underline;
    }
    
    h3 {
        color: #FF5F0B;
        border-bottom: 1px solid orange;
    }
    
    label {
        font-size: 18px;
    }
    
    .courseDetail {
        color: black;
    }
</style>

<script>
	var course='<?php echo $this->uri->segment(3)?>';
    $('#courseDetailList1').show("drop");
		if (course == 1) {
			$('.courseDetail').hide();
            $('#courseDetailList1').show("drop");
			$('select[name = course] option[value=1]').prop('selected',true);
        }
        if (course == 2) {
			$('.courseDetail').hide();
            $('#courseDetailList2').show("drop");
			$('select[name = course] option[value=2]').prop('selected',true);
        }
        if (course == 3) {
			$('.courseDetail').hide();
            $('#courseDetailList3').show("drop");
			$('select[name = course] option[value=2]').prop('selected',true);
        }
        if (course== 4) {
			$('.courseDetail').hide();
            $('#courseDetailList4').show("drop");
			$('select[name = course] option[value=3]').prop('selected',true);
        }
        if (course == 5) {
			$('.courseDetail').hide();
            $('#courseDetailList5').show("drop");
			$('select[name = course] option[value=4]').prop('selected',true);
        }
        if (course == 6) {
			$('.courseDetail').hide();
            $('#courseDetailList6').show("drop");
			$('select[name = course] option[value=5]').prop('selected',true);
        }

    if ('<?php echo $this->uri->segment(3);?>' == 'success') {
        $('.alert-success').show('drop')
    }
    $('#courseselect').on('change', function() {
			$('.courseDetail').hide();
			if (this.value == 1) {
				$('#courseDetailList1').show("drop");
			}
			if (this.value == 2) {
				$('#courseDetailList2').show("drop");
			}
			if (this.value == 3) {
				$('#courseDetailList3').show("drop");
			}
			if (this.value == 4) {
				$('#courseDetailList4').show("drop");
			}
			if (this.value == 5) {
				$('#courseDetailList5').show("drop");
			}
			if (this.value == 6) {
				$('#courseDetailList6').show("drop");
			}
    });
// $('form').submit(function(event){
//       if(!this.checkValidity())
//         {
//             event.preventDefault();
//         }
//         else{
//             event.preventDefault();
//   var id=$('input[name=citizenID]').val();
//   var name=$('input[name=firstname]').val();
//   var lastname=$('input[name=lasttname]').val();
//   var address=$('textarea[name=address]').val();
//   var email=$('input[name=email]').val();
//   var course = $('select option:selected').text();
//   $('#usrid').text(id);
//   $('#cid').text(course);
//   $('#fname').text(name+' '+lastname );
//   $('#email').text(email);
//   $('#address').text(address);
//   $('#telephone').text();
//   $('#preview_image').html($('.file-preview-frame img'));
//   $('#myModal').modal();
// }
// });
// var confirm_register=function(){
//     $('form').submit();
// }
</script>
</body>
<style>
    body {
        background: url(<?php echo base_url();?>/img/DSC_5385.jpg) no-repeat center fixed;
    background-repeat: no-repeat;
    background-size: 100% 100%;

    }
    
    h3 {
        border-bottom: none;
    }
    .panel{
        background-color: rgba(255,255,255,0.96);
    }
    .panel-heading{
          color: #FFF !important;
  background-color: #363636 !important;
  border-color: #FFF;
    }
</style>

</html>