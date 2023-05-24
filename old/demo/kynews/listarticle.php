<!doctype php>

<!-- PHP FORM TO DATABASE CODING -->
<?php
/* To differentiate the output between admin user and other user, my method is really inefficient af
if youre a junior and youre reading my code with disgust, im sorry. Good luck tho, dis project could
potentially have propelled me to some ivy league unis edi tho so lol. */


//CONNECT TO DATABASE
require 'connection.php';
//SESSION STARTS and SMALL SECURITY MEASURE
include 'security.php';

//OBTAIN ID OF CURRENT USER ; ADMIN
$userid = $_SESSION['id_user'];
$queryuser = "SELECT * FROM users WHERE id_user = '$userid'";
$datauser = mysqli_query($con, $queryuser);
$infouser = mysqli_fetch_array($datauser);
//TYPE OF USER
$usertype = $infouser['id_type'];

//I HAVE NO IDEA GOD
$queryadmin =
  "SELECT * FROM news AS a 
INNER JOIN users AS b 
INNER JOIN category AS d
ON a.id_user = b.id_user 
AND a.id_cat = d.id_cat
WHERE approved='1'";

$queryuser =
  "SELECT * FROM news AS a 
INNER JOIN users AS b 
INNER JOIN category AS d
ON a.id_user = b.id_user 
AND a.id_cat = d.id_cat
WHERE approved='1' AND a.id_user='$userid'";

//QUERY FOR FEATURED POSTS
$query1 = "SELECT * FROM featured";

//DISPLAYS ALL POSTS FOR ADMIN
$data1 = mysqli_query($con, $queryadmin);

//DISPLAYS FEATURED POSTS
$data2 = mysqli_query($con, $query1);

