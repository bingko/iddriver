
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">นักเรียน</h1>
		</div>
		<table class='table table-bordered' id="std_table">
			<thead>
				<tr>
					<th style="width:7%">ลำดับที่</th>
					<th style="width:10%">รูปภาพ</th>
					<th style="width:30%">ชื่อ-นามสกุล</th>
					<th style="width:30%">หลักสูตรที่ลง</th>
					<th style="width:10%">วันที่สมัคร</th>
					<th style="width:10%">รายละเอียด</th>
				</tr>
				<thead>
					<tbody>
				<?php
					foreach ($register as $key => $value) {
						$img = empty($value['picture'])? base_url('img/No_Image_Available.png'):base_url('img/uploads/'.$value['picture']);
				?>
				<tr>
				<td><?php echo $key ?></td>
				<td><img style="width:100%" src="<?php echo $img ?>"></td>
				<td><?php echo $value['firstname'].' '.$value['lastname'] ?></td>
				<td><?php echo $value['course_name'] ?></td>
				<td><?php echo date("d-m-Y", strtotime($value['register_time'])); ?></td>
				<td><a href="<?php echo site_url('admin/view_student/'.$value['ID']) ?>">ดูรายละเอียด</a></td>
				</tr>
				<?php 
					}
				 ?>
				</tbody>
				</table>
    </div>
<script>
    $('#std_table').DataTable();
</script>
<style>
label{
font-size:13px;	
}
td{
	vertical-align: middle !important;
}
</style>
                
                
            </div>
            <!-- /.row -->
        </div>