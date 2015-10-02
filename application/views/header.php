<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/header.css">

<div class="header" >
  <div class="container">
    <nav class="navbar navbar-top" >
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav text-uppercase">
            <li class="<?php if($page=='home') echo 'active';?>"><a href="<?php echo base_url('');?>">Trang chủ</a></li>
            <li class="<?php if($page=='service') echo 'active';?>"><a href="<?php echo base_url('service');?>">Dịch vụ</a></li>
            <li class="<?php if($page=='project') echo 'active';?>"><a href="<?php echo base_url('project');?>">Dự án</a></li>
            <li class="<?php if($page=='about') echo 'active';?>"><a href="<?php echo base_url('about');?>" >Giới thiệu</a></li>
            <li class="<?php if($page=='contact') echo 'active';?>"><a href="<?php echo base_url('contact');?>" >Liên hệ</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="social text-left">
      <a href=""><i class="fa fa-facebook"></i></a>
      <a href=""><i class="fa fa-google-plus"></i></a>
      <a href=""><i class="fa fa-skype"></i></a>
    </div>
  </div>
</div>