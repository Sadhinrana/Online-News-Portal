<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Advanced PHP OOP [MVC Framework]</title>
<style>
body {font-family: arial;font-size: 15px;line-height: 18px;margin: 0 auto;width: 850px;}
<?php foreach($color as $value){ ?>
body {background: <?php echo $value['color'];?>}
<?php }?>
a{color:#3399FF;}
.headeroption {background: #3399ff url("img/php.png") no-repeat scroll 56px 18px;height: 80px;overflow: hidden;padding-left: 160px;}
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

.postcontent{width:560px; border-right:1px solid #ddd; float:left; margin-right:19px; overflow:hidden;padding-right:20px}
.post{margin-bottom:40px}
.post h2{border-bottom:1px dashed #ddd; margin:0; padding-bottom:10px}
.post h2 a{text-decoration:none; color:#000}
.post p{text-align:justify}
.readmore{float:right}
.readmore a{}
.sidebar{width:218px; float:right; overflow:hidden}
.widget{margin-bottom:20px}
.widget h2,h3{border:1px solid #ddd; margin:0 0 10px; padding:4px 10px}
.widget ul{margin:0; padding:0; list-style:none}
.widget ul li{}
.widget ul li a{background:#3399ff none repeat scroll 0 0; color:#fff; display:block; margin-bottom:1px;
padding:5px; text-decoration:none}
.widget ul li a:hover{background:#5ec4ff}

.details{}
.title{border-bottom:1px dashed #ddd}
.title h2{margin:0}
.title p{margin:0; padding:5px 0}
.title p a{}
.desc{}
.desc p{line-height:24px; text-align:justify}

.searchoption {border-bottom:1px dashed #3399FF; margin-bottom:15px; padding-bottom:10px; overflow:hidden}
.menu {float:left; margin-top:10px; font-size:18px}
.menu a{text-decoration:none; background:f2f2f2; border:1px solid #999; color:#666; padding:5px 10px}
.search {float:right}
.catsearch {border:1px solid #ddd; font-size:16px; padding:5px; margin-bottom:5px; cursor:pointer}
.submitbtn {cursor:pointer; font-size:18px; padding:3px 10px}

.loginform{width:320px; margin:50px auto; border:1px solid #ddd; border-radius:5px; box-shadow:5px 5px 
5px #999; padding:20px}

.adminleft{width:200px; float:left; border-right:1px solid #ddd; margin-right:10px; padding-right:10px}
.adminright{width:577px; float:right}

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