<div id="notice">

	<div class="htitle">&nbsp;公告</div>
	<div class="zcon">
<?php
include '../../public/config/config.php';
$notic_sql = mysql_query ( "select * from tb_notice 
			order by id desc limit 0 ,3" );
$row = mysql_fetch_array ( $notic_sql );

?>
		<script type="text/javascript">
//添加事件响应函数的函数，与本效果无关
function addEventSimple(obj,evt,fn){
 if(obj.addEventListener){
  obj.addEventListener(evt,fn,false);
 }else if(obj.attachEvent){
  obj.attachEvent('on'+evt,fn);
 }
}
addEventSimple(window,'load',initScrolling);
//保存想要滚动的容器
var scrollingBox;
var scrollingInterval;
//用于记录是否“滚到头”过一次
var reachedBottom=false;
//记录第一次滚到头时候的scrollTop
var bottom;
//初始化滚动效果
function initScrolling(){
 scrollingBox = document.getElementById("scrollText");
 //样式设置，与滚动基本无关，应该用CSS设置。
 scrollingBox.style.height = "260px";
 scrollingBox.style.overflow = "hidden";
 //滚动
 scrollingInterval = setInterval("scrolling()",50);
 //鼠标划过停止滚动效果
 scrollingBox.onmouseover = over;
 //鼠标划出回复滚动效果
 scrollingBox.onmouseout = out; 
}
//滚动效果
function scrolling(){
 //开始滚动,origin是原来scrollTop
 var origin = scrollingBox.scrollTop++;
 //如果到头了
 if(origin == scrollingBox.scrollTop){
  //如果是第一次到头
  if(!reachedBottom){
   scrollingBox.innerHTML+=scrollingBox.innerHTML;
   reachedBottom=true;
   bottom=origin;
  }else{
   //已经到头过，只需回复头接尾的效果
   scrollingBox.scrollTop=bottom;
  }
 }
}
function over(){
 clearInterval(scrollingInterval);
}
function out(){
 scrollingInterval = setInterval("scrolling()",50);
}
</script>
		<div id="scrollText">
			<?php
			
			echo $row ['notice'];
			?>
		</div>


	</div>

</div>
<div id="connect">
	<div class="htitle">&nbsp;链接</div>
	<div class="zcon">

		<a href="http://www.hcnu.edu.cn/"><img src="../images/hcxy1.jpg"
			alt=""></a> <a href="http://222.218.130.75/jixinxi/"><img
			src="../images/jxx1.jpg" alt=""></a>


	</div>
</div>
