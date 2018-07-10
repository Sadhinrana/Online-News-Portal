<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
<form action="http://localhost/mvc/Admin/updatePost" method="post">
	<table>
	<?php foreach($postbyid as $key => $value){ ?>
		<tr>
		<input type="hidden" name="id" value="<?php echo $value['id'];?>"></input>
		<td>Title</td>
		<td><input type="text" name="title" value="<?php echo $value['title'];?>"></input></td>
		</tr>
		<tr>
		<td>Content</td>
		<td><textarea name="content"><?php echo $value['content'];?></textarea>
			<script>CKEDITOR.replace( 'content' );</script>
		</td>
		</tr>
		<td>Category</td>
		<td>
			<select class="catsearch" name="cat">
				<option>Select here</option>
				<?php foreach($catList as $val){?>
				<option 
					<?php if($val['id'] == $value['cat']){?>
						selected="selected"
					<?php }?>
					value="<?php echo $val['id'];?>"><?php echo $val['category'];?>
				</option>
					<?php }?>
			</select>
		</td>
		</tr>
		<tr>
		<td></td>
		<td><input type="submit" value="Update"></input></td>
		</tr>
	<?php }?>
	</table>
</form>
</article>
