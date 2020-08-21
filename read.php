<?php
$conn = mysqli_connect("localhost:3306", "root", "rjsdnaufcl");
mysqli_select_db($conn, "opentutorials");
$result = mysqli_query($conn, "SELECT * FROM topic");
?>
<ol>
<?php
while($row = mysqli_fetch_assoc($result)){
     echo '<li><a href="read.php?id='.$row['id'].'">'.$row['title'].'</a></li>';
}
?>
</ol>
<article>
<?php
$sql = 'SELECT * FROM topic WHERE id='.$_GET['id'];
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
echo '<h2>'.$row['title'].'</h2>';
echo $row['description'];
?>
</article>