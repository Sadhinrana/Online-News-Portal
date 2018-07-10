<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

Article list<hr>
<?php 
	if(!empty($_GET['msg'])){
		$msg = unserialize(urldecode($_GET['msg']));
			
		foreach($msg as $value){
			echo "<span style='color:red;font-weight:bold'>$value</span>";
		}
	}
?>
<section>
  <table class="display" id="table_id" data-page-Length="5">
	<thead>
		<tr>
			<th width="5%">Serial No</th>
			<th width="20%">Post Title</th>
			<th width="35%">Post Content</th>
			<th width="15%">Category</th>
			<th width="25%">Action</th>
		</tr>
	</thead>
	<tbody>
<?php 
$i=0;

foreach($getAllPost as $key => $value){
	$i++;
?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $value['title']; ?></td>
			<td>
			<?php 
			$text = $value['content'];
			if(strlen($text) > 40){
				$text = substr($text, 0,40);
				echo $text;
				} 
			?>
			</td>
			<td><?php 
				foreach($cat as $catValue){
					if($catValue['id'] == $value['cat']){
						echo $catValue['category']; 
					}
				}
				?>
			</td>
			<?php 
			if(Session::getSession('level') == 1){
			?>
			<td>
			<a href="<?php echo BASE_URL.'/Admin/PostById?action=update&id='.$value['id']?>">Edit</a> ||
			<a href="<?php echo BASE_URL.'/Admin/deletePost?action=delete&id='.$value['id']?>" onclick="return confirm('Are you sure want to delete this data?')">Delete</a>
			</td>
			<?php }else{?>
			<td style="color:red">Not permitted</td>
			<?php } ?>
		</tr>
	<?php } ?>
	</tbody>
  </table>
</section>
<script>$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
</article>
