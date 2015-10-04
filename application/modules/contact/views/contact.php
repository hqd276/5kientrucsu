<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/contact.css">
<div class="middle" >
	<div class="container">
		<form class="" role="form" method="post" action="">
			<span class="success">
				<?php 
				if(isset($b_Check))
					if ($b_Check){
						echo "Send Success!";
					}else{
						echo "Send Fail";
					}
				?>
			</span>
			<?php echo form_error('email'); ?>
			<?php echo form_error('content'); ?>

			<div class="col-sm-8">
	    		<div id="map"></div>
	    	</div>
	    	<div class="col-sm-4">
	    		<form action="contact" method="post">
	    			<h4 class="text-uppercase">Liên hệ</h4>
	    			<div class="form-group">
	    				<label>Họ tên</label>
	    				<input type="email" class="form-control" id="inputEmail3" name="name" placeholder="Họ tên" value="<?php echo set_value('name'); ?>">
	    			</div>
	    			<div class="form-group">
	    				<label>Email</label>
	    				<input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
	    			</div>
	    			<div class="form-group">
	    				<label>Điện thoại</label>
	    				<input type="" class="form-control" id="inputEmail3" name="phone" placeholder="Điện thoại" value="<?php echo set_value('phone'); ?>">
	    			</div>
	    			<div class="form-group">
	    				<label>Nội dung</label>
	    				<textarea class="form-control" name="content" placeholder="Nội dung"><?php echo set_value('content'); ?></textarea>
	    			</div>
	    			<div class="form-group">
	    				<button type="submit" class="btn">Gửi</button>
	    			</div>
	    		</form>
	    	</div>
		</form>
	</div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>

<script>
	//load map
	function initMap() {
	  var map = new google.maps.Map(document.getElementById('map'), {
	    zoom: 13
	  });

	  // Try HTML5 geolocation.
	  if (navigator.geolocation) {
	    navigator.geolocation.getCurrentPosition(function(position) {
	      var pos = {
	        lat: position.coords.latitude,
	        lng: position.coords.longitude
	      };

	      map.setCenter(pos);
	    }, function() {
	    });
	  }
	}

    $(document).ready(function(){
    	initMap();
		//fix loi map chi hien thi o tab 1
		// $('a[href="#contact"]').on('shown.bs.tab', function (e) {
		// 	initMap();
		// });
	});
</script>