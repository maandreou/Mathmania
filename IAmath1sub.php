<?php
require "IAheader.php";
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes"/>
    </head>


    <div class="w3-container w3-center w3-blue" style="padding: 90px 16px">
        <h1 class="w3-margin w3-xxlarge"> Grade 1 Subtraction Exercise </h1>
    </div>

    <br>
    <p class="math_add w3-center" style="color:white;"><b> Instructions </b> <br> <a class="math_add2"> When you are
            ready to start playing, press start and submit your answers using the Enter key. When you have
            answered all 25 questions correctly, you can replay as many times as you like. </a>
    </p>
    <br>
    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container">
                </div>
            </div>
        </div>
        <!--GRADE 2 BOX-->
        <div class="column">
            <div class="card">
                <div class="container w3-center">
                    <br>
                    <br>
                    <p class="exc1">
                        <span id="p"></span> <span id="op"></span> <span id="q"></span>
                    </p>
                    <p id="response" class="exc"></p>
                    <p id="results" class="exc"></p>
                    <p id="category" class="exc"></p>
                    <br>
                    <form>
                        <input type="text" name="answer" id="in" autocomplete="off">
                    </form>
                    <br>
                    <br>
                    <button id="start"> START</button>
                    <button id="stop"> STOP</button>
                    <button id="refresh"> REPLAY</button>
                    <br>
                    <br>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container">
                </div>
            </div>
        </div>
    </div>

    <br/>
    <br/>

    <script type="text/javascript" src="IAmathexc2.js"></script>

    </html>

<?php
require "IAfooter.php";
?>