<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/about.css');?>">
<div class="middle">
	<div class="container">
		<div class="col-sm-12">
			<div id="about">
				<h2>Giới thiệu</h2>
				<div class="about-block">
					<img class="pull-left" src="<?php echo base_url();?>assets/images/about-detail.jpg">
					<div class="about-detail pull-left">
						<h1> <i class="fa fa-road"></i><?php echo $about['data']->name?></h1>
		        		<p><?php echo $about['data']->description?></p>
		        		<div><?php echo $about['data']->detail?></div>
					</div>

				</div>
				<hr>
				<div>
				-Trân trọng- <br>
				<?php echo $setting['contact']['data']->detail;?>
				</div>
			</div>
		</div>
	</div>
</div>