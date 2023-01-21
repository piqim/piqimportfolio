<!doctype php>

<!-- PHP FORM TO DATABASE CODING -->
<?php
//CONNECT TO DATABASE
require 'connection.php';
//SESSION STARTS and SMALL SECURITY MEASURE
include 'security.php';

$userid = $_SESSION['id_user'];

$data1 = mysqli_query($con, "SELECT * FROM users AS a INNER JOIN type AS b ON a.id_type = b.id_type WHERE id_user = '$userid'");
$info1 = mysqli_fetch_array($data1);

$type = $info1['type'];

?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.104.2">
  <title>Profile Management</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .inputpassword {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  </style>

  <!-- Custom Font for this site -->
  <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
  <!-- Custom styles for this site -->
  <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <!-- Main Content -->
    <main class="form-signin w-100 m-auto">

        <!-- logo -->
        <div class="col my-3 text-center">
            <a class="logoheader-logo text-dark" href="dashboard.php">KYJ</a>
        </div>

        <!--Description-->
        <h1 class="h3 mb-3 fw-normal"><?php echo $type; ?> Profile Management</h1>

        <!--Links Students/Writer-->
        <div class="form-floating bg-white border rounded-1 p-2 px-4">
            
            <!-- PFP OF USER -->
            <div class="flex-shrink-0 text-center my-3">
              <?php
              //NO PROFILE PICTURE
              if ($info1['profilepic'] == null) {
              ?>
              <img src="img/pfpblank.png" class="img-fluid pfpimg"
                style="width: 180px; height: 180px; border-radius: 50%; object-fit: cover;">
              <?php
              }
              //HAS PROFILE PICTURE
              else {
                ?>
              <img src="img/<?php echo $info1['profilepic']; ?>" class="img-fluid pfpimg"
                style="width: 180px; height: 180px; border-radius: 50%; object-fit: cover;">
              <?php } ?>
            </div>

            <!-- NAME OF USER -->
            <h5 class="text-dark">Name:</h5>
            <p class="mb-3">
              <?php echo $info1['username']; ?>.
            </p>

            <!-- DESCRIPTION OF USER -->
            <h5 class="text-dark">Description:</h5>
            <p class="mb-3">
              <?php echo $info1['about']; ?>
            </p>

            <!-- PRIVATE INFO -->
            <h5 class="text-dark">Personal Info:</h5>
            <table class="table table-responsive table-striped table-dark">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">ID</th>
                        <th scope="col">Password</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center"><?php echo $info1['id_user']?></td>
                        <td><?php echo $info1['pass']?></td>
                    </tr> 
                </tbody>

              </table>

            <!-- EDIT -->
            <a class="w-100 btn btn-primary my-2" href="editprofile.php">Edit Profile</a>
            <!-- SHARE -->
            <a class="w-100 btn btn-dark my-2" href="profile.php?id_user=<?php echo $userid;?>">Share Profile</a>
        </div>

        <!--FOOTER-->
        <p class="mt-5 mb-3 text-muted">© 2022 Copyright<br>piqim.com</p>
  
    </main>

</body>

</html>