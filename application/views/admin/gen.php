        <div class="row">
		<div class="col-lg-12">
                    <h1 class="page-header">รูปภาพ</h1>
                </div>
                <div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Slide</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">อัลบั้ม</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">ทำเนียบรุ่น</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
			<div class="row">
					<div class="col-md-5">
					<div class="panel panel-default">
  <div class="panel-heading">Upload slide picture</div>
  <div class="panel-body">
    <?php echo form_open_multipart('admin/uploadslide'); ?>
						<label for="usr">รูปภาพ</label>
						 <input id="input-id3" type="file" name="files[]" class="file" multiple="true" data-show-upload="false" data-show-caption="true">
					
				<div style="margin-top:10px">
					<button type="submit" class="btn btn-success">Upload</button>
				</div>
				<?php echo form_close(); ?>
					</div>
  </div>
</div></div>
		<div class="row">
		<?php
			echo form_open_multipart('admin/updateSlide');
		?>
		<div class="col-md-5">
			<table class='table table-bordered'>
				<thead>
					<tr style="white-space:nowrap;">
						<th width="50">แสดงใน Slide</th>
						<th>ตัวอย่างภาพ</th>
						<th>ลบ</th>
					</tr>
				</thead>
				<tbody>
					<?php
					for($i=0;$i<count($slide);$i++){
						echo '<tr id="'.$slide[$i]->ID.'">';
						echo '<td style="vertical-align:middle">';
						if($slide[$i]->status==0){
							echo '<input name="status[]" type="checkbox" value="'.$slide[$i]->ID.'" />' ;
						}
						else{
							echo '<input name="status[]" type="checkbox" value="'.$slide[$i]->ID.'" checked="true" />' ;
						}
						echo '</td>';
						echo '<td>';
						echo '<img src="'.base_url().'/img/slides/'.$slide[$i]->img_name.'" width="200"/>' ;
						echo '</td>';
						echo '<td style="vertical-align:middle">';
						echo '<a href="'.site_url('admin/deleteslide/'.$slide[$i]->ID).'">ลบ</a>' ;
						echo '</td>';
						echo '</tr>';
					}
					?>
				</tbody>
			</table>
			
		<input class="btn btn-success" type="submit" value="ยื่นยัน" style="margin-bottom:10px;"/>
		</div>
		
		<?php
			echo form_close();
		
		?>
		
	</div>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">		
    	<div class="row">
				<div class="col-xs-7">
					<?php echo form_open_multipart('admin/insertGallery'); ?>
						
						<input type="hidden" name = "gallerytype" value="1">
						<label for="usr">ชื่ออัลบั้ม</label>
						<input class="form-control" name="title"  required/>
						<label for="usr">รูปภาพ</label> <small>(จำกัด 20 ไฟล์ต่อการอัพโหลด1ครั่ง)</small>
						<input id="input-id1" name="files[]" type="file" class="file" multiple="true"  data-preview-file-type="text">
					<br/>
						<input type="submit" class="btn btn-success" value="Upload">
					<?php echo form_close(); ?>
				</div>
			</div>
            <hr />
            <div class="row">
            	<div class="col-xs-12">
                	<div role="tabpanel">

                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <?php for($i=0;$i<count($getAlbum);$i++){ ?>
                        <li role="presentation" <?php if($i==0){ echo 'class="active"';}?>><a href="#<?php echo $getAlbum[$i]->ID ; ?>" aria-controls="<?php echo $getAlbum[$i]->ID ; ?>" role="tab" data-toggle="tab"><?php echo $getAlbum[$i]->name ; ?></a></li>
                        <?php }?>
                      </ul>
                    
                      <!-- Tab panes -->
                      <div class="tab-content">
                      <?php for($j=0;$j<count($getAlbum);$j++){ ?>
                        <div role="tabpanel" class="tab-pane <?php if($j==0){ echo 'active';}?>" id="<?php echo $getAlbum[$j]->ID ; ?>">
                        	<div class="row">
                            <?php for($k=0;$k<count($getGallery);$k++){
									 if($getAlbum[$j]->ID==$getGallery[$k]->albumID){?>
            					<div class="col-xs-2">
                                <a href="<?php echo site_url('admin/deleteGallery').'/'.$getGallery[$k]->ID; ?>" onclick="return confirm('ยืนยันการลบ ใช่หรือไม่?')">
                                	<img src="<?php echo base_url()?>/img/gallery/<?php echo $getGallery[$k]->thumbnail ; ?>" width="100%"/><br /><br />
								</a>
                                </div>
								<?php } 
                                }?>    
                        </div>
                        <div class="row">
            	<div class="col-xs-12" align="center">
                        <small style="color:#F00;">*** กดที่รูปเพื่อทำการลบ หรือ </small>&nbsp;
                        <a href="<?php echo site_url('admin/deleteAlbum').'/'.$getAlbum[$j]->ID;?>" onclick="return confirm('ยืนยันการลบ ใช่หรือไม่?')">
              <button class="btn btn-danger btn-flat btn-sm" ><i class="fa fa-times"></i> ลบทั้งอัลบั๊ม</button>
            </a>
                        </div>
                        </div>
                        </div>
                      <?php }?>
                      </div>
                    
                    </div>
                </div>
            </div><br />
<br />

	</div>
    
    <div role="tabpanel" class="tab-pane" id="messages">
    	    	<div class="row">
				<div class="col-xs-7">
					<?php echo form_open_multipart('admin/insertGallery'); ?>
						<input type="hidden" name = "gallerytype" value="2">
						<label for="usr">ชื่อรุ่น</label> 
						<input class="form-control" name="title"  required/>
						<label for="usr">รูปภาพ</label>  <small>(จำกัด 20 ไฟล์ต่อการอัพโหลด1ครั่ง)</small>
						 <input id="input-id2" type="file" name="files[]" class="file" multiple="true" data-show-upload="false" data-show-caption="true" required>
					<br/>
						<input type="submit" class="btn btn-success" value="Upload">
					<?php echo form_close(); ?>
				</div>
			</div>
    </div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
  </div>

</div>

				</div>
	</div>
	<style>
	.tab-pane{
	padding-top:20px;
		}</style>
        <script>
			$("#input-id1").fileinput({
				overwriteInitial: false,
				maxFileSize: 3000,
				maxFileCount: 20,
				allowedFileTypes: ['image']
			});
			$("#input-id2").fileinput({
				overwriteInitial: false,
				maxFileSize: 3000,
				maxFileCount: 20,
				allowedFileTypes: ['image']
			});
			$("#input-id3").fileinput({
				overwriteInitial: false,
				maxFileCount: 20,
				allowedFileTypes: ['image']
			});
		</script>