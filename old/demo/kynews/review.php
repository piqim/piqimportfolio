<!doctype html>

<!-- PHP FORM TO DATABASE CODING -->
<?php
//CONNECT TO DATABASE
require 'connection.php';
//SESSION STARTS and SMALL SECURITY MEASURE
include 'security.php';

//OBTAIN ID OF CURRENT USER ; ADMIN
$userid = $_SESSION['id_user'];

$data1 = mysqli_query($con, "SELECT * FROM news WHERE approved = '2'");
?>

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
      <!-- TITLES -->
      <h1 class="h3 mb-3 fw-normal my-3 text-center">Post Review</h1>
      <p class="mb-3 fw-normal my-3 text-secondary text-sm-center">Please review the posts accordingly and determine whether they are elligible to be posted on the website or not. Please note that posts written by the Admin and Writer users do not require approval.</p>
    
      <!-- TABLE OF REVIEWABLE POSTS-->
      <table class="table table-responsive table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

        <!-- POSTS LIST -->
        <tbody>
          <?php
          $no = 1;
          while($info1 = mysqli_fetch_array($data1)) {
            $newsid = $info1['id_news'];
          ?>


          <tr>
            <!-- NUMBERS -->
            <th scope="row"><?php echo $no; ?></th>
            <!-- TITLE -->
            <td><?php echo $info1['title']; ?></td>
            <!-- DESCRIPTION -->
            <td><?php echo $info1['description']; ?></td>
            <!-- ACTIONS -->
            <td class="text-center">
              <!-- APPROVE -->
              <a class="btn btn-success my-1" href="reviewprocess.php?id_news=<?php echo $newsid ?>&approved=1">&#x2713;</a>
              <!-- REJECT -->
              <a class="btn btn-danger my-1" href="reviewprocess.php?id_news=<?php echo $newsid ?>&approved=3">&#10005;</a>
              <!-- READ -->
              <a class="btn btn-light my-1" href="article.php?id_news=<?php echo $newsid ?>">R</a>
            </td>
          </tr>
          
          <?php $no++; } ?>

        </tbody>
      </table>
      
    </div>

    

    
</body>

</html>