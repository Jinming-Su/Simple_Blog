<?php
    require_once('connect.php');

    $sql = "select * from introduce";
    $query = mysql_query($sql);
    if($query && mysql_num_rows($query)) {
       $contact = mysql_result($query, 0, 'contact');
    } else {
       echo 'nothing';
    }
?>

<!DOCTYPE html>
<head>

</head>
<body>
    <?php require_once('nav.php')?>
    <?php echo $contact?>
</body>

</html>