<!DOCTYPE html>
<head>
    <title>log in</title>
</head>
<body>
    <?php require_once('nav.php')?>
    <h3>LOG IN</h3>
    <form method="post" action="admin/article.login.handle.php">
        <div>
            USER:
            <input type="text" name="username" required/><br/><br/>
            PASS :
            <input type="password" name="password" required/><br/><br/>
        </div>
            <input type="submit" value="submit">
    </form>
</body>
</html>