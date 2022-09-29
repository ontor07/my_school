<?php 
include 'header.php';
?>
<div class="main-body">
	<div class="row">
		<div class="col-lg-9 col-md-9 col-12">
			<div class="left-body">
				<div class="left-single-box">
					<div class="left-body-boxtitle">
						<b>যোগাযোগ</b>
					</div>
					<div class="body-text">
						<?php
						$sql=$db->link->query("SELECT * FROM `contact` WHERE 1");
						if($sql)
						{
							$showdata=$sql->fetch_assoc();
						
						}
						
						?>
						 <div style="font-size: 14px;line-height: 25px; text-align: justify;" >
						<p>
							<?php echo $showdata['deception'];?>
						</p>
						 </div>
						
						<iframe src="<?php echo $showdata['map']; ?>"></iframe>
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