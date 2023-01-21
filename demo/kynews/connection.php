<?php
//DATABASE SETUP
//COMPATIBLE SETUP WITH XAMPP
$host = "localhost";
$user = "root";
//PASSWORD
$password = "";
//NAME OF DATABASE (Change as Necessary)
$database = "kynews";
/////////////////////
$con = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
    echo "Database Connection Failed ; You probably fucked up somewhere";
    exit();
}
//SYSTEM INFORMATION SETUP
$systemname = "KYJ";
$logo = "x.svg";

/* Testing Method for Connectivity ; Just remove the Comments to Run the Test

//Test by outputting the amount of tables in the database
$test_query = "SHOW TABLES FROM $database";
$result = mysqli_query($con, $test_query);

$tblCnt = 0;
while($tbl = mysqli_fetch_array($result)) {
  $tblCnt++;
}

if (!$tblCnt) {
  echo "There are no tables<br />\n";
} else {
  echo "There are $tblCnt tables<br />\n";
} 

FOR GODADDY
<?php
//DATABASE SETUP
//COMPATIBLE SETUP WITH XAMPP
$host = "localhost";
$user = "root";
//PASSWORD
$password = "";
//NAME OF DATABASE (Change as Necessary)
$database = "kynews";
/////////////////////
$con = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
    echo "Database Connection Failed ; You probably fucked up somewhere";
    exit();
}
//SYSTEM INFORMATION SETUP
$systemname = "KYJ";
$logo = "x.svg";

/* Testing Method for Connectivity ; Just remove the Comments to Run the Test

//Test by outputting the amount of tables in the database
$test_query = "SHOW TABLES FROM $database";
$result = mysqli_query($con, $test_query);

$tblCnt = 0;
while($tbl = mysqli_fetch_array($result)) {
  $tblCnt++;
}

if (!$tblCnt) {
  echo "There are no tables<br />\n";
} else {
  echo "There are $tblCnt tables<br />\n";
} 
*/

?>