Welcome to Admin Panel
<a style="text-decoration:none; float:right" href="<?php echo BASE_URL?>">Main Page</a>
<hr>
<aside class="adminleft">
	<div class="widget">
		<h3>Site option</h3>
		<ul>
			<li><a href="<?php echo BASE_URL?>/Admin">Home</a></li>
			<li><a href="<?php echo BASE_URL?>/Login/logout">Logout</a></li>
		</ul>
	</div>
	
<?php 
if(Session::getSession('level') == 1){
?>
	<div class="widget">
		<h3>Manage User</h3>
		<ul>
			<li><a href="<?php echo BASE_URL?>/User/makeUser">Create User</a></li>
			<li><a href="<?php echo BASE_URL?>/User/userList">User List</a></li>
			<li><a href="<?php echo BASE_URL?>/User/uiOption">UI Option</a></li>
		</ul>
	</div>
<?php }?>

<?php 
if(Session::getSession('level') == 1 || Session::getSession('level') == 2){
?>	
	<div class="widget">
		<h3>Category option</h3>
		<ul>
			<li><a href="<?php echo BASE_URL?>/Admin/addCategory">Add Category</a></li>
			<li><a href="<?php echo BASE_URL?>/Admin/categoryList">Category List</a></li>
		</ul>
	</div>
<?php }?>
	
	<div class="widget">
		<h3>Post option</h3>
		<ul>
			<li><a href="<?php echo BASE_URL?>/Admin/addArticle">Add Article</a></li>
			<li><a href="<?php echo BASE_URL?>/Admin/articleList">Article List</a></li>
		</ul>
	</div>
</aside>
<article class="adminright">