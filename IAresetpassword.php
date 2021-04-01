<?php
require "IAheader.php";
?>

<main>
    <br>
    <div class="wrapper-main w3-center">
        <section class="section-default">
            <h1>Reset your password</h1>
            <p> An email will be send to you with instructions on how to reset your password.</p>
            <form action="IAincludes/IAresetrequest.php" method="post">
                <input type="text" name="email" placeholder="Enter your email address...">
                <button type="submit" name="reset-request-submit"> Receive new password by email</button>
            </form>
            <?php
            if (isset($_GET["reset"])) {
                if ($_GET["reset"] == "success") {
                    echo '<p class="signupsuccess"> Your email reset password has been sent. Please check your email. </p>';

                }
            }
            ?>
        </section>
    </div>
</main>

<?php
require "IAfooter.php";
?>
