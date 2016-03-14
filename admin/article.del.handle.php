<?php
    require_once('../connect.php');

    $id = $_GET['id'];
    $deletesql = "delete from article where id = $id";
    if(mysql_query($deletesql)) {
        echo "<script>alert('delete successfully');window.location.href='article.manage.php'</script>";
    } else {
        echo "<script>alert('delete unsuccessfully');window.location.href='article.manage.php'</script>";
    }

?>