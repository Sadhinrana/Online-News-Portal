User list<hr>
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
        <th>User Name</th>
        <th>User Level</th>
        <th>Action</th>
    </tr>
<?php 
$i=0;

foreach($user as $key => $value){
	$i++;
?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $value['username']; ?></td>
        <td>
			<?php 
				if($value['level'] == 1){
					echo 'Admin';
				}else if($value['level'] == 2){
					echo 'Author';
				}else{
					echo 'Contributor';
				}
			?>
		</td>
        <td>
        <a href="<?php echo BASE_URL.'/User/deleteUser?action=delete&id='.$value['id']?>" onclick="return confirm('Are you sure want to delete this data?')">Delete</a>
        </td>
    </tr>
<?php } ?>
  </table>
</section>
</article>
