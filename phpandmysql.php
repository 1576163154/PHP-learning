<?php
    $dbhost = 'localhost:3306';
    $dbuser = "root";
    $dbpwd = "******";
    $dbname = 'test';

    // print phpinfo();

    $connectResult = mysqli_connect($dbhost,$dbuser,$dbpwd);
    var_dump($connectResult);
    echo "<br>";
    if (!$connectResult){
        die("Could not connect:". mysqli_error($connectResult));
    }else{
        echo '数据库连接成功！';
       
    }
    //创建数据库
    $sql = "CREATE DATABASE DB_FROMPHP";
    $res = mysqli_query($connectResult,$sql);
    if (!$res){
        //die("数据库创建失败 : ".mysqli_error($connectResult));

    }else{
        echo("数据库创建成功 <br>");
    }


    //删除数据库
    // $deleteSql = "DROP DATABASE DB_FROMPHP";
    // $deleteRes = mysqli_query($connectResult,$deleteSql);
    // if (!$deleteRes){
    //     die("数据库删除失败 : ".mysqli_error($connectResult));

    // }else{
    //     echo("数据库删除成功 <br>");
    // }


    //选取一个数据库
    mysqli_select_db($connectResult,"DB_FROMPHP");


    //为该数据库创建表
    $createTabSql = "create table tabexp ( ".
                        "id INT NOT NULL AUTO_INCREMENT ,".
                        "name VARCHAR(20) NOT NULL ,".
                        "birthday DATE ,".
                        "PRIMARY KEY(id))
                         ENGINE = InnoDB DEFAULT CHARSET = utf8;";
    $createTabRes = mysqli_query($connectResult,$createTabSql);
    if(! $createTabRes){
       // die("表创建失败 : ".mysqli_error($connectResult)."<br>");
    }else{
        echo("表创建成功 <br>");
    }
    

    
    //mysqli_query("$connectResult","要执行的sql语句！");

    //往表中插入数据
    $strname = "Tom";
    $strnameTwo = "Andy";
    $birthone = "2015-08-09";
    $birthtwo = "2018-08-09";
    $insertSql = "insert into tabexp(name,birthday)".
            "values".
            "('$strname','$birthone');";

    $insertRes = mysqli_query($connectResult,$insertSql);
    if (! $insertRes){
        die("插入数据失败 : ".mysqli_error($connectResult)."<br>");
    }else{
        echo("插入成功 <br>");
    }

    //获取表中信息
    $selectSql = "select id,name,birthday from tabexp";
    $selectRes = mysqli_query($connectResult,$selectSql);
    if (! $selectRes){
        die("查询数据失败 : ".mysqli_error($connectResult)."<br>");
    }else{
        echo("查询成功 <br>");
    }

    //若查询成功，此时$selectRes 是一个以 列名 为key 的关联数组
    while ($row = mysqli_fetch_array($selectRes,MYSQLI_ASSOC)){
        echo $row['id']."   ".$row['name']."   ".$row['birthday']."<br>";
    }

    //查询完之后，进行释放内存操作
    mysqli_free_result($selectRes);

    //关闭连接
    mysqli_close($connectResult);

?>