<div class="contact-form col-sm-12 bg-white">
	<h2 class="text-uppercase">Danh sách hình ảnh</h2>
	
	<div class="form-group col-sm-6">
		<label>Chọn dự án:</label>
		<select class="form-control" name="category-choice">
			<?php foreach ($categories as $key => $value) {?>
			<option <?php if( $value['id'] == $cat) echo 'selected' ?> value="<?php echo $value['id']?>"><?php echo $value['name']?></option>
			<?php } ?>
		</select>
	</div>
	<div class="col-sm-6">
		<a href="<?php echo base_url('/admin/project/add')?>" class="btn btn-default pull-right"> Thêm ảnh mới </a>
	</div>
	<table class="table table-bordered table-hover">
		<thead>
			<th>Id</th>
			<th>Tiêu đề</th>
			<th>Dự án</th>
			<th>Hình ảnh</th>
			<th>Tình trạng</th>
			<th>Hoạt động</th>
		</thead>
		<tbody>
		<?php if(count($list)>0){ ?>
			<?php foreach($list as $item) {?>
			<tr>
				<td><?php echo $item["id"]?></td>
				<td><?php echo $item["title"]?></td>
				<td><?php echo $item["category"]?></td>
				<td><?php 
				if ($item['image']!='') {
					echo "<img class='img_item' style='height:150px;' src='".base_url("uploads/project/".$item['image'])."'/>";
				}
				?></td>
				<td><?php echo ($item["status"])?"Hiển thị":"Không hiển thị"?></td>
				<td>
					<a href="<?php echo base_url("/admin/project/edit/".$item["id"]);?>"  class="btn btn-default">Sửa</a>
					<a href="#" onclick="confirmClick('<?php echo base_url('/admin/project/delete/'.$item["id"])?>')" class="btn btn-default"> Xóa </a>
				</td>
			</tr>
			<?php }?>
		<?php }else{?>
			<tr>
				<td class="text-center" colspan="6">Không có hình ảnh nào!</td>
			</tr>
		<?php }?>
		</tbody>
	</table>
	<nav>
	  	<ul class="pager">
		    <li class="previous <?php if ($prev <1) echo 'disabled';?>"><a href="<?php if ($prev >=1) echo  base_url().'admin/project/index/'. $prev .'/'. $cat ?>"><span aria-hidden="true">&larr;</span> Older</a></li>
		    <li class="next <?php if ($next == 0) echo 'disabled';?>"><a href="<?php if ($next <> 0) echo base_url().'admin/project/index/'. $next .'/'. $cat ?>">Newer <span aria-hidden="true">&rarr;</span></a></li>
	  	</ul>
	</nav>
</div>
<script type="text/javascript">
	$('[name=category-choice]').change(function(){
		window.location.href = '/admin/project/index/1/' + $(this).val();
	});

</script>