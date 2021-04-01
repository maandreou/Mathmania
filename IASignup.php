<?php
require "IAheader.php";
?>

    <header class="w3-container w3-blue w3-center" style="padding:128px 16px">
        <h1 class="w3=margin w3-jumbo"> Sign up to Mathmania! </h1> <br>
        <p class="w3-large login1">
        <?php
        if (isset($_GET['error'])) { //check for errors inside url
            if ($_GET['error'] == "emptyfields") { //different responses for different errors
                echo '<p2 class= "signuperror"> Fill in all fields </p2>';
            } else if ($_GET['error'] == "invaliduidmail") { //check for invalid mail uid
                echo '<p2 class= "signuperror"> Invalid username and email </p2>';
            } else if ($_GET['error'] == "invaliduid") { //check for invalid  uid
                echo '<p2 class= "signuperror"> Invalid username </p2>';
            } else if ($_GET['error'] == "invalidemail") { //check for invalid email
                echo '<p2 class= "signuperror"> Invalid email </p2>';
            } else if ($_GET['error'] == "passwordcheck") { //check for invalid mail uid
                echo '<p2 class= "signuperror"> Please confirm passwords match </p2>';
            } else if ($_GET['error'] == "usertaken") { //check for invalid mail uid
                echo '<p2 class= "signuperror"> Username is already taken </p2>';
            }
        } else if (isset($_GET['signup']) && $_GET['signup'] == "success") {
            echo '<form action="IAsignupsuccessfull.php" method ="post">';
            echo '<p class= "signupsuccess"> Signup successful! </p>';
        }


        //sticky forms
        $uid = "";
        if (isset($_POST["uid"])) {
            $uid = $_POST["uid"];
        }

        $email = "";
        if (isset($_POST["email"])) {
            $email = $_POST["email"];
        }

        ?>

        <div class="login2"> <p class="w3-xlarge login1">

        <form class="form-signup" action="IAincludes/signup.php" method="post">
            <!-- saves any information put in onto database-->
            <div class="input-container w3-center">
                <i class="fa fa-user icon"></i>
                <input type="text" name="uid" placeholder="Username" value="<?php echo $uid; ?>">
            </div>
            <div class="input-container w3-center">
                <i class="fa fa-envelope icon"></i>
                <input type="text" name="email" placeholder="E-mail" value="<?php echo $email; ?>">
            </div>
            <div class="input-container w3-center">
                <i class="fa fa-key icon"></i>
                <input type="password" name="pwd" placeholder="Password">
            </div>
            <div class="input-container w3-center">
                <i class="fa fa-key icon"></i>
                <input type="password" name="pwd-repeat" placeholder="Repeat Password"> <!-- verifies passwords match-->
            </div>
            <br>
            <button class="login-btn" type="submit" name="signup-submit">Sign up</button>
        </form>

        <?php
        if (isset($_GET["newpwd"])) {
            if ($_GET["newpwd"] == "passwordupdated") {
                echo '<p class="signupsuccess">Your password has been successfully reset</p>';
            }
        }
        ?>

    </header>
<?php
require "IAfooter.php";
?>