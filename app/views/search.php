<div class="searchoption">
	<div class="menu">
		<a href="<?php echo BASE_URL;?>">Home</a>
	</div>
	
	<div class="search">
		<form action="<?php echo BASE_URL;?>/Home_controller/search" method="post">
			<input type="text" name="keyword" placeholder="Search here..">
			
			<select class="catsearch" name="cat">
				<option>Select here</option>
				<?php foreach($catList as $value){?>
				<option value="<?php echo $value['id'];?>"><?php echo $value['category'];?></option>
				<?php }?>
			</select>
			<button class="submitbtn" type="submit">Search</button>
		</form>
	</div>	
</div>