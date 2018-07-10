<article class="postcontent">
	<?php 
	foreach($postById as $value){
	?>
	<div class="details">
		<div class="title">
			<h2><?php echo $value['title'];?></h2>
			<p>Category : <a href="<?php echo BASE_URL;?>/Home_controller/postByCat/
			<?php echo $value['cat'];?>"><?php echo $value['category'];?></a></p>
		</div>
		
		<div class="desc">
			<?php echo $value['content'];?>
		</div>
	</div>
	<?php }?>
</article>