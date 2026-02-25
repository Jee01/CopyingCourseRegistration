<?php
session_start(); // Start the session

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DONGDUK UNIVERSITY</title>
    <style>
        #signup-screen {
            display: none;
        }
    </style>
</head>
<body style="background-color: #e9f0f5;">
<script>
    function chk_logform() {
        if (login_form.fuserid.value == "") {
            alert('● Please enter [ID].');
            login_form.fuserid.focus();
            return false;
        } else if (login_form.fpasswd.value == "") {
            alert('● Please enter [password].');
            login_form.fpasswd.focus();
            return false;
        } else {
            return true;
        }
    }
</script>
<div style="max-width: 7xl; margin: 0 auto; display: flex; justify-content: space-between; align-items: center;">
    <div>
        <h1>DEU 수강 신청 시스템</h1>
        <p>해당 사이트는 크롬 브라우저에 최적화 되어있으며</p>
        <p>- 권장 해상도는 1600 * 900 입니다.</p>
    </div>

    <form name="login_form" action="login.php" method="post" onsubmit="return chk_logform();">
        <div style="background-color: white; padding: 16px; box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.1);">
            <label for="username">ID</label>
            <input type="text" name="fuserid" id="fuserid" placeholder="id" style="border: 1px solid #ccc; padding: 8px; display: block; width: 100%;" />
            <label for="password">Password</label>
            <input type="password" name="fpasswd" id="fpasswd" placeholder="password" style="border: 1px solid #ccc; padding: 8px; display: block; width: 100%;" />
            <button type="submit" name="Submit" style="background-color: #0073e6; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; display: block; width: 100%; font-weight: bold;">Login</button>
            <div style="display: flex; justify-content: space-between; font-size: 12px; color: #0073e6; margin-top: 8px;">
                <a href="add_form.php">회원가입</a>
            </div>
            <div style="display: flex; justify-content: space-between; font-size: 12px; color: #0073e6; margin-top: 8px;">
                <a href="main.php">메인메뉴</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>