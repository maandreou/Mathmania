<?php
require "IAheader.php";
?>

    <header class="w3-container w3-blue w3-center" style="padding:128px 16px">
        <h1 class="w3=margin w3-jumbo"> Login to Mathmania! </h1>
        <p class="w3-xlarge login1">
                <?php
                if (isset($_SESSION['userId'])) {
                    echo 'You are logged in!';
                    $page = file_get_contents("localhost/Mathmania/IAmainpage.php");
                } else {
                    if (isset($_GET['error'])) {
                        if ($_GET["error"] == "emptyfields") {
                            echo '<p class "signuperror login1"> Fill in all the fields. </p>';
                        }
                        if ($_GET["error"] == "wrongpwd") {
                            echo '<p class "signuperror login1"> Invalid username/password. </p>';
                        } else if ($_GET["error"] == "nouser") {
                            echo '<p class "signuperror login1"> Invalid username/password. </p>';
                        }
                    }
                    if (isset($_GET["signup"]) && $_GET("signup") == "success") {
                        echo 'Your account has been created. Please log in to get started!';
                    }

                    echo '<div class="login"> <p class="w3-xlarge login1">
                            <form action= "IAincludes/IAlogin.php" method="post">
                    
                    <div class="input-container w3-center">
                        <i class="fa fa-user icon"></i>
                        <input type= "text" name= "emailuid" placeholder="Username/E-mail...">
                    </div>
                    <div class="input-container w3-center">
                        <i class="fa fa-key icon"></i>
                        <input type= "password" name="pwd" placeholder= "Password">
                    </div>
                   
                    <button class= "login-btn" type= "submit" name="login-submit"> Login </button>
                    
                    <div class="input-container w3-center">
                         <p><a href="IASignup.php"> Do not have an account? </a></p>
                    </div> 
                    
                   </form>

                     ';
                }
                ?>
            </p>
        </div>
    </header>

<?php
require "IAfooter.php";
?>