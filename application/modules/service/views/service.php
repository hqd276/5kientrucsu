<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/service.css">

<div class="middle">
    <div class="container">
        <div class="caption">
          <h1><?php echo $category['name']?></h1>
        </div>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url();?>" target="">Home</a></li>
          <li><a href="#">Services</a></li>
          <li class="active"><a href="<?php echo base_url('service/'.$category['slug']);?>" target=""> <b><?php echo $category['name']?></b></a></li>
        </ol>

    	<div class="col-md-12 service">
            <img class="col-sm-4" src="<?php echo base_url('uploads/categories/'.$category['image']);?>">

            <div class="col-sm-8"><?php echo $category['description']?></div>
        </div>
    	<div class="clearfix"></div>
    </div>
</div>