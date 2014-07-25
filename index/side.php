<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Accordion Menu Using jQuery</title>
<script type="text/javascript" language="javascript"
	src="../public/js/jquery.js"></script>
<script type="text/javascript">
<!--//---------------------------------+
//  Developed by Roshan Bhattarai 
//  Visit http://roshanbh.com.np for this script and more.
//  This notice MUST stay intact for legal use
// --------------------------------->
$(document).ready(function()
{
	//slides the element with class "menu_body" when paragraph with class "menu_head" is clicked 
	$("#firstpane p.menu_head").click(function()
    {
		$(this).css({backgroundImage:"url(../public/images/down.png)"}).next("div.menu_body").slideToggle(300).siblings("div.menu_body").slideUp("slow");
       	$(this).siblings().css({backgroundImage:"url(../public/images/left.png)"});
	});
	//slides the element with class "menu_body" when mouse is over the paragraph
	$("#secondpane p.menu_head").mouseover(function()
    {
	     $(this).css({backgroundImage:"url(../public/images/down.png)"}).next("div.menu_body").slideDown(500).siblings("div.menu_body").slideUp("slow");
         $(this).siblings().css({backgroundColor:"#fff"});
	});
});
</script>
<style type="text/css">
body {
	margin: 10px auto;
	font: 75%/120% Verdana, Arial, Helvetica, sans-serif;
	background-color: #0099CC;
	margin-left: 8px;
}

.menu_list {
	width: 150px;
}

.menu_head {
	padding: 10px 10px;
	cursor: pointer;
	position: relative;
	margin: 2px;
	font-weight: bold;
	background: #eef4d3 url(../public/images/left.png) center right
		no-repeat;
	font-size: 17px;
}

.menu_body {
	display: none;
}

.menu_body a:LINK {
	display: block;
	padding: 16px;
	color: #006699;
	background-color: #EFEFEF;
	padding-left: 50px;
	font-weight: bold;
	text-decoration: none;
	font-size: 15px;
}

.menu_body a:hover {
	color: #000000;
	text-decoration: underline;
}
</style>
</head>
<body>


	<div style="float: left;">
		<!--This is the second division of right-->
		
		<div class="menu_list" id="secondpane">
			<!--Code for menu starts here-->
			<p class="menu_head">用户管理</p>
			<div class="menu_body">
				<a href="../user/index.php" target="manager">查看</a> <a
					href="../user/add.php" target="manager">添加</a>
			</div>
			<p class="menu_head">新闻管理</p>
			<div class="menu_body">
				<a href="../news/index.php" target="manager">查看</a> <a
					href="../news/add.php" target="manager">添加</a>
			</div>
			<p class="menu_head">成员管理</p>
			<div class="menu_body">
				<a href="../member/index.php" target="manager">查看</a> <a
					href="../member/add.php" target="manager">添加</a>
			</div>
			<p class="menu_head">成果展示</p>
			<div class="menu_body">
				<a href="../produce/index.php" target="manager">查看</a> <a
					href="../produce/add.php" target="manager">添加</a>
			</div>
			<p class="menu_head">活动管理</p>
			<div class="menu_body">
				<a href="../activity/index.php" target="manager">查看</a> <a
					href="../activity/add.php" target="manager">添加</a>
			</div>
			<p class="menu_head">留言管理</p>
			<div class="menu_body">
				<a href="../guestbook/index.php" target="manager">查看</a>
			</div>
			<p class="menu_head">下载管理</p>
			<div class="menu_body">
				<a href="../download/index.php" target="manager">查看</a> <a
					href="../download/add.php" target="manager">添加</a>
			</div>
			<p class="menu_head">公告展示</p>
			<div class="menu_body">
				<a href="../notice/index.php" target="manager">查看</a> <a
					href="../notice/add.php" target="manager">添加</a>
			</div>
		</div>
		<!--Code for menu ends here-->
	</div>



</body>
</html>
