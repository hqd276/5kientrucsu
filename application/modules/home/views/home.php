<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/home.css">

<div class="middle" >
	<div class="container">
	<!-- Tab panes -->
		<div class="tab-content">
	    <div role="tabpanel" class="tab-pane active text-center" id="home">
	    	<div class="col-sm-12 about">
	    		<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				  	<?php foreach ($banners as $key => $value){?>
				  	<div class="item <?php echo ($key==0)?"active":"" ?>" >
				    	<img src="<?php echo base_url("uploads/banner/".$value['image']); ?>">
				    </div>
				   	<?php } ?>
				  </div>
				</div>

				<div class="about-content text-left ">
					<ul class="list-unstyled">
						<li>D   <span>+</span>   S .T .U.D.I.O</li>
						<li><span>W.</span>e  a.r.e  a  g.r.o.u.p  o.f</li>
						<li><span>A.</span>r.c.h.i.t.e.c.t.s</li>
						<li><span>W.</span>h.o  a.r.e  l.o.o.k.i.n.g  f.o.r</li>
						<li><span>D.</span>i.f.f.e.r.e.n.c.e.s  . . .</li>
						<li>More <i class="fa fa-long-arrow-right"></i></li>
					</ul>
				</div>
	    	</div>
	    	<?php foreach ($cat_service as $key => $value) {?>
	    		<div class="col-xs-6 col-sm-4 product ">
			    	<a href="<?php echo base_url('service/'.$value['slug']);?>">
			    		<img src="<?php echo base_url('uploads/categories/thumbs/'.$value['image']);?>">
			    		<p class="text-uppercase"><?php echo $value['name']?></p>
			    	</a>
		    	</div>
	    	<?php }?>
	    	<?php foreach ($cat_project as $key => $value) {?>
	    		<div class="col-xs-6 col-sm-4 product ">
			    	<a href="<?php echo base_url('project/'.$value['slug']);?>">
			    		<img src="<?php echo base_url('uploads/categories/thumbs/'.$value['image']);?>">
			    		<p class="text-uppercase"><?php echo $value['name']?></p>
			    	</a>
		    	</div>
	    	<?php }?>
	    </div>
	</div>
</div>

<script src="<?php echo base_url('assets/js/scrollReveal.js');?>"></script>
<script type="text/javascript">
	// window.sr = new scrollReveal();
  	$(document).ready(function() {
        //animation for tablet & laptop screen:
        var windowsize = $(window).width();
        if (windowsize > 767) {
            //if the window is greater than 767px wide then turn on scrollReveal..
            window.sr = new scrollReveal();
        }
    });		
  	//smooth scrolling
	$(function() {
        //$('a[href*=#]:not([href=#])').click(function() {
        $('.smooth-scroll').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });	
	
</script>