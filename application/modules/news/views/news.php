<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/news.css">
<div class="container-fluid cover">
	<div class="container-fluid dim">
	  <div class="container">
	    <div class="caption">
	      <h1><?php echo $title?></h1>
	    </div>
	    <div class="breadcrumb">
	      <ul>
	        <li><a href="<?php echo base_url();?>" target="">Home</a></li>
	        <li><a> <i class="fa fa-angle-right"></i></a></li>
	        <li><a href="#" target="">Services</a></li>
	        <li><a> <i class="fa fa-angle-right"></i></a></li>
	        <li><a href="<?php echo base_url('service'. $slug);?>" target=""><b><?php echo $title?></b></a></li>
	      </ul>
	    </div>
	  </div>
	</div>
</div>
<div class="container">
	<div class="services-content row">
		<div class="col-sm-4 sidebar">
			<?php echo $template['partials']['left']; ?>
		</div>
		<div class="col-sm-8 postgroup">
			
			<div class="news-form ">
				<?php foreach ($list_news as $key => $value) {?>
					<div class="post">
						<div class="col-md-4">
							<img src="<?php echo base_url().'uploads/news/thumbs/'.$value['image']?>">
						</div>
						<div class="col-md-8">
							<a href="<?php echo base_url().'detail/'.$value['slug']?>"><h4 class="text-uppercase"><?php echo $value['title']?></h4></a>
							<p><?php echo split_char($value['description'],150,1)." ..."?></p>
							<a href="<?php echo base_url().'detail/'.$value['slug']?>" class="btn btn-default">More</a>
						</div>
						
					</div>
				<?php }
				?>
			</div>
		</div>
	
	</div>
</div>