<?php
// Check if session is not already started
include "../5team/connect_db2.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['fuserid']) && !empty($_POST['fpasswd'])) {
        $fuserid = $_POST['fuserid'];
        $fpasswd = $_POST['fpasswd'];

        // Assuming your database connection is established in connect_db2.php
        include "../5team/connect_db2.php";

        $sql = "SELECT * FROM student_tbl WHERE userid = '$fuserid' AND passwd = '$fpasswd'";
        $result = mysqli_query($connect, $sql);

        if ($result) {
            $row = mysqli_fetch_array($result);

            if ($row) {
                // Successful login
                $_SESSION['ses_userid'] = $fuserid;
                $_SESSION['ses_passwd'] = $fpasswd;

                header("Location: main.php"); // Redirect to main.php
                exit();
            } else {
                echo "Invalid credentials.";
            }
        } else {
            echo "Query error: " . mysqli_error($connect);
        }

    } else {
        echo "Error: 'fuserid' or 'fpasswd' not set in the POST request.";
    }
}
?>