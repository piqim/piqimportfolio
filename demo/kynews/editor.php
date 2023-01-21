<!DOCTYPE php>

<!-- PHP FORM TO DATABASE CODING -->
<?php
//SMALL SECURITY MEASURE ; SESSION START
include 'security.php';
//CONNECT TO DATABASE
require 'connection.php';

//OBTAINS USER ID FROM COOKIES ; FROM SESSION
$userid = $_SESSION['id_user'];

$query1 = "SELECT type FROM users A INNER JOIN type B ON A.id_type = B.id_type WHERE id_user = '$userid'";
$insert_row1 = mysqli_query($con, $query1);
$row = mysqli_fetch_array($insert_row1);
$type = $row['type'];

//tambah_soalan.php
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
  $title = $_POST['title'];
  $description = $_POST['description'];
  $category = $_POST['category'];
  $content = $_POST['content'];
  $approve;

  //IF STUDENTS ; POST MUST BE REVIEWED
  if($type == 'Student') {
    $approve = '2';
  }
  //IF OTHER THAN STUDENTS (ADMIN N WRITER) ; NO NEED APPROVAL
  else {
    $approve = '1';
  }

  //ADD POST
  $query = "INSERT INTO news(id_user, id_cat, title, content, description, coverimg, approved) VALUES('$userid', '$category', '$title','$content','$description','$newnamepic', '$approve')";
  $insert_row = mysqli_query($con, $query);
  $last_id = mysqli_insert_id($con);

  //POP UP MESSAGE
  echo "<script> alert('Your post has been submitted');
window.location = 'editor.php' </script>";

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
  <title>Post Editor</title>

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

  <!--RICH TEXT EDITOR-->
  <div class="container">
    <div class="my-3">
      <form method="POST" enctype="multipart/form-data">

        <!-- TITLE -->
        <div class="form-floating my-3">
          <input type="text" class="form-control" name="title" placeholder="The Title of This Magnificent Post"
            maxlength="100" required>
          <label for="title">Title</label>
        </div>

        <!-- DESC -->
        <div class="form-floating my-3">
          <input type="text" class="form-control" name="description" placeholder="The Description of This Post"
            maxlength="200" required>
          <label for="description">Description</label>
        </div>

        <!-- CONTENT ; EDITOR -->
        <textarea name="content" id="editor" rows="10" cols="80">
        Bring out your inner George R.R Martin!
        </textarea>
        <!-- REPLACES THE TEXTAREA WITH AN EDITOR -->
        <script> CKEDITOR.replace('editor'); </script>

        <!-- COVER IMAGE -->
        <div class="my-3">
          <p>Upload your Cover Image here</p>
          <input type="file" class="form-control" name="gambar" />
        </div>

        <!-- CATEGORY -->
        <div class="my-3">
          <select class="form-select form-select mb-3" id="cat" placeholder="Category" name="category" required>
            <option selected>Category</option>
            <option value="1">General</option>
            <option value="2">Sports</option>
            <option value="3">World</option>
            <option value="4">Kyuem</option>
          </select>
        </div>

        <!--DISCLAIMER MESSAGE-->
        <p class="text-md-start">As a disclaimer, please do not write your post in this text editor first. Make sure to
          write it in another place in order to ensure your work is not lost. Before your work is published, an admin
          will review your work and then approve it.</p>

        <!--SUBMIT Button-->
        <input class="w-25 my-3 btn btn-lg btn-primary" type="submit" name="submit" value="Post" />
      </form>
    </div>
  </div>

  <!--FOOTER-->
  <div class="container text-center">
    <p class="mt-5 mb-3 text-muted">© 2022 Copyright<br>piqim.com</p>
  </div>

</body>

</html>

