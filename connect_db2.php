<?php
// Check if session is not already started

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$host = "localhost";
$user = "root";
$passwd = "";
$database = "5team_db";
$connect = mysqli_connect($host, $user, $passwd, $database) or die("Connection error"); // Connect to DB

// Check if 'ses_userid' and 'ses_passwd' are set in $_SESSION
if (isset($_SESSION['ses_userid']) && isset($_SESSION['ses_passwd'])) {
    $fuserid = $_SESSION['ses_userid'];
    $fpasswd = $_SESSION['ses_passwd'];

    $sql = "SELECT * FROM student_tbl WHERE userid = '$fuserid' AND passwd = '$fpasswd'";
    $res = mysqli_query($connect, $sql);

    if ($res) {
        $list = mysqli_num_rows($res);

        if ($list) {
            // Credentials exist in the database


            // Add any further logic you need here...

        } else {
            echo "Invalid credentials.";
        }
    } else {
        echo "Query failed: " . mysqli_error($connect);
    }
} else {
    echo "로그인하지 않았습니다.";
}

// Close the database connection
?>