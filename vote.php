 <?
    //include_once( 'config.php' );
    //include_once( 'saetv2.ex.class.php' );
	//$c = new SaeTClientV2( WB_AKEY , WB_SKEY , $_SESSION['token']['access_token'] );
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>发起投票</title>
</head>
<body>
 <?  
   
    $mysql = new SaeMysql();
    try{	
     $format = "insert into weibo(tid,text,uid,time) values('%s','%s','%s','%s')";
     $format1 = "insert into usrinfo(uid,screen_name,description) values('%s','%s','%s')";
     $sql  = sprintf($format,$_GET['tid'],$_GET['text'],$_GET['uid'],$_GET['created_at']);
     $sql1 = sprintf($format1,$_GET['uid'],$_GET['screen_name'],$_GET['description']);
     $mysql -> runSql( $sql );
     $mysql -> runSql( $sql1); 
    }catch(exception $e){
    }
	/*if( isset($_GET['text']) ) {
	$ret = $c->update( $_GET['text'].'这是不是真的');	
	if ( isset($ret['error_code']) && $ret['error_code'] > 0 ) {
		echo "<p>发送失败，错误：{$ret['error_code']}:{$ret['error']}</p>";
	}
	else {
		echo "<p>发送成功</p>";
	}
}*/
	 //echo '<meta http-equiv="refresh" content="0;url=weibolist.php">';
?>
</body>