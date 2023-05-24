<?php
require 'connection.php';
require 'security.php';

$del_user = $_GET['id_user'];

//SELECT FROM OTHER TABLES TO DELETE ; FEATURED TABLE
$delete1 = mysqli_query($con, 
"SELECT * FROM users AS s
INNER JOIN news AS t ON s.id_user = t.id_user
WHERE s.id_user = $del_user"
);

//DELETE FROM MAIN TABLE
$infoDel = mysqli_fetch_array($delete1);
$delete1 = $del_user;

//DELETE CURRENT news RECORD
$del1 = mysqli_query($con, "DELETE FROM news WHERE id_user='$delete1'");
//DELETE CURRENT featured RECORD
$del2 = mysqli_query($con, "DELETE FROM featured WHERE id_user='$delete1'");

//DISPLAYS MESSAGE IF SUCCESSFUL
echo "<script>alert('Post is deleted successfully');
window.location='listarticle.php'</script>";
?>