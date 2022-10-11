<?php 
include 'header.php';
?>
<div class="main-body">
	<div class="row">
		<div class="col-lg-9 col-md-9 col-12">
			<div class="left-body">
				<?php
				if (isset($_GET['id'])) {
					$id=$_GET['id'];
					$sql=$db->link->query("SELECT * FROM `red_crescent` WHERE `id`=$id");
					$show=$sql->fetch_assoc();
				?>
				<div class="left-single-box">
					<div class="left-body-boxtitle">
						<b><?php echo $show['title']?></b>
					</div>
					<div class="body-text">
						<div class="news">
							<div class="news-image">
								<img src="../backend/asset/img/red_crescent/<?php echo $show['image']; ?>" class="img-fluid">
					scouts		</div>
							<div class="news_text">
								<p><?php echo $show['description'];?></p><br>
							</div>
						</div>
					</div>
				</div>
				<?php
				}
				?>
				
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