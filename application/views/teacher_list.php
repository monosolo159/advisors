<div class="page-content">
	<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
	<div class="clearfix"></div>
	<div class="content">
		<div class="row-fluid">
			<div class="span12">
				<div class="grid simple ">
					<div class="grid-title">
						<h4><span class="semi-bold">อาจารย์ที่ปรึกษา</span></h4>
						<div class="tools">
							<button type="button" class="btn btn-primary" onclick="location.href='<?php echo site_url('home/teacher_insert')?>'">เพิ่ม</button>
							<button type="button" class="btn btn-primary" onclick="location.href='<?php echo site_url('home/teacher_import')?>'">นำเข้าจากไฟล์</button>
						</div>
					</div>
					<div class="grid-body ">
						<table class="table table-striped" id="example2" >
							<thead>
								<tr>
									<th>ชื่อ-สกุล</th>
									<th>เบอรโทร</th>
									<th>จัดการ</th>
								</tr>
							</thead>
							<tbody>
								<tr class="odd gradeX">
									<td>อาจารย์ลักขณา</td>
									<td>ไร้นาม</td>
									<td class="center">
										<button type="button" class="btn btn-warning" onclick="location.href='<?php echo site_url('home/student_insert')?>'">แก้ไข</button>
										<button type="button" class="btn btn-warning" onclick="location.href='<?php echo site_url('home/student_insert')?>'">แก้ไขรหัสผ่าน</button>
										<button type="button" class="btn btn-danger" onclick="location.href='<?php echo site_url('home/student_insert')?>'">ลบ</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
