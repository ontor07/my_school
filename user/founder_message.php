<?php 
include 'header.php';
?>
<div class="main-body">
	<div class="row">
		<div class="col-lg-9 col-md-9 col-12">
			<div class="left-body">
				<div class="left-single-box">
					<?php
					$sql=$db->link->query('SELECT * FROM `founder_message` WHERE `id`=1');
					if($sql)
					{
						$show_data=$sql->fetch_assoc();
					}
					?>

					<div class="left-body-boxtitle">
						<b>প্রতিষ্ঠাতার বার্তা</b>
					</div>
					<div class="body-text">
						<div class="image" style="text-align: center;">
							<img src="../backend/asset/img/founder_message/<?php echo $show_data['image'];?>" class="img-fluid" style="max-width: 50%;">
						</div>
						<p>
							<?php echo $show_data['description']?>


						</p>
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