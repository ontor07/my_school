<div class="left-body">
	<?php
	$sql=$db->link->query("SELECT * FROM `principal_message` WHERE `id`=1");
	if($sql)
	{
		$show_data=$sql->fetch_assoc();
	}
	
	?>
				<div class="leftbody-single-box">
					<div class="left-body-boxtitle">
						<b>অধ্যক্ষের বার্তা</b>
					</div>
					<div class="box-image">
						<img src="../backend/asset/img/principal/<?php echo $show_data['image']?>" class="img-fluid" alt="Principal Image">
					</div>
					<div class="designation">
						<span>অধ্যক্ষ</span>
					</div>
					<div class="subtitle">
						<span><?php echo $show_data['name'];?></span>
					</div>
					<div class="box-link">
						<a href="principle_message.php">বার্তা....</a>
					</div>
				</div>


				<div class="leftbody-single-box">
					<div class="left-body-boxtitle">
						<b>গুরুত্বপূর্ণ লিংক</b>
					</div>
					<div class="feature">
						<a href="#"><li><i class="fa fa-caret-right"></i> বেসরকারি শিক্ষক নিবন্ধন ও প্রত্যয়ন কতৃপক্ষ (এনটিআরসিএ)</li></a>
						<a href="#"><li><i class="fa fa-caret-right"></i> মাধ্যমিক ও উচ্চশিক্ষা অধিদপ্তর</li></a>
						<a href="#"><li><i class="fa fa-caret-right"></i> শিক্ষা মন্ত্রণালয়</li></a>
						<a href="#"><li><i class="fa fa-caret-right"></i> কুমিল্লা শিক্ষা বোর্ড</li></a>
						<a href="#"><li><i class="fa fa-caret-right"></i> কারিগরি শিক্ষা বোর্ড</li></a>
						<a href="#"><li><i class="fa fa-caret-right"></i> জেলা শিক্ষা অফিস</li></a>
						<a href="#"><li><i class="fa fa-caret-right"></i> জাতীয় বিশ্ববিদ্যালয়</li></a>
						<a href="#"><li><i class="fa fa-caret-right"></i> এইচএসসি অ্যাডমিশন</li></a>
					</div>
				</div>

				<div class="leftbody-single-box">
					<div class="left-body-boxtitle">
						<?php
						$sql=$db->link->query("SELECT * FROM `contact` WHERE `id`=1");
						if($sql)
						{
							$show_data=$sql->fetch_assoc();
						}
						?>
						<b>গুগল ম্যাপ</b>
					</div>
					<div class="map">
						<iframe src="<?php echo $show_data['map'];?>"></iframe>
					</div>
				</div>

				<div class="leftbody-single-box">
					<div class="left-body-boxtitle">
						<b>ফেইসবুক পেইজ</b>
					</div>
					<div class="map">
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fimc.feni&tabs=timeline&width=340&height=331&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="331" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
					</div>
				</div>


				<div class="leftbody-single-box">
					<div class="left-body-boxtitle">
						<b>জাতীয় সংগীত</b>
					</div>
					<div class="map">
						<iframe width="180" height="150" src="https://www.youtube.com/embed/SjefET6W3q4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>


			</div>