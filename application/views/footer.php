<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/footer.css">

<div class="footer" data-sr>
  <div class="container">
    <div class="col-sm-6">
      <p>&copy Copyright  2015. All Rights Reserved.</p>

      <?php echo $setting['contact']['data']->detail;?>
    </div>
  </div>
</div>

<div class="btn-go-top">
	<i class="fa fa-arrow-circle-up"></i>
	<i class="fa fa-arrow-circle-down"></i>
</div>
<style type="text/css">
	.btn-go-top {
		font-size: 32px;
		position: fixed;
		bottom: 50px;
		right: 100px;
	}
	.btn-go-top i{
		cursor: pointer;
	}
</style>
<script type="text/javascript">
	$(".fa-arrow-circle-up").click(function() {
	  $("html, body").animate({ scrollTop: 0 }, "slow");
	  return false;
	});
	$(".fa-arrow-circle-down").click(function() {
	  $("html, body").animate({ scrollTop: $(document).height() }, "slow");
	  return false;
	});
</script>