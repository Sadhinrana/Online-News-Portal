<aside class="sidebar">
	<div class="widget">
		<h2>Category</h2>
		<ul>
			<?php 
			foreach($catList as $value){
			?>
			<li><a href="<?php echo BASE_URL;?>/Home_controller/postByCat/
			<?php echo $value['id'];?>"><?php echo $value['category']?></a></li>
			<?php }?>
		</ul>
	</div>
	
	<div class="widget">
		<h2>Latest Post</h2>
		<ul>
			<?php 
			foreach($getLatestPost as $value){
			?>
			<li><a href="<?php echo BASE_URL;?>/Home_controller/postDetails/<?php echo 
			$value['id'];?>"><?php echo $value['title']?></a></li>
			<?php }?>
		</ul>
	</div>
</aside>