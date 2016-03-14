<?php
    require_once('config.php');
    //连接
    if(!$con = mysql_connect(HOST, USERNAME, PASSWORD)) {
        echo mysql_error();
    }
    //选择
    if(!mysql_select_db('info')) {
        echo mysql_error();
    }
    //定义字符集
    if(!mysql_query('set names utf8')) {
        echo mysql_error();
    }
?>