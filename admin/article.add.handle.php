<?php

    require_once('../connect.php');
    //take the info into base
    //print_r($_POST);

    $title = $_POST['title'];
    if(!(isset($title)&&!empty($title))) {
        echo "<script>alert('title must be filled!');window.location.href='article.add.php'</script>";
}
    $author = $_POST['author'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $dateline = time();

    $insertsql = "insert into article(title, author, description, content, dateline) values('$title', '$author', '$description', '$content', $dateline)";
    //echo $insertsql;
    if(mysql_query($insertsql)) {
        echo "<script>alert('release successfully');window.location.href='article.manage.php'</script>";
    } else {
        //echo mysql_error();
        echo "<script>alert('release unsuccessfully');window.location.href='article.add.php'</script>";
    }
?>


