<?php  
    require('../class/connect.php'); //引入数据库配置文件和公共函数文件  
    require('../class/db_sql.php'); //引入数据库操作文件  
    $link=db_connect(); //连接MYSQL  
    $empire=new mysqlquery(); //声明数据库操作类  
    $editor=1; //声明目录层次  
      
    $page = intval($_GET['page']);  //获取请求的页数   
    $cla = intval($_GET['cd']);  //获取请求的页数   
    $start = $page*6;   
    $sql=$empire->query("select * from just_ecms_news order by newstime desc limit $start,6");  
    while($r=$empire->fetch($sql)){  
        //$pic=$r[titlepic]?$r[titlepic]:'/e/data/images/notimg.gif';  
        //$sayList[] = array('url'=>$url, 'title'=>$r['title']);   
        $sayList[] = $r;
    }
    echo json_encode($sayList);   
    db_close(); //关闭MYSQL链接  
    $empire=null; //注消操作类变量  
?>  