<!doctype php>
<html lang="en">

<!-- PHP FORM TO DATABASE CODING ; CONNECT TO DATABASE -->
<?php 
  require 'connection.php';

  session_start();
  //MODUL 1 ; ADDED APPROVAL METHOD WHERE APPROVED MUST BE 1 BEFORE IT IS DISPLAYED
  $data1 = mysqli_query($con, "SELECT * FROM featured as a INNER JOIN news as b ON a.id_news = b.id_news WHERE modul='1' and approved='1'");
  $info1 = mysqli_fetch_array($data1);
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- SEO GOOGLE -->
  <meta name="description" content="KY News is an effort designed, maintained and initiated by students from KYUEM in hopes to further bloom our passion and interest for Journalism and Free Speech." />
  <meta name="author" content="Piqim, KY News and Bootstrap" />
  <meta name="generator" content="KY News" />
  <meta name="robots" content="index, follow, general, sports, world, kyuem" />
  <meta name="keywords" content="base, scholars, scholarship, khazanah, petronas, bank negara, BASE Initiative, help, student, jpa, mara, biasiswa, spm, sijil pelajaran malaysia, malaysia, afterschool, kpm, pendidikan, khazanah, 9A+. 10A+, straight A, straight A's, tiktok spm, zaim qhodi, anwar ibrahim, kyuem, news, berita, berita, kolej yayasan uem, qiab, alevels, cambridge, oxford, lembah beringin, tanjung malim"/>

  <link rel="canonical" href="piqim.com">
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
  </style>

  <!-- Custom font for this site -->
  <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
  <!-- Custom styles for this site -->
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

  <div class="container">

    <!--FEATURED BLOG POST MODUL 1-->
    <div class="p-4 p-md-5 mb-4 rounded text-bg-light" style="background-image: url(img/<?php echo $info1['coverimg']; ?>);">
      <div class="col-md-6 px-0 bg">

        <!--TITLE OF FEATURED BLOG POST-->
        <h1 class="display-4 fst-italic text-shadow-3 text-light">
        <?php echo $info1['title']; ?></h1>

        <!-- DESCRIPTION OF FEATURED BLOG POST-->
        <p class="lead my-3 text-shadow-3 text-light">
        <?php  echo $info1['description']; ?></p>

        <!-- CONTINUE READING POST ; EDIT GET METHOD-->
        <p class="lead mb-0"
        style="
        -webkit-text-stroke-width: 0.2px;
        -webkit-text-stroke-color: black;">
        <a href="article.php?id_news=<?php echo $info1['id_news']; ?>" class="text-light fw-bold">Continue reading...</a></p>
      </div>
    </div>
  </div>

  <div class="container">

    <!-- CONTAINER FOR FEATURED POSTS MODAL-->
    <!-- bgcat1 / bgcat2 / bgcat3 / bgcat4 -->
    <h2 class="col row-cols-auto">Featured Posts</h2>
    <div class="row">

      <?php 
      //MODUL 2 WHILE LOOP
      $data2 = mysqli_query($con, "SELECT * FROM featured as a INNER JOIN news as b ON a.id_news = b.id_news WHERE modul='2' AND approved='1'");

      while ($info2 = mysqli_fetch_array($data2)) {
      $newsid = $info2['id_news'];

      $data3 = mysqli_query($con, "SELECT * FROM news AS a INNER JOIN category AS b ON a.id_cat = b.id_cat WHERE id_news = '$newsid'");
      $info3 = mysqli_fetch_array($data3);
      
      $cat = $info3['category'];
      $colour;
      
      //CONVERT CATEGORY ID into CATEGORY and SET COLOUR ; YES I KNOW IT'S INEFFICIENT BUT IT WORKS AND ITS LIKE 2.25 AM RN PLIZLA
      if($cat == 'General') {
        $colour = 'bgcat1';
      }
      elseif($cat == 'World') {
        $colour = 'bgcat2';
      }
      elseif($cat == 'Sports') {
        $colour = 'bgcat3';
      }
      else {
        $colour = 'bgcat4';
      }
      ?>

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="img/<?php echo $info2['coverimg']; ?>" alt="" class="img-fluid card-img-top">
          <div class="p-4">

            <!--TITLE -->
            <h5><a href="article.php?id_news=<?php echo $info2['id_news']; ?>" class="text-dark"><?php echo $info2['title']; ?></a></h5>
            
            <!--DESCRIPTION-->
            <p class="small text-muted mb-0"><?php echo $info2['description']; ?></p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">

              <!-- READ NOW BUTTON-->
              <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold"><a class="link-primary" href="article.php?id_news=<?php echo $info2['id_news']; ?>">Read Now</a></span></p>
                    
              <!--CATEGORY-->      
              <div class="badge <?php echo $colour; ?> px-3 rounded-pill font-weight-normal"><?php   echo $cat; ?></div>


            </div>

          </div>
        </div>
      </div>
      <?php } ?>
      <!-- End -->

    <div class="container">
      <footer class="blog-footer">
        <p>© 2022 Copyright <br>piqim.com</p>
        <p>
          <a href="#toppage">Back to top</a>
        </p>
      </footer>
    </div>


</body>