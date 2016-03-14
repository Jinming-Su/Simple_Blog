<?php
    require_once('../connect.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    //echo $username,$password;

    if(isset($username) && !empty($username) && isset($password) && !empty($password)) {
        $sql = "select * from user where username = '$username' and password = '$password'";
        //echo $sql;
        $query = mysql_query($sql);
        if($query && mysql_num_rows($query)) {
            echo "<script>alert('login successfully');window.location.href='article.manage.php'</script>";
        } else {
            echo "<script>alert('login unsuccessfully');window.location.href='../article.login.php'</script>";
        }
    }
?>