<?php

    require_once('../connect.php');
    //take the info into base
    //print_r($_POST);

    $id = $_POST['id'];
    $title = $_POST['title'];
    if(!(isset($title)&&!empty($title))) {
        echo "<script>alert('title must be filled!');window.location.href='article.add.php'</script>";
    }
    $author = $_POST['author'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $dateline = time();

    $updatesql = "update article set title = '$title', author = '$author', description = '$description', content = '$content', dateline = $dateline where id = $id ";

    if(mysql_query($updatesql)) {
        echo "<script>alert('modify successfully');window.location.href='article.manage.php'</script>";
    } else {
        //echo mysql_error();
        echo "<script>alert('modify unsuccessfully');window.location.href='article.add.php'</script>";
    }
?>


