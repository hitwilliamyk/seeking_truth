<?php
session_start();

include_once( 'config.php' );
include_once( 'saetv2.ex.class.php' );

$c = new SaeTClientV2( WB_AKEY , WB_SKEY , $_SESSION['token']['access_token'] );
$ms  = $c->home_timeline(); // done
$uid_get = $c->get_uid();
$uid = $uid_get['uid'];
<<<<<<< HEAD
$msg  = $c->public_timeline();
$user_message = $c->show_user_by_id( $uid);//根据ID获取用户等基本信息
//var_dump($c);
//print_r($ms);
=======
//$msg  = $c->user_timeline($uid);
$user_message = $c->show_user_by_id( $uid);//根据ID获取用户等基本信息

>>>>>>> 88b048d66f98b3837b0995cf0db710c6a1f08fc3
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<<<<<<< HEAD
<title>求真相</title>
=======
<title>新浪微博V2接口演示程序-Powered by Sina App Engine</title>
>>>>>>> 88b048d66f98b3837b0995cf0db710c6a1f08fc3
    <script tppe="text/javascript">
        function agree( pid,uid)
        {
            alert(pid);
            alert(uid);
            window.location.href("./handleagree.php");
        }
        function disagree(pid, uid)
        {
            alert(pid);
            alert(uid);
            window.location.href("./handlwedisagree.php");                                 
        }
