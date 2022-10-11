<?php 
include 'header.php';
?>
<div class="main-body">
	<div class="row">
		<div class="col-lg-9 col-md-9 col-12">
			<div class="left-body">
				<div class="left-single-box">
					<div class="left-body-boxtitle">
						<b>সাংস্কৃতিক কর্মকান্ড</b>
					</div>
					<div class="body-text">
						<div class="news">
								<?php
									$sql=$db->link->query("SELECT * FROM `cultural_activities`");
									while ($show = $sql->fetch_assoc()) {
								?>
							<div class="news-single">
								<div class="row">
									
										<div class="col-3">
										<div class="news-image">
											<img src="../backend/asset/img/cultural_activities/<?php echo $show['image'];?>" class="img-fluid">
										</div>
									</div>
									<div class="col-8">
										<div class="heading">
											<a href="view_culturalactivities.php?id=<?php echo $show['id'];?>">
											<?php echo $show['title'];?>
											</a>
										</div>
										<div class="pub-date">
											<span><?php echo $show['date'];?></span>
										</div>
									</div>
									
									
								</div>
							</div>
							<?php	
								}
							?>
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