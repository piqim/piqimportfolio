<!doctype php>
<html lang="en">

<!-- PHP FORM TO DATABASE CODING ; CONNECT TO DATABASE -->
<?php
require 'connection.php';
$idcat = $_GET['id_cat'];

session_start();
?>

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

        <!-- CATEGORY WELCOME MODAL-->
        <?php
        //CODE TO DETERMINE CATEGORY AND GRADIENT FOR MODAL
        $data4 = mysqli_query($con, "SELECT * FROM category WHERE id_cat='$idcat'");
        $info4 = mysqli_fetch_array($data4);

        $cat = $info4['category'];
        $grad;

        //SETS A GRADIENT COLOUR BASED ON THE CATEGORY
        if ($cat == 'General') {
            $grad = 'background: rgb(0,169,255);
          background: linear-gradient(90deg, rgba(0,169,255,1) 35%, rgba(63,0,255,1) 100%);';
        } elseif ($cat == 'World') {
            $grad = 'background: rgb(200,65,54);
          background: linear-gradient(141deg, rgba(200,65,54,1) 0%, rgba(252,70,157,1) 100%);';
        } elseif ($cat == 'Sports') {
            $grad = 'background: rgb(34,193,195);
          background: linear-gradient(304deg, rgba(34,193,195,1) 0%, rgba(253,247,45,1) 100%);';
        } else {
            $grad = 'background: rgb(253,212,29);
          background: linear-gradient(90deg, rgba(253,212,29,1) 50%, rgba(252,157,69,1) 100%);';
        }
        ?>
        <!-- GRADIENT BACKGROUND -->
        <div class="p-4 p-md-5 mb-4 rounded text" style="<?php echo $grad; ?>;">

            <div class="col-md-6 px-0 bg">

                <!--TITLE OF FEATURED BLOG POST-->
                <h1 class="display-4 fst-italic">This is the
                    <?php echo $info4['category']; ?> news section.
                </h1>

                <!-- DESCRIPTION OF FEATURED BLOG POST-->
                <p class="lead my-3">
                    <?php echo $info4['summary']; ?>
                </p>

            </div>
        </div>
    </div>

    <div class="container">

        <!-- CONTAINER FOR POSTS MODAL-->
        <!-- bgcat1 / bgcat2 / bgcat3 / bgcat4 -->
        <h2 class="col row-cols-auto">Recent Posts</h2>
        <div class="row">

            <?php
            //PAGINATION PROCESS
            //INCLUDE PAGINATION LIBRARY
            include_once 'assets/paginationphp/pagination.class.php';

            //CONFIGURATION
            $baseURL = 'category.php?id_cat=4';
            $limit = 8;

            //PAGING LIMIT AND OFFSET
            $offset = !empty($_GET['page']) ? (($_GET['page'] - 1) * $limit) : 0;

            //COUNT ALL RECORDS
            $query3 = $con->query("SELECT COUNT(*) as rowNum FROM news WHERE id_cat='$idcat'");
            $result = $query3->fetch_assoc();
            $rowCount = $result['rowNum'];

            //INITIALISE PAGINATION CLASS
            $pagConfig = array(
                'baseURL' => $baseURL,
                'totalRows' => $rowCount,
                'perPage' => $limit
            );
            $pagination = new Pagination($pagConfig);

            //FETCH RECORDS BASED ON OFSET AND LIMIT AND CATEGORY
            $query3 = mysqli_query($con, "SELECT * FROM news WHERE id_cat = '$idcat' AND approved='1' ORDER BY id_news DESC LIMIT $offset, $limit");

            //I HAVE NO IDEA WHAT'S GOING BUT IT WORKS SO LET'S JUST LEAVE IT AT THAT
            if (!empty($query3) && $query3->num_rows > 0) {
                while ($info2 = $query3->fetch_assoc()) {
                    $newsid = $info2['id_news'];
            ?>

            <!-- Gallery item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">

                <!-- IMAGE BACKGROUND -->
                <div class="bg-white rounded shadow-sm"><img src="img/<?php echo $info2['coverimg']; ?>" alt=""
                        class="img-fluid card-img-top">
                    <div class="p-4">

                        <!--TITLE -->
                        <h5><a href="article.php?id_news=<?php echo $info2['id_news']; ?>" class="text-dark">
                                <?php echo $info2['title']; ?>
                            </a></h5>

                        <!--DESCRIPTION-->
                        <p class="small text-muted mb-0">
                            <?php echo $info2['description']; ?>
                        </p>
                        <div
                            class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">

                            <!-- READ NOW BUTTON-->
                            <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold"><a
                                        class="link-primary"
                                        href="article.php?id_news=<?php echo $info2['id_news']; ?>">Read Now</a></span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- End -->

            <!-- PAGINATION LINKS -->
            <div class="container px-3">
                <?php echo $pagination->createLinks();
            } ?>
            </div>

            <div class="container">
                <footer class="blog-footer">
                    <p>© 2022 Copyright <br>piqim.com</p>
                    <p>
                        <a href="#toppage">Back to top</a>
                    </p>
                </footer>
            </div>


</body>