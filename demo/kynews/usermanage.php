<!doctype php>

<!-- PHP FORM TO DATABASE CODING -->
<?php

//CONNECT TO DATABASE
require 'connection.php';
//SESSION STARTS and SMALL SECURITY MEASURE
include 'security.php';

?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="KY News is an effort designed, maintained and initiated by students from KYUEM in hopes to further bloom our passion and interest for Journalism and Free Speech.">
    <meta name="author" content="Piqim, Hugo 0.104.2 and Bootstrap">
    <meta name="generator" content="Hugo 0.104.2">
    <title>List of Users</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/blog/">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom font for this site -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this site -->
    <link href="blog.css" rel="stylesheet">
    <link href="blog2.css" rel="stylesheet">
    <link href="editor.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">

</head>

<body>

    <!-- CODE FUNCTION ; FOR LATER
    <div class="form-signin w-100 m-auto" id="a" style="display: block;">
        <form id="codeverify" onSubmit = "return checkPassword(this)" method="POST">

        <h1 class="h3 mb-3 fw-normal text-center">Submit the Security Code to Proceed</h1>

        <div class="form-floating my-3">
            <input type="password" class="form-control inputpassword" id="code1" name="code1" placeholder="Code" maxlength="9"
            required>
            <label for="floatingPassword">Code</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" onclick="checkPassword()" type="submit">Submit</button>
        </form>
    </div>
    -->

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

        <div class="container">
            <!-- TITLES -->
            <h1 class="h3 mb-3 fw-normal my-3 text-center">List of Users</h1>
            <p class="mb-3 fw-normal my-3 text-secondary text-sm-center">This is a list of users that are available in
                the
                system.
                You may view some information, give writer status, delete and others.</p>

            <!-- TABLE OF REVIEWABLE POSTS-->
            <table class="table table-responsive table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">ID</th>
                        <th scope="col">Password</th>
                        <th scope="col">Email</th>
                        <th scope="col text-center">
                            <center>Status</center>
                        </th>
                    </tr>
                </thead>

                <!-- POSTS LIST -->
                <tbody>

            <?php
            //PAGINATION PROCESS
            //INCLUDE PAGINATION LIBRARY
            include_once 'assets/paginationphp/pagination.class.php';

            //CONFIGURATION
            $baseURL = 'usermanage.php';
            $limit = 8;

            //PAGING LIMIT AND OFFSET
            $offset = !empty($_GET['page']) ? (($_GET['page'] - 1) * $limit) : 0;

            //COUNT ALL RECORDS
            $query3 = $con->query("SELECT COUNT(*) as rowNum FROM users");
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
            $query3 = mysqli_query($con, "SELECT * FROM users AS a INNER JOIN type AS b ON a.id_type = b.id_type ORDER BY id_user DESC LIMIT $offset, $limit");

            //I HAVE NO IDEA WHAT'S GOING BUT IT WORKS SO LET'S JUST LEAVE IT AT THAT
            if (!empty($query3) && $query3->num_rows > 0) {
                while ($info1 = $query3->fetch_assoc()) {
                    $usertype = $info1['type'];
                    $userid = $info1['id_user'];
        ?>

                    <tr>
                        <!-- NAME -->
                        <td>
                            <?php echo $info1['username']; ?>
                        </td>
                        <!-- ID -->
                        <td>
                            <?php echo $info1['id_user']; ?>
                        </td>
                        <!-- PASSWORD -->
                        <td>
                            <?php echo $info1['pass']; ?>
                        </td>
                        <!-- EMAIL -->
                        <td>
                            <?php echo $info1['email']; ?>
                        </td>
                        <!-- STATUS -->
                        <td class="text-center">
                            <a class="btn btn-primary my-1" href="statususer.php?id_user=<?php echo $userid ?>">
                                <?php echo $usertype; ?>
                            </a>
                        </td>
                        <!-- DELETE Save for Later Updates
                    <td class="text-center">
                        <a class="btn btn-danger my-1" href="deluser.php?id_user=<?php echo $userid ?>">D</a>
                    </td>
                    -->
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

            <!-- PAGINATION LINKS -->
            <div class="container px-3">
                <?php echo $pagination->createLinks(); } ?>
            </div>

        </div>

    </div>

    <script>
        /* CODE FUNCTION LATER
             function checkPassword(form) {
                    const password2 = "1234";
                    password1 = form.code1.value;
    
                    var x = document.getElementById("a");
                    var y = document.getElementById("b");
    
                    x.style.display = "none";
                    y.style.display = "none";
      
                   
                }
                */
    </script>

</body>

</html>