//Sumting
$data3 = mysqli_query($con, $queryuser);
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description"
    content="KY News is an effort designed, maintained and initiated by students from KYUEM in hopes to further bloom our passion and interest for Journalism and Free Speech.">
  <meta name="author" content="Piqim, Hugo 0.104.2 and Bootstrap">
  <meta name="generator" content="Hugo 0.104.2">
  <title>List of Posts</title>

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
    <h1 class="h3 mb-3 fw-normal my-3 text-center">List of Posts</h1>
    <p class="mb-3 fw-normal my-3 text-secondary text-sm-center">This is a list of posts that are posted by every single
      type of users. You may edit, delete and feature them as need be.</p>

    <!-- TABLE OF REVIEWABLE POSTS-->
    <table class="table table-responsive table-striped table-dark">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Category</th>
          <th scope="col">Writer</th>

          <?php
          //DETERMINES WHETHER USER IS ADMIN OR NOT
          if ($usertype == '3') { ?>
          <th scope="col">Featured</th>
          <?php } ?>

          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>

      <!-- POSTS LIST -->
      <tbody>
        <?php
        $no = 1;
        if ($usertype == '3') {
          while ($info1 = mysqli_fetch_array($data1)) {
            $newsid = $info1['id_news'];

            //FETCH FEATURED DATA
            $query1 = "SELECT * FROM featured WHERE id_news = '$newsid'";
            $data2 = mysqli_query($con, $query1);
            $info2 = mysqli_fetch_array($data2);
            $rownum = mysqli_num_rows($data2);
            //DETERMINE MODUL TYPE AND IF FEATURED
            if ($rownum == 1 || $rownum == 2) {
              $feature = $info2['modul'];
            } else {
              //IF NULL, WILL NOT BE SHOWN
              $feature = '0';
            }
        ?>


        <tr>
          <!-- NUMBERS -->
          <th scope="row">
            <?php echo $no; ?>
          </th>
          <!-- TITLE -->
          <td>
            <?php echo $info1['title']; ?>
          </td>
          <!-- DESCRIPTION -->
          <td>
            <?php echo $info1['description']; ?>
          </td>
          <!-- CATEGORY -->
          <td>
            <?php echo $info1['category']; ?>
          </td>
          <!-- WRITER -->
          <td>
            <?php echo $info1['username']; ?>
          </td>
          <!-- FEATURED ; FOR ADMINS ONLY -->
          <?php
            //DETERMINES WHETHER USER IS ADMIN OR NOT
            if ($usertype == '3') { ?>
          <td class="text-center">
            <?php
              //PROCESS TO UNFEATURE IF ALREADY FEATURE ; DELETE RECORD FROM FEATURE TABLE
              if ($feature == '1' || $feature == '2') {
            ?>
            <a class="btn btn-success my-1" href="featureprocess.php?id_news=<?php echo $newsid ?>">&#x2713;</a>
            <?php
              }
              //PROCESS TO FEATURE IF ALREADY FEATURE ; ADD RECORD TO FEATURE TABLE
              else {
            ?>
            <a class="btn btn-warning my-1" href="featureprocess.php?id_news=<?php echo $newsid ?>">&#10005;</a>
            <?php
              }
            ?>
          </td>
          <?php } ?>
          <!-- EDIT -->
          <td class="text-center">
            <a class="btn btn-primary my-1" href="editarticle.php?id_news=<?php echo $newsid ?>">&#8594;</a>
          </td>
          <!-- DELETE -->
          <td class="text-center">
            <a class="btn btn-danger my-1" href="delarticle.php?id_news=<?php echo $newsid ?>">D</a>
          </td>
        </tr>

        <?php $no++;
          }
        }

        //IF NOT ADMIN
        else {
          while ($info1 = mysqli_fetch_array($data3)) {
            $newsid = $info1['id_news'];

            //FETCH FEATURED DATA
            $query1 = "SELECT * FROM featured WHERE id_news = '$newsid'";
            $data2 = mysqli_query($con, $query1);
            $info2 = mysqli_fetch_array($data2);
            $rownum = mysqli_num_rows($data2);
            //DETERMINE MODUL TYPE AND IF FEATURED
            if ($rownum == 1 || $rownum == 2) {
              $feature = $info2['modul'];
            } else {
              //IF NULL, WILL NOT BE SHOWN
              $feature = '0';
            }
        ?>


        <tr>
          <!-- NUMBERS -->
          <th scope="row">
            <?php echo $no; ?>
          </th>
          <!-- TITLE -->
          <td>
            <?php echo $info1['title']; ?>
          </td>
          <!-- DESCRIPTION -->
          <td>
            <?php echo $info1['description']; ?>
          </td>
          <!-- CATEGORY -->
          <td>
            <?php echo $info1['category']; ?>
          </td>
          <!-- WRITER -->
          <td>
            <?php echo $info1['username']; ?>
          </td>
          <!-- FEATURED ; FOR ADMINS ONLY -->
          <?php
            //DETERMINES WHETHER USER IS ADMIN OR NOT
            if ($usertype == '3') { ?>
          <td class="text-center">
            <?php
              //PROCESS TO UNFEATURE IF ALREADY FEATURE ; DELETE RECORD FROM FEATURE TABLE
              if ($feature == '1' || $feature == '2') {
            ?>
            <a class="btn btn-success my-1" href="featureprocess.php?id_news=<?php echo $newsid ?>">&#x2713;</a>
            <?php
              }
              //PROCESS TO FEATURE IF ALREADY FEATURE ; ADD RECORD TO FEATURE TABLE
              else {
            ?>
            <a class="btn btn-warning my-1" href="featureprocess.php?id_news=<?php echo $newsid ?>">&#10005;</a>
            <?php
              }
            ?>
          </td>
          <?php } ?>
          <!-- EDIT -->
          <td class="text-center">
            <a class="btn btn-primary my-1" href="editarticle.php?id_news=<?php echo $newsid ?>">&#8594;</a>
          </td>
          <!-- DELETE -->
          <td class="text-center">
            <a class="btn btn-danger my-1" href="delarticle.php?id_news=<?php echo $newsid ?>">D</a>
          </td>
        </tr>

        <?php $no++;
          }
        } ?>


      </tbody>
    </table>

  </div>




</body>

</html>