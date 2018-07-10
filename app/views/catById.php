<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Advanced PHP OOP [MVC Framework]</title>
<style>
body {font-family: arial;font-size: 15px;line-height: 18px;margin: 0 auto;width: 850px;}
a{color:#3399FF;}
.headeroption {background: #3399ff url("../img/php.png") no-repeat scroll 56px 18px;height: 80px;overflow: hidden;padding-left: 160px;}
.headeroption h2 {color: #000;font-size: 30px;padding-top: 5px;text-shadow: 0 1px 1px #fff;}
.content{background: #f2f2ff;border: 6px solid #3399ff;font-size: 16px;line-height: 22px;margin-bottom: 3px;margin-top: 3px;min-height: 400px;overflow: hidden;padding: 10px;}
.subject {border-bottom: 1px solid #3399ff;font-size: 20px;margin-bottom: 10px;padding-bottom: 10px;}
.subject p{margin:0;}

.insert{color:#06960E;font-weight:bold;}
.delete{color:#DE5A24;font-weight:bold;}

.mainleft{border-right: 1px dotted #999;float: left;margin-right: 16px;width: 350px;}
.mainright{float:right;width:450px;}

.tblone{width:100%;border:1px solid #fff;}
.tblone td{padding:0px;text-align:center;}

table.tblone tr:nth-child(2n+1){background:#fff;height:30px;}
table.tblone tr:nth-child(2n){background:#fdf0f1 none repeat scroll 0 0;height:30px;}
input[type="text"] {border:1px solid #ddd;margin-bottom:5px;padding:5px;width:228px;font-size:16px}
input[type="submit"]{cursor: pointer}

.footeroption{height:90px;background:#177de3;overflow:hidden;padding-top:10px;overflow: hidden;}
.footerone {background: #3aa0ff;border-radius: 5px;float: left;font-size: 18px;line-height: 23px;margin-left: 10px;padding: 6px 10px;text-align: center;text-shadow: 1px 0 2px #fff;width: 390px;overflow: hidden;}
.footerone p{margin:0;}
</style>
</head>
<body>
  <header class="headeroption">
    <h2>Advanced PHP OOP [MVC Framework]</h2>
  </header>
<div class="content">
Category list<hr>
<?php 
foreach($cat as $key => $value){
	echo $value['category'].'<br>';
}
?>
</div>

  <footer class="footeroption">
	  <section class="footerone">
	  <p>S M Sadhin Rana</p>
	  <p>Computer Science & Engineering,</p>
	  <p>Jessore University of Science & Technology</p>
	  
	  </section>
	  <section class="footerone">
		  <p>FB Page: www.facebook.com/albert.sadhin</p>
		  <p>E-mail: smsadhin123@gmail.com</p>
		  <p>Cell: 01738797379 / 01673694943</p>
	  </section>
  </footer>

</body>
</html>