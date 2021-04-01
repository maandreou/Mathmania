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
        <h1 class="w3-margin w3-xxlarge"> Grade 3 Multiplication Exercise </h1>
    </div>

    <br>
    <p class="math_add3 w3-center" style="color:white;"><b> Instructions </b> <br> <a class="math_add2"> When you are
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

        <div class="column">
            <div class="card_div">
                <div class="container_div w3-center">
                    <br>
                    <br>
                    <p class= "question" id="text"> Question:</p>
                    <p class="text_exc">
                        <span id="p"></span> <span id="op"></span> <span id="q"></span>
                    </p>
                    <p id="qanswered"> Questions answered: </p>
                    <p id="results" class="text_exc.1"> </p>
                    <p id="category" class="text_exc.1"></p>
                    <p id="response" class="text_exc.1"></p>
                    <br/>
                    <button id="start" class="start_btn"> START </button><br/>
                    <form class>
                        <input type="text" name="answer" id="in" autocomplete="off" >
                    </form>
                    <br>
                    <br>
                    <button id="stop" class="start_btn"> STOP </button>
                    <button id="refresh" class="refresh_btn"> REPLAY </button>
                    <button id="review" class="review_btn">REVIEW </button>
                    <br>
                    <br>

                    <br/>
                    <br/>

                    <script type="text/javascript" src="IAmathexc7.js">
                    </script>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="container">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <br/>

    <!-- <script type="text/javascript" src="IAmathexc7.js"></script> -->

    </html>

<?php
require "IAfooter.php";
?>