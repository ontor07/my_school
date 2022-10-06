<?php 
include 'header.php';
?>
<style type="text/css">
	.teacher_image img{
		height: 183px;
		width: 183px;
		border-radius: 100%;
		border: 3px solid green;
	}
	.divider{
		margin-top: 0px;
	}
	.teacher_info-single-box{
		margin-top: 0px;
	}
</style>
<div class="main-body">
	<div class="row">
		<div class="col-lg-9 col-md-9 col-12">
			<div class="left-body">
				<div class="divider">
					<div class="teacher-info-box">
						<div class="row">
							<div class="col-12">
								<?php
								if(isset($_GET['id']))
								{
									$id = $_GET['id'];
									$teacher=$db->link->query("SELECT * FROM `teacher_staff` WHERE `id`=$id");
									$show_teacher=$teacher->fetch_assoc();
								}
								?>
								<div class="teacher_info-single-box">
									<div class="teacher_image">
										<img src="../backend/asset/img/teacher/<?php echo $show_teacher['image']; ?>" class="img-fluid">
									</div>
									<div class="information">
										<table class="table table-bordered">
											<tr>
												<td>Name</td>
												<td><?php echo $show_teacher['name']; ?></td>
											</tr>
											<tr>
												<td>Designation</td>
												<td><?php echo $show_teacher['designation']; ?></td>
											</tr>
											<tr>
												<td>Fathers Name</td>
												<td><?php echo $show_teacher['father_name']; ?></td>
											</tr>
											<tr>
												<td>Mothers Name</td>
												<td><?php echo $show_teacher['mother_name']; ?>Married</td>
											</tr>
											<tr>
												<td>Mobile</td>
												<td><?php echo $show_teacher['mobile']; ?></td>
											</tr>
											<tr>
												<td>Email</td>
												<td><?php echo $show_teacher['email']; ?></td>
											</tr>
											<tr>
												<td>Gender</td>
												<td><?php echo $show_teacher['gender']; ?></td>
											</tr>
											<tr>
												<td>Relationship</td>
												<td>
													<?php $show_teacher['relation']==1;
													if($show_teacher)
													{
														echo"Married";
													}
													else echo "UnMarried";
												
												?>
												</td>
											</tr>
											<tr>
												<td>Religion</td>
												<td><?php echo $show_teacher['religion']; ?></td>
											</tr>
											<tr>
												<td>Join Date</td>
												<td><?php echo $show_teacher['join_date']; ?></td>
											</tr>
											<tr>
												<td>Present Adress</td>
												<td><?php echo $show_teacher['present']; ?></td>
											</tr>
											<tr>
												<td>Permenant Adress</td>
												<td><?php echo $show_teacher['permanent']; ?></td>
											</tr>
											<tr>
												<td>Education</td>
												<td><?php echo $show_teacher['education']; ?></td>
											</tr>
											<!-- <tr>
												<td colspan="2" style="text-align:center;">
													<a href="view_show_teacherinfo.php" class="btn btn-outline-success">Details</a>
												</td>
											</tr> -->
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- left body -->
		<div class="col-lg-3 col-md-3 col-12">
			<?php include("right_body.php"); ?>
		</div>
		<!-- left body -->

	</div>
</div>
<?php 
include 'footer.php';
?>