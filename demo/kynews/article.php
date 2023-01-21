<!doctype PHP>

<?php
require 'connection.php';
session_start();
$newsid = $_GET['id_news'];

//DATA NEWS
$data = mysqli_query($con, "SELECT * FROM news AS a INNER JOIN category AS b ON a.id_cat = b.id_cat WHERE id_news = '$newsid'");
$info = mysqli_fetch_array($data);

//category id
$cat = $info['category'];
//user id
$userid = $info['id_user'];

//DATA USER FROM ID USER OF NEWS DATA
$data1 = mysqli_query($con, "SELECT * FROM users WHERE id_user = '$userid'");
$info1 = mysqli_fetch_array($data1);

?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description"
    content="KY News is an effort designed, maintained and initiated by students from KYUEM in hopes to further bloom our passion and interest for Journalism and Free Speech.">
  <meta name="author" content="Piqim, Hugo 0.104.2 and Bootstrap">
  <meta name="generator" content="Hugo 0.104.2">
  <title>KYUEM News Website</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/blog/">
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

    .pfpimg {
      object-fit: cover;
      background-size: cover;
      background-position: center;
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="blog.css" rel="stylesheet">
  <link href="blog2.css" rel="stylesheet">
</head>

<body>

  <!--HEADER OF PAGE-->
  <div class="container" id="toppage">
    <header class="blog-header lh-1 py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">

        <!--SUBSCRIBE BUTTON
            <div class="col-4 pt-1">
              <a class="link-light" href="#">Subscribe</a>
            </div>
            -->

        <div class="col-4 pt-1">
          <!--SEARCH BUTTON-->
          <a class="link-secondary" href="#" aria-label="Search">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
              stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"
              viewBox="0 0 24 24">
              <title>Search</title>
              <circle cx="10.5" cy="10.5" r="7.5" />
              <path d="M21 21l-5.2-5.2" />
            </svg>
          </a>
        </div>

        <!--TITLE-->
        <div class="col-4 text-center">
          <a class="blog-header-logo text-dark" href="index.php">KYJ</a>
        </div>

        <div class="col-4 d-flex justify-content-end align-items-center">
          <!--SIGN UP BUTTOn-->
          <a class="btn btn-sm btn-outline-secondary" href="signup.php">Sign up</a>
        </div>
      </div>
    </header>

    <!-- NAV SCROLLBAR-->
    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between">
        <a class="p-2 link-secondary" id="sec1" href="category.php?id_cat=1">General</a>
        <a class="p-2 link-secondary" id="sec2" href="category.php?id_cat=2">Sports</a>
        <a class="p-2 link-secondary" id="sec3" href="category.php?id_cat=3">World</a>
        <a class="p-2 link-secondary" id="sec4" href="category.php?id_cat=4">Kyuem</a>
      </nav>
    </div>
  </div>

  <main class="container">

    <!-- BLOG POST: NEWS ARTICLE-->
    <div class="row g-5">
      <div class="col-md-8">

        <article class="blog-post">
          <!--TITLE ; CATEGORY ; DATE ; WRITER-->
          <h2 class="blog-post-title mb-1">
            <?php echo $info['title']; ?>
          </h2>
          <p class="blog-post-meta">Category:
            <?php echo $cat ?>
          </p>
          <p class="blog-post-meta"> Posted on
            <?php echo $info['dates']; ?> by <a href="profile.php?id_user=<?php echo $info1['id_user']; ?>">
              <?php echo $info1['username'] ?>
            </a>
          </p>

          <!--COVER IMAGE-->
          <img src="img/<?php echo $info['coverimg'] ?>" class="img-fluid my-3">

          <!-- MAIN ARTICLE DESCRIPTION -->
          <div class="col my-3 p-3 bg-light rounded">
            <h4 class="fst-italic text-secondary">Description</h4>
            <?php echo $info['description']; ?>
          </div>

          <!-- MAIN ARTICLE CONTENT-->
          <div class="col my-3 p-3">
            <h4 class="fst-italic text-secondary">Main Content</h4>
            <?php echo $info['content']; ?>
          </div>


        </article>

        <!--NAVIGATION OLDER AND NEW-->
        <nav class="blog-pagination" aria-label="Pagination">
          <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
          <a class="btn btn-outline-secondary rounded-pill disabled">Newer</a>
        </nav>

      </div>

      <!-- ABOUT WRITER-->
      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
          <div class="p-4 mb-3 bg-light rounded">
            <h4 class="fst-italic text-center">About Writer</h4>

            <!-- PFP OF WRITER -->
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

            <!-- NAME OF WRITER -->
            <p class="mb-3">
              Known as
              <?php echo $info1['username']; ?>.
            </p>

            <!-- DESCRIPTION OF WRITER -->
            <p class="mb-0">
              <?php echo $info1['about']; ?>
            </p>
          </div>

          <!--ARCHIVES 
          <div class="p-4">
            <h4 class="fst-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">March 2021</a></li>
              <li><a href="#">February 2021</a></li>
              <li><a href="#">January 2021</a></li>
              <li><a href="#">December 2020</a></li>
              <li><a href="#">November 2020</a></li>
              <li><a href="#">October 2020</a></li>
              <li><a href="#">September 2020</a></li>
              <li><a href="#">August 2020</a></li>
              <li><a href="#">July 2020</a></li>
              <li><a href="#">June 2020</a></li>
              <li><a href="#">May 2020</a></li>
              <li><a href="#">April 2020</a></li>
            </ol>
          </div>
              -->

          <!-- ADS -->
          <div class="p-4">
            <h4 class="fst-italic">Ads</h4>
              <div class="mb-0">

              </div>
          </div>

          <!-- SOCIALS OF KY NEWS -->
          <div class="p-4">
            <h4 class="fst-italic">KYJ Social Media</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>

  </main>

  <!-- FOOTER -->
  <div class="container">
    <footer class="blog-footer">
      <p>© 2022 Copyright <br>piqim.com</p>
      <p>
        <a href="#toppage">Back to top</a>
      </p>
    </footer>
  </div>

</body>

</html>