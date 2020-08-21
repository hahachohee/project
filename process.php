<?php
$conn = mysqli_connect("localhost:3306", "root", "rjsdnaufcl");
mysqli_select_db($conn, "opentutorials");
$sql = 'INSERT INTO topic (title, description, author, created)
        VALUES(
            "'.$_POST['title'].'",
            "'.$_POST['description'].'",
            "'.$_POST['author'].'",
            NOW()
        )
';
mysqli_query($conn, $sql);
header('Location: /project/index.php');
?>