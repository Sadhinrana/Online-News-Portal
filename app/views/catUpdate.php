<h3>Update category.</h3>
<?php 
if(isset($msg)){
	echo $msg;
}
?>
<form action="http://localhost/mvc/Admin/updateCat" method="post">
	<table>
	<?php if(isset($cat)){
			foreach($cat as $value){?>
		<input type="hidden" name="id" value="<?php echo $value['id'];?>"></input>
		<tr>
		<td>Category</td>
		<td><input type="text" name="name" value="<?php echo $value['category'];?>"></input></td>
		</tr>
		<tr>
		<td>Title</td>
		<td><input type="text" name="title" value="<?php echo $value['category'];?>"></input></td>
		</tr>
		<tr>
		<td></td>
		<td><input type="submit" value="Update"></input></td>
		</tr>
	<?php }} ?>
	</table>
</form>
</article>