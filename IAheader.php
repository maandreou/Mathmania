<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="mystyle.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<script src="https://kit.fontawesome.com/b2c8590c7f.js" crossorigin="anonymous"></script>
<style>
    body, h1, h2, h3, h4, h5, h6 {
        font-family: "Lato", sans-serif
    }

    .w3-bar, h1, button {
        font-family: "Montserrat", sans-serif
    }

    html {
        box-sizing: border-box;
    }

    *, *:before, *:after {
        box-sizing: inherit;
    }

    .column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0 8px;
    }

    .card {
        box-shadow: 0 4px_ 8px 0 rgba(0, 0, 0, 0.2);
        box-border: 1px
        margin: 8px;
    }

    .container {
        padding: 0 16px;
    }

    .container::after, .row::after {
        content: "";
        clear: both;
        display: table;
    }

    .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
    }

    .button:hover {
        background-color: #555;
    }

    @media screen and (max-width: 650px) {
        .column {
            width: 100%;
            display: block;
        }
    }

    div {
        text-align: justify;
    }

    .btn {
        width: 300px;
        margin: auto;
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
    }

    .title {
        font-size: 30px;
    }

    .icon {
        padding: 10px;
        background: black;
        color: white;
        min-width: 50px;
        text-align: center;
    }

    .input-container {
        margin-bottom: 15px;
        display: -ms-flexbox; /* IE10 */
        display: flex;
        margin-bottom: 15px;
    }

    .login-btn {
        width: 225px;
        margin: auto;
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
    }
    .leftcolumn {
        float: right;
        width: 90%;
    }

    .rightcolumn {
        float: left;
        width: 10%;
    }

    .button_decision {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000000;
        text-align: center;
        cursor: pointer;
        width: 100%;
    }

    .button_decision2 {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #FF77B7;
        text-align: center;
        cursor: pointer;
        width: 100%;
    }

    .button_decision2:hover {
        background-color: #add8e6;
    }


    .back {
        background: white;
    }

    .add {
        font-size: 45px;
    }

    .exc {
        font-size: 20px;
        color: tomato;
    }

    .exc2 {
        font-size: 20px;
        color: orange;
    }

    .exc3 {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        color: plum;
    }

    .grade_practice {
        font-size: 30px;
        font-weight: bold;
        background-color: tomato;
        padding: 20px;
    }

    .grade_practice2 {
        font-size: 30px;
        font-weight: bold;
        background-color: orange;
        padding: 20px;
    }

    .grade_practice3 {
        font-size: 30px;
        font-weight: bold;
        background-color: plum;
        padding: 20px;
    }

    .header_review {
        font-size: 15px;
    }

    .background {
        background-color: dodgerblue;
    }

    .about {
        font-size: 15px;
        text-align: justify;
        padding: 20px;
    }

    .card2 {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
        box-border: 5px;
        margin: 8px;
    }

    .math_add {
        font-size: 25px;
        font-weight: bold;
        background-color: tomato;
        padding: 20px;
        margin: 8px;
    }

    .math_add2 {
        font-size: 15px;
    }

    .math_add_2{
    font-size: 25px;
    font-weight: bold;
    background-color: orange;
    padding: 20px;
    margin: 8px;
    }

    .math_add3 {
        background-color: plum;
        padding: 20px;
        font-size: 25px;
        font-weight: bold;
        width:100%;
    }

    .main_container {
        width: 100%;
        height: 40px;
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    .question {
        font-size: 30px;
    }
    .main_box {
        width: 500px;
        height: 300px;
        background-color: plum;
        display: flex;
        justify-direction: column;
        align-items: center;
        border-radius: 10px;
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    .show_answer {
        width: 100%;
        height: 55px;
        background-color: plum;
        margin: 0px 0px 60px 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: tomato;
        font-size: 18px;
        font-weight: 500;
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    .box1 {
        display: flex;
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    .intext11, #intext2 {
        width: 78px;
        font-size: 20px;
        font-weight: 600;
        height: 55px;
        padding: 10px 10px;
        text-align: center;
        border: none;
        background: #ffffff;
        box-shadow: 1px 1px 0px #999999,
        2px 2px 0px #999999,
        3px 3px 0px #999999,
        4px 4px 0px #999999,
        5px 5px 0px #999999;
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    .div_s {
        margin;
        13px 20px 12px 21px;
        font-size: 25px;
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    #intext2 {
        width: 100px;
        height: 35px;
        margin: 30px 0px;
        padding: 0px 15px;
        text-align: center;
        font-size: 20px;
        font-weight: 600;
        border: none;
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    .mygreen {
        background-color: #4caf50;
        text-align: center;
        color: white;
    }

    .mygreen > img_practice{
        width: 85%;
    }

    .container_3 {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        height: 85vh;
    }

    .container_3 > div {
        flex-grow: 1;
        flex: 1 1 0px;
        height: 85%;
        padding: 1%;
        margin: 1%;
    }

    .container_3_1 {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        height: 55vh;
    }
    .container_3_1 > div {
                       flex-grow: 1;
                       flex: 1 1 0px;
                       height: 85%;
                       padding: 1%;
                       margin: 1%;
                   }
    }

    .container_div{
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        color: #999999;
        height: 55vh;
    }

    .container_div > div {
        flex-grow: 1;
        flex: 1 1 0px;
        height: 85%;
        padding: 1%;
        margin: 1%;
    }

    .card_div {
        background-color: rgba(255,255,255);
        box-shadow: 0 0px 20px 0 rgba(0,0,0,0.8);
        box-border: 1px
        margin: 8px;
    }

    .answer{
        box-shadow: 0 0px 20px 0 rgba(0,0,0,0.5);
    }
    .exc_practice{
        color: white;
        font-size: 20px;
    }
    .text_exc{
        font-size: 25px;
        color: plum;
    }

    .text_exc2{
        font-size: 25px;
        color: tomato;
    }

    .text_exc3{
        font-size: 25px;
        color: orange;
    }

    .text_exc4{
        font-size: 25px;
        color: tomato;
    }
    .start_btn{
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000000;
        text-align: center;
        cursor: pointer;
        width: 40%;
    }

    .refresh2_btn{
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000000;
        text-align: center;
        cursor: pointer;
        width: 40%;
    }
    .login{
        width: 100%;
        height: 30vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .login1{
    display: flex;
    flex-direction: column;
    align-items: center;
    }

    .login2{
        width: 100%;
        height: 30vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .mygreen2{
        background-color: #4caf50 ;
        text-align: center;
        color: white;
        height: 700px
    }

    .mygreen2 > img_practice{
        width: 85%;
    }

    .last6 {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
    }
    .last6 > .item {
        flex: 1 1 30%; /*grow | shrink | basis */
        height: 550px;
    }

    .item {
        background-color: #4caf50;
        margin: 15px;
        text-align: center;
        color: white;
        height: 550px
    }
    .item > img_practice{
        width: 85%;
    }

    .add5{
        font-size: 40px;
    }

    .main{
        margin: 15px;
        text-align: center;
        height: 350px
        box-shadow: 0 0px 20px 0 rgba(0,0,0,0.8);
        box-border: 1px;
    }

    }
</style>

<body>
<div class="header.login">
    <div class="w3-bar w3-blue w3-card w3-left-align w3-large">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large"
           href="javascript:void(0);" onclick="myFunction()" title="Toogle Navigation Menu"></a>


        <?php
        if (isset($_SESSION['userId'])) {
            echo '<a href="IAmainpage.php" class="w3-bar-item w3-button w3-padding-large"><i class="fa fa-fw fa-home"></i> Home </a>
                <a href="IAreview.php" class= "w3-bar-item w3-button w3-padding-large w3-blue"> <i class="fas fa-chalkboard-teacher"></i> Review </a>
                <a href="IApractice.php" class= "w3-bar-item w3-button w3-padding-large w3-blue"> <i class="far fa-clipboard"></i> Practice </a>
                <a href="IAmemory.php" class= "w3-bar-item w3-button w3-padding-large w3-blue"> <i class="fas fa-dice"></i> Need a break? </a>
                <a href="IAincludes/IAlogout.php" class= "w3-bar-item w3-button w3-padding-large w3-blue">Logout </a>';

        } else {
            echo '<a href="IAindex.php" class="w3-bar-item w3-button w3-padding-large"><i class="fa fa-fw fa-home"></i> Home </a>
                  <a href="IAlogin.php" class= "w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><i class="fa fa-fw fa-user"></i> Login </a>
                  <a href="IASignup.php" class= "w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"> <i class="fas fa-id-badge"></i> Create an account </a>';
        }
        ?>
    </div>
</div>

