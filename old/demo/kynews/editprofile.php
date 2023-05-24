<!DOCTYPE php>

<!-- PHP FORM TO DATABASE CODING -->
<?php
//SMALL SECURITY MEASURE ; SESSION START
include 'security.php';
//CONNECT TO DATABASE
require 'connection.php';

//OBTAINS USER ID FROM COOKIES ; FROM SESSION
$userid = $_SESSION['id_user'];

//OBTAINS ORIGINAL UNEDITED VALUES
$query = "SELECT * FROM users WHERE id_user='$userid'";
$data = mysqli_query($con, $query);
$info = mysqli_fetch_array($data);


//GET TYPE OF USER
$query1 = "SELECT type FROM users A INNER JOIN type B ON A.id_type = B.id_type WHERE id_user = '$userid'";
$insert_row1 = mysqli_query($con, $query1);
$row = mysqli_fetch_array($insert_row1);
$type = $row['type'];

//ADD EDITED VALUES
if (isset($_POST['submit'])) {

    //SUBMIT PICTURE
    if ($_FILES['gambar']['name'] == null) {
        $newnamepic = "";
    } else {
        $gambar = $_FILES['gambar']['name'];

        //READ INDEX FILES NAME THEN INDEX FILE TYPE
        $imageArr = explode('.', $gambar);
        $random = rand(10000, 99999);
        $newnamepic = $imageArr[0] . $random . '.' . $imageArr[1];
        $uploadPath = "img/" . $newnamepic;
        $isUploaded = move_uploaded_file($_FILES["gambar"]["tmp_name"], $uploadPath);
    }

    //VARIABLE POSTED
    $name = $_POST['name'];
    $about = $_POST['about'];
    $id = $_POST['id'];
    $pass = $_POST['pass'];

    //UPDATED POST
    $update = mysqli_query($con, "UPDATE users SET id_user = '$id', 
    username = '$name', about = '$about', pass='$pass', profilepic='$newnamepic'
    WHERE id_user = '$userid'");

    //POP UP MESSAGE
    echo "<script> alert('Your profile has been edited.');
    window.location = 'profilemanage.php' </script>";

}
?>

<!-- https://github.com/basecamp/trix -->

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="KY News is an effort designed, maintained and initiated by students from KYUEM in hopes to further bloom our passion and interest for Journalism and Free Speech.">
    <meta name="author" content="Piqim, Hugo 0.104.2 and Bootstrap">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Profile Editor</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/blog/">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom font for this site -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this site -->
    <link href="blog.css" rel="stylesheet">
    <link href="blog2.css" rel="stylesheet">
    <link href="editor.css" rel="stylesheet">

    <!-- CALLS CKEDITOR JS -->
    <script src="assets/ckeditor/ckeditor.js"></script>
</head>

<body>

    <!--HEADER OF PAGE-->
    <div class="container">
        <header class="blog-header lh-1 py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">

                <!--SUBSCRIBE BUTTON
              <div class="col-4 pt-1">
                <a class="link-light" href="#">Subscribe</a>
              </div>
              -->

                <div class="col-4 pt-1">
                    <!--BACK BUTTON-->
                    <a class="link-secondary" href="javascript: history.go(-1)" aria-label="BackButton">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"
                            viewBox="0 0 512 512">
                            <title>Back Button</title>
                            <polyline points="328 112 184 256 328 400"
                                style="fill:none;stroke:rgb(100, 100, 100);stroke-linecap:square;stroke-miterlimit:10;stroke-width:48px" />
                        </svg>
                    </a>
                </div>

                <!--TITLE-->
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="dashboard.php">KYJ</a>
                </div>

                <!-- DIVS TO KEEP TITLE CENTERED-->
                <div class="col-4 d-flex justify-content-end align-items-center"></div>

            </div>
        </header>
    </div>

    <div class="container">
        <div class="my-3">
            <form method="POST" enctype="multipart/form-data">
                <!-- DISPLAY PFP -->
                <div class="flex-shrink-0 text-center my-3">
                    <?php
                    //NO PROFILE PICTURE
                    if ($info['profilepic'] == null) {
                    ?>
                    <img src="img/pfpblank.png" class="img-fluid pfpimg"
                        style="width: 360px; height: 360px; border-radius: 50%; object-fit: cover;">
                    <?php
                    }
                    //HAS PROFILE PICTURE
                    else {
                    ?>
                    <img src="img/<?php echo $info['profilepic']; ?>" class="img-fluid pfpimg"
                        style="width: 360px; height: 360px; border-radius: 50%; object-fit: cover;">
                    <?php } ?>
                </div>

                <div class="my-3">
                    <p>Upload your Profile Photo here</p>
                    <input type="file" class="form-control" name="gambar" />
                </div>

                <!-- NAME -->
                <div class="form-floating my-3">
                    <input type="text" class="form-control" name="name"
                        placeholder="The Name of This Magnificent Person" maxlength="40"
                        value="<?php echo $info['username']; ?>" required>
                    <label for="name">Name</label>
                </div>

                <!-- DESC -->
                <div class="form-floating my-3">
                    <textarea type="text" class="form-control" name="about" placeholder="The Description of This Person"
                        maxlength="500" style="height: 10em;" required><?php echo $info['about']; ?></textarea>
                    <label for="about">Description</label>
                </div>

                <!-- ID -->
                <div class="form-floating my-3">
                    <input type="text" class="form-control" name="id" placeholder="The ID of This Magnificent Person"
                        maxlength="4" value="<?php echo $info['id_user']; ?>" required>
                    <label for="id">ID</label>
                </div>

                <!-- PASS -->
                <div class="form-floating my-3">
                    <input type="password" class="form-control" name="pass"
                        placeholder="The Pass of This Magnificent Person" maxlength="9"
                        value="<?php echo $info['pass']; ?>" required>
                    <label for="pass">Password</label>
                </div>

                <!--DISCLAIMER MESSAGE-->
                <p class="text-md-start">As a disclaimer, if you have no intentions to change any of your other
                    information. Just leave it be.</p>

                <!--SUBMIT Button-->
                <input class="w-25 my-3 btn btn-lg btn-primary" type="submit" name="submit" value="Save Changes" />
            </form>
        </div>
    </div>

    <!--FOOTER-->
    <div class="container text-center">
        <p class="mt-5 mb-3 text-muted">© 2022 Copyright<br>piqim.com</p>
    </div>

</body>

</html>