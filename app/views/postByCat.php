<article class="postcontent">
	<?php foreach($postByCat as $value){?>
	<div class="post">
		<h2><?php echo $value['title'];?></h2>
		<p>Category : <?php echo $value['category'];?></p>
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
	<?php } ?>
</article>