<?php
require "IAheader.php";
?>

<header class="w3-container w3-blue w3-center" style="padding: 55px 16px">
    <img src="img/mathmania_mainpage.png" alt="mathpic" width="691" height="520">
    <h1 class="w3-margin w3-jumbo"> Welcome back!</h1>
    <p class="w3-xlarge"> Ready to keep practicing and perfecting your skills? Remember if you get stuck you can always refer
    to our review pages!</p>
</header>

<br>

<!--GRADE 1 BOX-->
<div class="row">
    <div class="column">
        <div class="card">
            <div class="container">
                <h2 class="w3-center" style="color:tomato">Grade 1</h2>
                <p>
                    <a href="IAreview.php"> <button class="button_decision">Review</button></a>
                    <a href="IApractice.php"><button class="button_decision">Practice</button></a>
                </p>
            </div>
        </div>
    </div>
    <!--GRADE 2 BOX-->
    <div class="column">
        <div class="card">
            <div class="container">
                <h2 class="w3-center" style="color:plum">Grade 2</h2>
                <a href="IAreview.php"><button class="button_decision">Review</button></a>
                <a href="IApractice.php"><button class="button_decision">Practice</button></a>
                </p>
            </div>
        </div>
    </div>
    <!--GRADE 3 BOX-->
    <div class="column">
        <div class="card">
            <div class="container">
                <h2 class="w3-center" style="color:orange">Grade 3</h2>
                <a href="IAreview.php"><button class="button_decision">Review</button></a>
                <a href="IApractice.php"><button class="button_decision">Practice</button></a>
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") === -1) {
            x.className += "w3-show";
        } else {
            x.className = x.className.replace("w3-show", "");
        }
    }
</script>

<br/>
<br/>
<br/>
<?php
require "IAfooter.php";
?>
