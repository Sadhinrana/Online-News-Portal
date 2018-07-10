<?php 
	if(!empty($_GET['msg'])){
		$msg = unserialize(urldecode($_GET['msg']));
			
		foreach($msg as $value){
			echo "<span style='color:red;font-weight:bold'>$value</span>";
		}
	}
?>
<form action="http://localhost/mvc/User/changeBcolor" method="post">
	<table>
		<tr>
		<td>Change Background Color</td>
		<td><input type="color" name="color" required></input></td>
		</tr>
		
		<tr>
		<td></td>
		<td><input type="submit" value="Change"></input></td>
		</tr>
	</table>
</form>
</article>
