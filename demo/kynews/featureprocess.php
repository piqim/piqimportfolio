<!DOCTYPE php>

<?php
require 'connection.php';
include 'security.php';

//OBTAIN NEWS ID FROM GET METHOD
$newsid = $_GET['id_news'];

//FETCH DATA FROM FEATURED ; CHECK IF FEATURED
$query = "SELECT * FROM featured WHERE id_news = '$newsid'";
$data = mysqli_query($con, $query);
$info = mysqli_fetch_array($data);
//NUM OF ROW OF POST ; if 0 then not here if 1 then yes
$rownum1 = mysqli_num_rows($data);
//DETERMINES IF THE POST IS FEATURED
if ($rownum1 == null) {
    $feature = '0';
} else {
    $feature = $info['modul'];
}

//CHECK IF MODAL 1 IS ALREADY OCCUPIED
$query1 = "SELECT * FROM featured WHERE modul = '1'";
$data1 = mysqli_query($con, $query1);
$info1 = mysqli_fetch_array($data);
$rownum = mysqli_num_rows($data1);

//INSERT INTO FEATURED
if (isset($_POST['modul'])) {
    //VARIABLE WITH THE DATA TO BE SENT
    $modal = $_POST['modul'];
    echo $modal;
    echo $newsid;

    $reg = "INSERT INTO featured(id_news, modul) VALUES ('$newsid', '$modal')";
    $query = mysqli_query($con, $reg);
    if ($query) {
        echo "<script>alert('Post is featured successfully');
          window.location='listarticle.php'</script>";
    } else {
        echo "<script>alert('Post cannot be featured');
          window.location='listarticle.php'</script>";
    }
}

//DELETE FROM FEATURED
if (isset($_POST['unfeature'])) {
    $del_news = $_GET['id_news'];

    //SELECT FROM OTHER TABLES TO DELETE ; FEATURED TABLE
    $delete1 = mysqli_query(
        $con,
        "SELECT * FROM news AS s
    INNER JOIN featured AS t ON s.id_news = t.id_news
    WHERE s.id_news = $del_news"
    );

    //DELETE FROM MAIN TABLE
    $infoDel = mysqli_fetch_array($delete1);
    $delete1 = $del_news;

    //DELETE CURRENT featured RECORD
    $del1 = mysqli_query($con, "DELETE FROM featured WHERE id_news='$delete1'");

    //DISPLAYS MESSAGE IF SUCCESSFUL
    echo "<script>alert('Post is unfeatured successfully');
    window.location='listarticle.php'</script>";
}
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="KY News is an effort designed, maintained and initiated by students from KYUEM in hopes to further bloom our passion and interest for Journalism and Free Speech.">
    <meta name="author" content="Piqim, Hugo 0.104.2 and Bootstrap">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Feature Process</title>

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
    <div class="container p-3">
        <?php
        //POST IS ALREADY FEATURED
        if ($rownum1 == '1') { ?>
        <form method="POST" enctype="multipart/form-data">
            <h4>Unfeature the post?</h4>
            <!-- DELETE FROM FEATURED TABLE -->
            <!-- CHECKS IF THE TYPE OF MODAL POST IS USING -->
            <?php if ($feature == '1') { ?>
            <p class=" text-secondary">The post is featured with the <strong>large</strong> modal</p>
            <?php } else { ?>
            <p class=" text-secondary">The post is featured with the <strong>small</strong> modal</p>
            <?php } ?>
            <!-- SUBMIT BUTTON -->
            <input name="unfeature" hidden>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Unfeature</button>
        </form>
        <?php }
        //POST IS NOT FEATURED YET
        else { ?>
        <form method="POST" enctype="multipart/form-data">
            <h4>Choose which type of modal to feature the post in</h4>
            <!-- ADD INTO FEATURED TABLE -->
            <!-- SELECT MODAL TYPE -->
            <div class="my-3">
                <?php
            //HAS BIG MODAL ALREADY
            if ($rownum == 1) { ?>
                <p>A post is already featured in the large modal, please unfeature the said post.</p>
                <select class="form-select form-select mb-3" id="cat" placeholder="Category" name="modul" required>
                    <option value="2">Small Modal</option>
                </select>
                <!-- SUBMIT BUTTON -->
                <button class="w-100 btn btn-lg btn-primary" type="submit">Feature</button>
                <?php
                //BIG MODAL IS UNOCCUPIED
            } else { ?>
                <select class="form-select form-select mb-3" id="cat" placeholder="Category" name="modul" required>
                    <option value="1">Big Modal</option>
                    <option value="2">Small Modal</option>
                </select>
                <!-- SUBMIT BUTTON -->
                <button class="w-100 btn btn-lg btn-primary" type="submit">Feature</button>
                <?php } ?>
            </div>
        </form>
        <?php } ?>
    </div>
    </form>


</body>

</html>