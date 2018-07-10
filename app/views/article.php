<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
<?php 
if(isset($postErrors)){
	foreach($postErrors as $key => $value){
		switch($key){
			case 'title':
				foreach($value as $val){
					echo "<span style='color:red;font-weight:bold'>Title: ".$val."</span><br>";
				}
				break;
				
			case 'content':
				foreach($value as $val){
					echo "<span style='color:red;font-weight:bold'>Content: ".$val."</span><br>";
				}
				break;
				
			case 'cat':
				foreach($value as $val){
					echo "<span style='color:red;font-weight:bold'>Category: ".$val."</span><br>";
				}
				break;
				
			default:
				break;
		}
	}
}
?>
<form action="http://localhost/mvc/Admin/insertArticle" method="post">
	<table>
		<tr>
		<td>Title</td>
		<td><input type="text" name="title"></input></td>
		</tr>
		<tr>
		<td>Content</td>
		<td><textarea name="content"></textarea>
			<script>CKEDITOR.replace( 'content' );</script>
		</td>
		</tr>
		<td>Category</td>
		<td>
			<select class="catsearch" name="cat">
				<option>Select here</option>
				<?php foreach($catList as $value){?>
				<option value="<?php echo $value['id'];?>"><?php echo $value['category'];?></option>
				<?php }?>
			</select>
		</td>
		</tr>
		<tr>
		<td></td>
		<td><input type="submit" value="insert"></input></td>
		</tr>
	</table>
</form>
</article>
