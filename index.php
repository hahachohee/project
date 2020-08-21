<?php
$conn = mysqli_connect("localhost:3306", "root", "rjsdnaufcl");
mysqli_select_db($conn, "opentutorials");
$result = mysqli_query($conn, "SELECT * FROM topic");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB1 - Welcome</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body id="target">
    <header>
        <h1><a href="index.php">WEB Application</a></h1>
    </header>
    <nav>
    <ol>
<?php
while($row = mysqli_fetch_assoc($result)){
     echo '<li><a href="index.php?id='.$row['id'].'">'.$row['title'].'</a></li>';
}
?>
</ol>
    </nav>
    <div id="control">
        <input type="button" value="black" onclick="document.getElementById('target').className = 'black'">
        <input type="button" value="white" onclick="document.getElementById('target').className = 'white'">
        <a href="write.php">Write</a>
    </div>
    <article>
        <?php
        // 만약 id 파라미터의 값이 있다면
        if (isset($_GET['id'])) {
            $sql = 'SELECT * FROM topic WHERE id='.$_GET['id'];
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            echo '<h2>'.$row['title'].'</h2>';
            echo $row['description'];
        } else {
        ?>
            <h2>Wlecome</h2>
            Happy coding!!
        <?php
        }
        ?>

    </article>
</body>

</html>