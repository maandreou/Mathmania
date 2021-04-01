<?php
if (isset($_POST['login-submit'])) {

    require 'dbh.php';

    $emailuid = $_POST['emailuid'];
    $password = $_POST['pwd'];

    if (empty($emailuid) || empty($password)) {
        header("Location: ../IAlogin.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM IAusers WHERE IAuidusers= ? OR IAemailusers= ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../IAlogin.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $emailuid, $emailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['IApwdusers']);
                if ($pwdCheck == false) {
                    header("Location: ../IAlogin.php?error=wrongpwd");
                    exit();
                } else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['IAidusers'];
                    $_SESSION['userUid'] = $row['IAuidusers'];
                    $_SESSION['userEmail'] = $row['IAemailusers'];

                    header("Location: ../IAmainpage.php?login=success"); //send to home, not IALogin
                    exit();
                } else {
                    header("Location: ../IAlogin.php?error=wrongpwd");
                    exit();
                }
            } else {
                header("Location: ../IAlogin.php?error=nouser");
                exit();
            }
        }
    }
}
else {
    header("Location: ../IAindex.php?error=someProblem");
    exit();
}

?>
