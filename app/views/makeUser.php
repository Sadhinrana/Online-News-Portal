<?php 
if(isset($postErrors)){
	foreach($postErrors as $key => $value){
		switch($key){
			case 'username':
				foreach($value as $val){
					echo "<span style='color:red;font-weight:bold'>Title: ".$val."</span><br>";
				}
				break;
				
			case 'password':
				foreach($value as $val){
					echo "<span style='color:red;font-weight:bold'>Content: ".$val."</span><br>";
				}
				break;
				
			case 'level':
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
<form action="http://localhost/mvc/User/insertUser" method="post">
	<table>
		<tr>
		<td>User Name</td>
		<td><input type="text" name="username" required></input></td>
		</tr>
		
		<tr>
		<td>Password</td>
		<td><input type="text" name="password" required></input></td>
		</tr>
		
		<tr>
		<td>User Role</td>
		<td>
			<select name="level">
				<option>Select User Role</option>
				<option value="2">Author</option>
				<option value="3">Contributor</option>
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
