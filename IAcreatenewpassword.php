<?php
require "IAheader.php";
?>

<main>
    <div class= "wrapper-main">
        <section class= "section-default">
            <style>
                h1{text-align: center;}
                p{text-align: center;}
                div{text-align: center;}
            </style>
            <?php
                $selector = $_GET["selector"];
                $validator = $_GET["validator"];

            if (empty($selector) || empty($validator)){
                echo " Sorry, could not validate your request!";
            }
            else {
                if (ctype_xigit($selector) !== false && (ctype_xigit($validator) !== false )){
              ?>

                    <form action= "IAincludes/IAresetrequest.php" method= "post">
                        <input type= "hidden" name= "selector" value= "<?php echo $selector; ?>">
                        <input type= "hidden" name= "validator" value= "<?php echo $validator; ?>">
                        <input type= "password" name= "pwd" placeholder= "Enter a new password...">
                        <input type= "password" name= "pwd-repeat" placeholder= "Repeat new password...">
                        <button type= "submit" name= "reset-password-submit"> Reset Password </button>
                </form>

                <?php

                }
            }
            ?>

        </section>
    </div>
</main>

<?php
require "IAfooter.php";
?>