<<<<<<< HEAD
		function setTab(name,cursel,n){
	for(i=1;i<=n;i++){
	var menu=document.getElementById(name+i);
	var con=document.getElementById("con_"+name+"_"+i);
	menu.className=i==cursel?"hover":"";
	con.style.display=i==cursel?"block":"none";
	}
	}
    </script>
	<style type="text/css">
	body{font:"宋体";font-size:12px;}
	a:link,a:visited{font-size:12px;color:#666;text-decoration:none;}
	a:hover{color:#ff0000;text-decoration:underline;}
	#Tab{margin:0 auto;width:220px;border:1px solid #BCE2F3;}
	.Menubox{height:28px;border-bottom:1px solid #64B8E4;background:#E4F2FB;}
	.Menubox ul{list-style:none;margin:7px 40px;padding:0;position:absolute;}
	.Menubox ul li{float:left;background:#64B8E4;line-height:20px;display:block;cursor:pointer;width:65px;text-align:center;color:#fff;font-weight:bold;border-top:1px solid #64B8E4;border-left:1px solid #64B8E4;border-right:1px solid #64B8E4;}
	.Menubox ul li.hover{background:#fff;border-bottom:1px solid #fff;color:#147AB8;}
	.Contentbox{clear:both;margin-top:0px;border-top:none;height:181px;padding-top:8px;height:100%;}
	.Contentbox ul{list-style:none;margin:7px;padding:0;}
	.Contentbox ul li{line-height:24px;border-bottom:1px dotted #ccc;}
     </style>
</head>

<body>
	<!--<?=$user_message['screen_name']?>,您好！ 
	<h2 align="left">发送新微博</h2>
	<form action="" >
		<input type="text" name="text" style="width:300px" />
		<input type="submit" value="发布微博"/>
	</form>-->
<?php

=======
    </script>
</head>

<body>
	<?=$user_message['screen_name']?>,您好！ 
	<h2 align="left">发送新微博</h2>
	<form action="" >
		<input type="text" name="text" style="width:300px" />
		<input type="submit" />
	</form>
<?php
if( isset($_REQUEST['text']) ) {
	$ret = $c->update( $_REQUEST['text'] );	//发送微博
	if ( isset($ret['error_code']) && $ret['error_code'] > 0 ) {
		echo "<p>发送失败，错误：{$ret['error_code']}:{$ret['error']}</p>";
	} else {
		echo "<p>发送成功</p>";
	}
}
>>>>>>> 88b048d66f98b3837b0995cf0db710c6a1f08fc3
?>
<input type=button value="刷新" onclick="location.reload()"/> 
<!--<div class="related-list relatedList-tips" style="height:405px">-->  
<?php if( is_array( $ms['statuses'] ) ):
<<<<<<< HEAD
	      $mysql = new SaeMysql();
?>

<div style='border:0px;padding:3px; PADDING:0px; width:auto; height:480px; LINE-HEIGHT: 20px; OVERFLOW: auto; '>
<div id="Tab">
     <div class="Menubox">
        <ul>
            <li id="menu1" onmouseover="setTab('menu',1,2)" class="hover">微博列表</li>
            <li id="menu2" onmouseover="setTab('menu',2,2)" >好友求真相</li>
        </ul>
     </div>
	  <div class="Contentbox"> 
	   <div id="con_menu_1" class="hover">
      <?php foreach( $ms['statuses'] as $item ): ?>
     <div style="padding:10px;margin:5px;border:1px solid #ccc">
       <?php  
			if($item['text']=='转发微博') 
			{
				echo  '这是一条被转发的微博';
				echo  $item['retweeted_status']['text'];
			}  
			else
			  echo $item['text'];
			echo "<br />";
       ?>
=======
	$mysql = new SaeMysql();
?>
<div style='border:0px;padding:3px; PADDING:0px; width:auto; height:480px; LINE-HEIGHT: 20px; OVERFLOW: auto; '>
<?php foreach( $ms['statuses'] as $item ): ?>
<div style="padding:10px;margin:5px;border:1px solid #ccc">
	<?=$item['text'];echo "<br />";?>
>>>>>>> 88b048d66f98b3837b0995cf0db710c6a1f08fc3
    <?php echo '发布于：';?>
    <?=$item['created_at'];echo "<br />";?>
    <?//=$item['id'];?>
    <?php echo '作者：';?>
    <?=$item['user']['name'];echo "<br />";?>
     <?
<<<<<<< HEAD
     $format = "select * from weibo where tid ='%s' ";
	 $search = sprintf($format,$item['idstr']);
	 $exist = $mysql -> getVar($search);
    ?>
	<? 
	$a =4;
	if (!$exist)
    {
	echo '<form action="vote.php" method="get"> 
	    <input type="hidden" name ="tid" value = "'.$item['idstr'].'"> 
		<input type="hidden" name ="text" value ="'.$item['text'].'" > 
		<input type="hidden" name ="uid" value="0" value ="'.$item['user']['idstr'].'"> 
		<input type="hidden" name ="created_at" value="0" value ="'.$item['created_at'].'">
		<input type="hidden" name ="screen_name" value="0" value ="'.$item['user']['screen_name'].'">
		<input type="hidden" name ="description" value="0" value ="'.$item['user']['description'].'">
		<input type="submit" name= "vote" value = "求真相" >
    </form>'; 
   }
    else
	{
         $format1= "select agree from weibo where tid ='%s'";
		 $format2= "select disagree from weibo where tid ='%s'";
		 $search1= sprintf($format1,$item['idstr']);
		 $search2= sprintf($format2,$item['idstr']);
		 $agree= $mysql -> getVar($search1);
		 $disagree= $mysql -> getVar($search2);
		echo '<form style="display:inline;" action="handleagree.php" method="GET"> 
            <input type="hidden" name ="tid" value="'.$item['idstr'].'"> 
            <input type="submit" name="truth"  value="真相'.$agree.'">
			</form>
        <form style="display:inline;" action="handledisagree.php" method="GET">
            <input type="hidden" name ="tid" value="'.$item['idstr'].'"> 
            <input type="submit" name="rumor" value="谣言'. $disagree.'"> 
			</form>';
	}
    ?>
	<? 
=======
     $format1= "select agree from vote where uid = '%s' and tid ='%s'";
     $format2= "select disagree from vote where uid = '%s' and tid ='%s'";
     $search1= sprintf($format1,$item['user']['idstr'],$item['idstr']);
	 $search2= sprintf($format2,$item['user']['idstr'],$item['idstr']);
    // $result= $mysql -> getVar($search);
    // $result= $mysql -> getVar($search);
     $agree= $mysql -> getVar($search1);

     $disagree= $mysql -> getVar($search2);
   //   $result= $mysql -> getVar($search);
    // $result= $mysql -> getVar($search);*/
	//   var_dump($result);

//$agree = $result['agree'];
//echo $agree;
//       $disagree = $result['disagree'];
        
    ?>
    <form style="display:inline;"action="handleagree.php"> <input type="hidden" name ="pid" value="<?echo $item['idstr'];?>"> 
    <input type="hidden" name ="uid" value="<?echo $item['user']['idstr'];?>"> 
    <input type="hidden" name ="agree" value="0" > 
    <input type="hidden" name ="disagree" value="0"> 
    <input type="hidden" name ="result" value="0">
    <input type="hidden" name ="flag" value="0"> 
    <input type="submit" value ="真相 <?echo $agree;?> "/> 
    </form >
    <form style="display:inline;" action="handledisagree.php"> <input type="hidden" name ="pid" value="<?echo $item['idstr'];?>"> 
    <input type="hidden" name ="uid" value="<?echo $item['user']['idstr'];?>"> 
    <input type="hidden" name ="agree" value="0"> 
    <input type="hidden" name ="disagree" value="0"> 
    <input type="hidden" name ="result" value="0">
    <input type="hidden" name ="flag" value="0"> 
    <input type="submit" value ="假象 <?echo $disagree;?>">
    </form>
    <? 
>>>>>>> 88b048d66f98b3837b0995cf0db710c6a1f08fc3
	   $result="投票未结束！";
       if($agree > 10)
           $result="是真相";
       else if($disagree> 10)
           $result="是谣言";
       echo "<div>".$result."</div>";
    ?>
<<<<<<< HEAD
  </div>
=======
    <?php
     try{	
     $format = "insert into weibo(tid,text,uid,time) values('%s','%s','%s','%s')";
     $format1 = "insert into usrinfo(uid,screen_name,description) values('%s','%s','%s')";
     $sql  = sprintf($format,$item['idstr'],$item['text'],$item['user']['idstr'],$item['created_at']);
     $sql1 = sprintf($format1,$item['user']['idstr'],$item['user']['screen_name'],$item['user']['description']);
     $mysql -> runSql( $sql );
     $mysql -> runSql( $sql1);
    }catch(exception $e){
    }
 ?>
    
</div>

>>>>>>> 88b048d66f98b3837b0995cf0db710c6a1f08fc3
<?php endforeach; ?>
</div>

<?php
 $mysql->closeDb();
 endif; ?>
<<<<<<< HEAD
   </div>
    <div id="con_menu_2" style="display:none">
	 </div>
=======

>>>>>>> 88b048d66f98b3837b0995cf0db710c6a1f08fc3
</body>
</html>
