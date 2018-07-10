<article class="postcontent">
	<?php if($postBySearch){foreach($postBySearch as $value){?>
	<div class="post">
		<h2><a href="<?php echo BASE_URL;?>/Home_controller/postDetails/<?php echo $value['id'];?>"><?php 
		echo $value['title'];?></a></h2>
		<?php 
		$text = $value['content'];
		if(strlen($text) > 200){
			$text = substr($text, 0,200);
			echo $text;
			} 
		?>
		<div class="readmore"><a href="<?php echo BASE_URL;?>/Home_controller/postDetails/<?php echo 
		$value['id'];?>">Read More..</a></div>
	</div>
	<?php }}else{echo "<span style='color:red;font-weight:bold'>No result found. Please try again with 
	some different keyword.</span>";} ?>
</article>