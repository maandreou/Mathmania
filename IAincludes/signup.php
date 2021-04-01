<?php
//This page checks if the user made any mistakes in entering their details and lets the correctly filled in form sign up

//Checks if the user clicked the sign up button
if (isset($_POST['signup-submit'])) {
    require 'dbh.php';

    //fetch the information from the sign up form on the website
    $username = $_POST['uid'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    //error handlers

    //check if they left a field empty. If so, display an error message
    if (empty($username) || empty($email) || empty($pwd) || empty($passwordRepeat)) {
        header("Location: ../IASignup.php?error=emptyfields&uid=" . $username . "&email=" . $email); //sends them back with the info they've already typed in
        exit(); //if the user makes a mistake, stops the code from running
    } //checks if both the email and the username are written incorrectly
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../IASignup.php?error=invalidemailuid"); //no infor returned to the user, because it was incorrect
        exit();
    } //if we have an invalid email, display error message
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //Checks if the email exists
        header("Location: ../IASignup.php?error=invalidemail&uid=" . $username);
        exit();
    } //checks password requirements
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) { //uses a search pattern
        header("Location: ../IASignup.php?error=invaliduid&email=" . $email);
        exit();
    } //checks if the two passwords match each other
    else {
        if ($pwd !== $passwordRepeat) {
            header("Location: ../IASignup.php?error=passwordcheck&uid=" . $username . "&email=" . $email);
            exit();
        } //if username is already taken (already found in database)
        else {
            $sql = "SELECT IAuidusers FROM IAusers WHERE IAuidusers=?";
            //prepare statements act as security measure by stopping a user from accessing the database by typing mysql commands in the boxes
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../IASignup.php?error=sqlerror" );
                exit();
            } //send user info into database
            else {
                mysqli_stmt_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck = mysqli_stmt_num_rows($stmt);
                if ($resultCheck > 0) {
                    header("Location: ../IASignup.php?error=usertaken&email=" . $email);
                    exit();
                } //sign up the user into the website
                else {
                    $sql = "INSERT INTO IAusers (IAuidusers, IAemailusers, IApwdusers) VALUES(?,?,?)";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location: ../IASignup.php?error=sqlerror2");
                        exit();
                    } else { //If there isn't an SQL error, then :
                        //hash the password so that it is not visible (encrypted). Used bicrypt because it is the most up to date = safest
                        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                        //insert data into databse
                        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../IAsignupsuccessfull.php?signup=success");
                        exit();
                    }
                }
            }

            //ends the statement and connections
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        }
    }
} //sends user back to sign up page if they had not clicked the sign up button
else {
    header("Location: ../IASignup.php");
    exit();
}