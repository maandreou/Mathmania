<?php
require "IAheader.php";
?>

    <header class="w3-container w3-blue w3-center" style="padding: 50px 16px">
        <img src="img/mathmania_index.png" width="825" height="550">
        <h1 class="w3-margin w3-jumbo"> Welcome to Mathmania!</h1>
        <p class="w3-xlarge"> Want to gain fluency and confidence in math? Mathmania helps young students master
            essential
            skills through fun and mentally challenging questions as well as motivating awards. We also offer our
            students
            carefully chosen resources along with exersices to help them gain confidence and experience in the math
            world. Join Mathmania and become a math genius now!</p>
    </header>
    <br>

    <!--GRADE 1 BOX-->
    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container">
                    <h2 class="w3-center">Grade 1</h2>
                    <p> We offer our first grade mathmaniacs with some excellent resources to be able to refresh their
                        memory on topics studied in class and help them to become independent learners. Through
                        different addition and subtraction exercises up to 20, they can perfect their mental math and
                        constantly challenge themselves at their own pace.</p> <br>
                    <p>
                        <a href="IAdecision.php">
                            <button class="button_decision">Review</button>
                        </a>
                        <a href="IAdecision.php">
                            <button class="button_decision">Practice</button>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <!--GRADE 2 BOX-->
        <div class="column">
            <div class="card">
                <div class="container">
                    <h2 class="w3-center">Grade 2</h2>
                    <p> We offer our second grade mathmaniacs with some excellent resources to be able to refresh their
                        memory on topics studied in class and help them to become independent learners. Through
                        different addition, subtraction and multiplication exercises up to 50, they can perfect their
                        mental math and constantly challenge themselves at their own pace.</p><br>
                    <p>
                        <a href="IAdecision.php">
                            <button class="button_decision">Review</button>
                        </a>
                        <a href="IAdecision.php">
                            <button class="button_decision">Practice</button>
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <!--GRADE 3 BOX-->
        <div class="column">
            <div class="card">
                <div class="container">
                    <h2 class="w3-center">Grade 3</h2>
                    <p> We offer our third grade mathmaniacs with some excellent resources to be able to refresh their
                        memory on topics studied in class and help them to become independent learners. Through
                        different addition, subtraction, multiplication and division exercises up to 100, they can
                        perfect their mental math and constantly challenge themselves at their own pace.</p><br>
                    <p>
                        <a href="IAdecision.php">
                            <button class="button_decision">Review</button>
                        </a>
                        <a href="IAdecision.php">
                            <button class="button_decision">Practice</button>
                        </a>
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

<?php
require "IAfooter.php";
?>