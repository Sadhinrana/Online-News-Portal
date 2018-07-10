Category list<hr>
<?php 
	if(!empty($_GET['msg'])){
		$msg = unserialize(urldecode($_GET['msg']));
			
		foreach($msg as $value){
			echo $value;
		}
	}
?>
<section>
  <table class="tblone">
    <tr>
        <th>Serial No</th>
        <th>Category Name</th>
        <th>Category Title</th>
        <th>Action</th>
    </tr>
<?php 
$i=0;

foreach($cat as $key => $value){
	$i++;
?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $value['category']; ?></td>
        <td><?php echo $value['title']; ?></td>
		<?php 
		if(Session::getSession('level') == 1){
		?>
        <td>
        <a href="<?php echo BASE_URL.'/Admin/catById?action=update&id='.$value['id']?>">Edit</a> ||
        <a href="<?php echo BASE_URL.'/Admin/deleteCat?action=delete&id='.$value['id']?>" onclick="return confirm('Are you sure want to delete this data?')">Delete</a>
        </td>
		<?php }else{?>
		<td style="color:red">Not permitted</td>
		<?php } ?>
    </tr>
<?php } ?>
  </table>
</section>
</article>
