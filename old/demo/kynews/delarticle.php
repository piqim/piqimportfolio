<?php
require 'connection.php';
require 'security.php';

$del_news = $_GET['id_news'];

//SELECT FROM OTHER TABLES TO DELETE ; FEATURED TABLE
$delete1 = mysqli_query($con, 
"SELECT * FROM news AS s
INNER JOIN featured AS t ON s.id_news = t.id_news
WHERE s.id_news = $del_news"
);

//DELETE FROM MAIN TABLE
$infoDel = mysqli_fetch_array($delete1);
$delete1 = $del_news;

//DELETE CURRENT news RECORD
$del1 = mysqli_query($con, "DELETE FROM news WHERE id_news='$delete1'");
//DELETE CURRENT featured RECORD
$del2 = mysqli_query($con, "DELETE FROM featured WHERE id_news='$delete1'");

//DISPLAYS MESSAGE IF SUCCESSFUL
echo "<script>alert('Post is deleted successfully');
window.location='listarticle.php'</script>";
?>