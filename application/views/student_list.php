<div class="page-content">
	<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
	<div class="clearfix"></div>
	<div class="content">
		<div class="row-fluid">
			<div class="span12">
				<div class="grid simple ">
					<div class="grid-title">
						<h4><span class="semi-bold">นักศึกษา</span></h4>
						<div class="tools">
							<button type="button" class="btn btn-primary" onclick="location.href='<?php echo site_url('home/student_insert')?>'">เพิ่ม</button>
							<button type="button" class="btn btn-primary" onclick="location.href='<?php echo site_url('home/student_import')?>'">นำเข้าจากไฟล์</button>
						</div>
					</div>
					<div class="grid-body ">
						<table class="table table-striped" id="example2" >
							<thead>
								<tr>
									<th>ชื่อ-สกุล</th>
									<th>เบอร์โทร</th>
									<th>เกรดเฉลี่ย</th>
									<th>ที่ปรึกษา</th>

									<th>จัดการ</th>
								</tr>
							</thead>
							<tbody>
								<tr class="odd gradeX">
									<td>นายนา ข้าวกล้อง</td>
									<td class="center">08000000</td>
									<td class="center">3.47</td>
									<td class="center">---------</td>
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
