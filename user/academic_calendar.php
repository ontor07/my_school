<?php 
include 'header.php';
?>
<div class="main-body">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-12">
			<div class="left-body">
				<div class="left-single-box">
					<div class="left-body-boxtitle">
						<b>অ্যাকাডেমিক ক্যালেন্ডার</b>
					</div>
					<div class="body-text">
						<div class="data">
							<table class="table table-hover table-bordered" id="myTable">
								
								<thead>
									<tr>
										<th>SL</th>
										<th>Title</th>
										<th>Date</th>
										<th>Download</th>
									</tr>
								</thead>
								<?php
								$sql=$db->link->query("SELECT * FROM `academic_calender`");
								while ($showdata=$sql->fetch_assoc()) {
									?>
									<tbody>
									<tr>
										<td></td>
										<td><?php echo $showdata['title'];?></td>
										<td><?php echo $showdata['date'];?></td>
										<td>
											<a href="../backend/asset/img/academic_calender/<?php echo $showdata['image'];?>" class="btn btn-danger"><img src="../assets/image/pdf_icon.png" class="img-fluid"></a>
										</td>
									</tr>
								</tbody>
								<?php	
								}
								?>
								
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- left body -->
		
		<!-- left body -->

	</div>
</div>
<?php 
include 'footer.php';
?>