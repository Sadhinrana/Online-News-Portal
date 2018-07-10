Login<hr>
<div class="loginform">
	<form action="<?php echo BASE_URL?>/Login/loginAuth" method="post">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" placeholder="Enter Username" Required /></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" placeholder="Enter Password" Required /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="Login"/></td>
			</tr>
		</table>
		<?php if(!empty($_GET['msg'])){
			$msg = unserialize(urldecode($_GET['msg']));
			
			foreach($msg as $value){
				echo "<span style='color:red;font-weight:bold'>$value</span>";
			}
		}
		?>
	</form>
</div>