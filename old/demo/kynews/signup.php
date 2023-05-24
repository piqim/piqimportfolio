<!doctype php>

<!-- PHP FORM TO DATABASE CODING -->
<?php
//CONNECT TO DATABASE
require 'connection.php';

//POST VALUE
if (isset($_POST['id_user'])) {
  //VARIABLE WITH THE DATA TO BE SENT
  $userid = $_POST['id_user'];
  $password = $_POST['pass'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $type = $_POST['id_type'];
  $reg = "INSERT INTO users(id_user, username, pass, email, id_type) VALUES ('$userid', '$username', '$password', '$email', '$type')";
  $query = mysqli_query($con, $reg);
  if ($query) {
    echo "<script>alert('Sign Up Successful');
		window.location='signup.php'</script>";
  } else {
    echo "<script>alert('Sign Up Failed');
		window.location='signup.php'</script>";
  }
}

?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.104.2">
  <title>Sign Up</title>

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

    .form-signin,
    .inputpassword {
      border-radius: 0;
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
    <form method="POST">
      <!-- LOGO -->
      <div class="col my-3 text-center">
        <a class="logoheader-logo text-dark" href="index.php">KYJ</a>
      </div>

      <!--Description-->
      <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

      <!--ID NUMBER-->
      <div class="form-floating">
        <input type="text" class="form-control inputid" name="id_user" placeholder="9999" maxlength="4" minlength="4"
          onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
        <label for="floatingPassword">ID Number</label>
      </div>
      <!--EMAIL-->
      <div class="form-floating">
        <input type="email" class="form-control" name="email" placeholder="name@example.com" maxlength="40" minlength="3" required>
        <label for="floatingInput">Email address</label>
      </div>
      <!--PASSWORD-->
      <div class="form-floating">
        <input type="password" class="form-control inputpassword" name="pass" placeholder="Password" maxlength="9"
          required>
        <label for="floatingPassword">Password</label>
      </div>
      <!--NAME-->
      <div class="form-floating">
        <input type="text" class="form-control inputname" name="username" placeholder="Ali Bin Abu" maxlength="40"
          required>
        <label for="floatingPassword">Full Name</label>
      </div>

      <!--TYPE-->
      <input type="number" size="2" name="id_type" value="1" hidden>
      <!--Value of 1 ; Normal user-->

      <!--SUBMIT Button-->
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
      <p class="mt-3 mb-5">Already on KYJ? <a class="link-info p-1" href="signin.php">Sign in</a></p>
      <p class="mt-5 mb-3 text-muted">© 2022 Copyright<br>piqim.com</p>
    </form>
  </main>

</body>

</html>