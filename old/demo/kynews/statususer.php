<!DOCTYPE php>

<?php
require 'connection.php';
include 'security.php';

//GET USER ID
$userid = $_GET['id_user'];

//OBTAIN ID OF USERs
$queryuser = "SELECT * FROM users AS a INNER JOIN type AS b ON a.id_type = b.id_type";
$datauser = mysqli_query($con, $queryuser);
$info1 = mysqli_fetch_array($datauser);

//TYPE OF USER
$usertype = $info1['type'];

//INSERT INTO type
if (isset($_POST['type'])) {
    //VARIABLE WITH THE DATA TO BE SENT
    $type = $_POST['type'];

    //UPDATED POST
    $update = mysqli_query($con, "UPDATE users SET id_type = '$type' WHERE id_user = '$userid'");
    echo "<script> alert('Your change has been recorded.');
    window.location = 'usermanage.php' </script>";
}
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="KY News is an effort designed, maintained and initiated by students from KYUEM in hopes to further bloom our passion and interest for Journalism and Free Speech.">
    <meta name="author" content="Piqim, Hugo 0.104.2 and Bootstrap">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Status Process</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/blog/">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom font for this site -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this site -->
    <link href="blog.css" rel="stylesheet">
    <link href="blog2.css" rel="stylesheet">
    <link href="editor.css" rel="stylesheet">
</head>

<body>
    <div class="container p-3">

        <form method="POST" enctype="multipart/form-data">
            <h4>Change the status of the user</h4>
            <div class="my-3">

                <p>The user <strong>
                        <?php echo $info1['username']; ?>
                    </strong> is currently a <strong>
                        <?php echo $info1['type']; ?>
                    </strong>.</p>
                <select class="form-select form-select mb-3" id="type" placeholder="User Type" name="type" required>
                    <option value="1">Student</option>
                    <option value="2">Writer</option>
                </select>
                <!-- SUBMIT BUTTON -->
                <button class="w-100 btn btn-lg btn-primary" type="submit">Change</button>

            </div>
        </form>

    </div>
    </form>


</body>

</html>