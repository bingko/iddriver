<section id="content" style="background:url(<?php echo base_url()?>/img/bg_contact.jpg); background-size:cover">
    <div class="container">

        <div class="row" id="preview" style="background:rgba(255,255,255,0.8) !important">
          <div class="col-md-6">
            
    <?php echo form_open_multipart('main/add_register'); ?>
          <div class="col-md-8">
          <h3>หลักสูตร
              <select name='course' class="form-control" id='courseselect'>
                 <option value="1">ใบอนุญาตรถยนต์</option>
                 <option value="2">ใบอนุญาตรถจักรยายนต์</option>
                 <option value="3">ใบอนุญาตรถขนส่งบรรทุก</option>
                 <option value="4">ใบอนูญาติรถลากจูง </option>
              </select>
                          </h3>
          <h3>เลขบัตรประชาชน <input name='citizenID' class="form-control" type="text" value="<?php echo $detail['citizenID'] ?>"/></h3>
          <h3>ชื่อ <input name='firstname' class="form-control" type="text" value="<?php echo $detail['firstname'] ?>"/></h3>
          <h3>นามสกุล <input name='lastname' class="form-control" type="text" value="<?php echo $detail['lastname'] ?>"/></h3>
          <h3>ที่อยู่  <textarea name='address' class="form-control" type="text" /><?php echo $detail['address'] ?></textarea></h3>
          <h3>อีเมล  <input name='email' class="form-control" type="text" value="<?php echo $detail['email'] ?>"/></h3>
          <h3>เบอร์โทรศัพท์<input class="form-control" name='phoneNumber' type="text" value="<?php echo $detail['phoneNumber'] ?>"</h3>
          <h3>เบอร์โทรศัพท์มือถือ<input class="form-control" name='mobileNumber' type="text" value="<?php echo $detail['mobileNumber'] ?>"</h3>
          <input type="hidden" name="citizencopy" value="<?php echo $image[1] ?>"/>
          <input type="hidden" name="picture"  value="<?php echo $image[0] ?>"/>
          <hr>
          <div class="row" style="margin-top:15px">
            <div class="col-md-12">
               <?php //$this->captcha->create_captcha(); ?>
                            <h3 for="captcha">โปรดกรอกรหัสด้านบน</h3>
                            <input type="text" name="captcha" class="form-control" value="" id="captcha"/>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
            <button type="submit"  class="btn btn-theme margintop10 pull-left" type="submit">ยืนยัน</button></div>
          </div>
          </div>
          <?php form_close()?>
          </div>
          <div class="col-md-6" style="margin-bottom:20px;">
            <h3>รูปถ่าย</h3>
            <hr>
              <img src="<?php echo base_url('img/uploads/'.$image[0]); ?>" alt="" width="250">
            <h3>สำเนาบัตรประชาชน</h3>
            <hr>
              <img src="<?php echo base_url('img/uploads/'.$image[1]); ?>" alt="" width="250">
          </div>
        </div>
    </div>
</section>
<style>
    body {
        background: url(<?php echo base_url();?>/img/bg5.jpg) no-repeat center fixed !important;

    }
</style>
<script>
  $('select[name=course] option[value=<?php echo $detail["course"] ?>]').prop('selected',true)
</script>