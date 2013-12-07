<?
<<<<<<< HEAD
   $tid = $_GET['tid'];
   $mysql = new SaeMysql();
   try{	
	 $format ="UPDATE weibo SET disagree = disagree +1 where tid = %s";
	 $sql = sprintf($format ,$tid);
     $result =$mysql -> runSql( $sql );
     var_dump($result);
    }catch(exception $e){
    }
    echo '<meta http-equiv="refresh" content="0;url=weibolist.php">';
=======
   $pid = $_GET['pid'];
   $uid = $_GET['uid'];
   $agree = $_GET['agree'];
   $disagree = $_GET['disagree'];
   $result = $_GET['result'];
   $flag = $_GET['flag'];
   $mysql = new SaeMysql();
//$format= "select count(*) from vote where uid = '%s' and pid ='%s'";
//$search= sprintf($format,$uid,$pid);
//echo $search;
//echo $mysql -> runSql( $serach );
     try{	
     $format = "insert into vote(tid,uid,disagree,flag) values('%s','%s','1','0') on duplicate key update disagree=disagree+1";
     $sql  = sprintf($format,$pid,$uid);
         //echo $sql;
         //echo 'begin';
     $mysql -> runSql( $sql );
     echo "vote!";
         //echo 'end';
     /*if( $mysql->errno() != 0 )
     {
        die( "Error:" . $mysql->errmsg() );
     }*/
    }catch(exception $e){
    }
   echo '<meta http-equiv="refresh" content="0;url=weibolist.php">';
>>>>>>> 88b048d66f98b3837b0995cf0db710c6a1f08fc3
?>