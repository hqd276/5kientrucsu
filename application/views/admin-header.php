<h1><a class="logo" href="<?php echo base_url('admin');?>"> Quản trị </a></h1>

<nav class="navbar navbar-default " role="navigation">

	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		    <span class="sr-only">Toggle navigation</span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="<?php echo base_url();?>"><span class="glyphicon glyphicon-home"></span></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav text-uppercase">
		  	
		    <!-- <li class="dropdown">
	          	<a href="#" class="dropdown-toggle" data-toggle="dropdown">News <span class="caret"></span></a>
	          	<ul class="dropdown-menu text-capitalize" role="menu">
	          		<li><a href="<?php echo base_url('admin/category/index/0');?>">News Category Manager</a></li>
                  	<li><a href="<?php echo base_url('admin/news/index/0');?>">News Manager</a></li>
                  	<li><a href="<?php echo base_url('admin/news/add/0');?>">Add new News</a></li>
	          	</ul>
	        </li> -->
	        
	        <!-- <li class="dropdown">
	          	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Product <span class="caret"></span></a>
	          	<ul class="dropdown-menu text-capitalize" role="menu">
	          		<li><a href="<?php echo base_url('admin/category/index/1');?>">Product Category Manager</a></li>
                  	<li><a href="<?php echo base_url('admin/product/index/0');?>">Product Manager</a></li>
                  	<li><a href="<?php echo base_url('admin/product/add/0');?>">Add new Product</a></li>
	          	</ul>
	        </li> -->

	        <li class="dropdown">
	          	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dịch vụ <span class="caret"></span></a>
	          	<ul class="dropdown-menu text-capitalize" role="menu">
	          		<li><a href="<?php echo base_url('admin/category/index/3');?>">Quản lý danh mục dịch vụ</a></li>
                  	<!-- <li><a href="<?php echo base_url('admin/service/index/0');?>">Service Manager</a></li>
                  	<li><a href="<?php echo base_url('admin/service/add/0');?>">Add new Service</a></li> -->
	          	</ul>
	        </li>

	        <li class="dropdown">
	          	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dự án <span class="caret"></span></a>
	          	<ul class="dropdown-menu text-capitalize" role="menu">
	          		<li><a href="<?php echo base_url('admin/category/index/2');?>">Quản lý danh mục dự án</a></li>
                  	<li><a href="<?php echo base_url('admin/project/index/0');?>">Quản lý hình ảnh dự án</a></li>
                  	<li><a href="<?php echo base_url('admin/project/add/0');?>">Thêm hình ảnh dự án mới</a></li>
	          	</ul>
	        </li>
	        <!-- <li>
	        	<a href="<?php echo base_url();?>admin/advert">Advertising</a>
	        </li> -->
	        <!-- <li>
	        	<a href="<?php echo base_url();?>admin/member">Team</a>
	        </li> -->
	        <li>
	        	<a href="<?php echo base_url();?>admin/banner">Trình diễn ảnh</a>
	        </li>
          	<!-- <li>
	          	<a href="<?php echo base_url();?>admin/video">Video</a>
          	</li> -->
	        <li class="dropdown">
	          	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Hệ thống <span class="caret"></span></a>
	          	<ul class="dropdown-menu text-capitalize" role="menu">
	          		<li><a href="<?php echo base_url();?>admin/support">Supports</a></li>
	          		<!-- <li><a href="<?php echo base_url();?>admin/booking">Booking</a></li> -->
	          		<!-- <li><a href="<?php echo base_url();?>admin/page">Pages</a></li> -->
	          		<li><a href="<?php echo base_url();?>admin/setting">Cài đặt hệ thống</a></li>
	          	</ul>
          	</li>
		  </ul>
		</div><!-- /.navbar-collapse -->
		<div class="user-info text-right col-md-4">
			Chào <span><strong><?php echo $user['email'];?></strong></span>!
			<a href="<?php echo base_url();?>logout">Đăng xuất</a> 
		</div>
	</div><!-- /.container-fluid -->
</nav>