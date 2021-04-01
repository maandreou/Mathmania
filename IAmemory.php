<?php
require "IAheader.php";
?>

<html>
<style>
/* MEMORY GAME */

* {
margin: 0;
padding: 0;
}

/* border box fix */
*,
*::before,
*::after {
box-sizing: inherit;
}

.memory_ht {
box-sizing: border-box;
}

.memory_bd {
/* Background pattern from Subtle Patterns */
background: url('https://github.com/FoxyStoat/memory-game/blob/master/assets/img/ignasi_pattern_s.png?raw=true');
font-family: "Open Sans", sans-serif;
/*one Em roughly ten pixels (16 x 62.5% = 10)*/
font-size: 62.5%;
letter-spacing: 1.5px;
margin: 0;
text-align: center;
}

.container_memory {
display: flex;
justify-content: center;
align-items: center;
flex-direction: column;
margin-top: 0.5em;
}

ul > li {
list-style: none;
}

.card,
.reset-btn {
cursor: pointer;
}

.btn_memory {
border-radius: 1em;
border: none;
color: #fff;
box-shadow: 5px 2px 20px 0 rgba(46, 61, 73, 0.5);
padding: 0.8em;
}

/*----------------------------------
Header
------------------------------------*/

.memory1 {
font-size: 3em;
font-weight: 400;
}

.memory_2 {
font-size: 2.5em;
font-weight: 600;
}

.p_memory {
font-size: 1.6em;
}

.memory_3 {
font-weight: 400;
}

/*----------------------------------
Section - Score Panel
------------------------------------*/

.score-panel {
font-size: 1.4em;
padding: 1em 0 2em;
}

.star-rating > li {
display: inline-block;
padding: 0.5em;
}

.moves-counter {
padding: 0.5em;
}

.reset-btn {
background: #000;
}

.timer-container {
background: #fff;
border-radius: 0.5em;
color: #000;
margin: 0.5em;
padding: 0.5em;
}

.timer {
font-size: 1em;
}

/*----------------------------------
Section - Modal
------------------------------------*/
/*
Help with the modal from
https://www.w3schools.com/howto/howto_css_modals.asp
*/

/* Modal (background) */
.modal {
/*Hidden by default */
display: none;
position: fixed;
z-index: 99;
left: 0;
top: 0;
width: 100%;
height: 100%;
/* Fallback color */
background-color: rgb(46, 61, 73);
/* With opacity */
background-color: rgba(46, 61, 73, 0.6);
}

/* Modal Content/Box */
.modal-content {
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
background-color: #fff;
/* 5% from the top and centered */
margin: 5% auto;
border: 0.8em solid #fc4;
padding-right: 2em;
width: 80%;
}

/* The Close Button */
.close {
align-self: flex-end;
color: #28e;
font-size: 5em;
}

.close:hover,
.close:focus {
color: #5cf;
text-decoration: none;
cursor: pointer;
}

/* Modal Image*/
.modal-img {
display: inline-block;
margin: 1em 0 1em;
width: 20em;
}

p.stats {
font-weight: 600;
}

p.stats:last-child {
margin-bottom: 1em;
}

.play-again-btn {
background: #28e;
margin-bottom: 1em;
}

/*----------------------------------
Deck of Cards
------------------------------------*/
/*Mobile first responsivness*/
.deck {
background: linear-gradient(to bottom, #5cf, #28e);
border-radius: 1.5em;
display: flex;
flex-wrap: wrap;
justify-content: space-around;
align-items: center;
height: 35em;
margin-bottom: 6em;
padding: 0.5em;
width: 35em;
}

.deck,
.card {
box-shadow: 5px 2px 20px 0 rgba(46, 61, 73, 0.5);
}

.card {
background: #fc4;
border-radius: 0.5em;
height: 7em;
width: 7em;
}

/*
To disable the color highlight if and img is clicked
https://stackoverflow.com/questions/21107439/disable-or-change-firefoxs-element-image-highlight-color
*/
img {
user-select: none;
width: 6em;
}

.deck img {
visibility: hidden;
}

.deck .card.flip {
background: #fff;
cursor: default;
transform: rotateY(180deg);
transition: transform 0.3s linear;
pointer-events: none;
}

.flip img {
background: #fff;
visibility: visible;
}

.deck .card.match {
background: #39d;
visibility: visible;
cursor: default;
animation: pulse 1s;
}

.match img {
background: #39d;
}

@keyframes pulse {
0% {
transform: scale(1);
}
80% {
transform: scale(1.1);
}
100% {
transform: scale(1);
}
}

/*----------------------------------
Media Queries
------------------------------------*/

/*--Tablets
@media screen and (min-width: 550px) {
-------------------------*/
.deck  {
height: 50em;
padding: 2em;
width: 50em;
}

.card {
height: 10em;
width: 10em;
}

.deck img {
width: 9em;
}

.modal-content h2 {
font-size: 4em;
}

.play-again-btn {
font-size: 1.8em;
}
}

/*----------------------------------
Desktops
------------------------------------*/
@media screen and (min-width: 800px) {

h1 {
font-size: 6em;
}

p {
font-size: 2.3em;
}

.deck  {
height: 70em;
width: 70em;
}

.card {
height: 15em;
width: 15em;
}

.deck img {
width: 13em;
}

.reset-btn {
font-size: 0.8em;
}

.footer {
font-size: 1.2em;
}

.modal-content h2 {
font-size: 5em;
}

/* Modal Image*/
.modal-img {
width: 30em;
}

.play-again-btn {
font-size: 2em;
}
}
.kid_practice{
width: 100%;
margin-top: 1%;
}
</style>
<body>
<div class="memory memory_ht memory_bd">
    <div class="container_memory">
        <header class="header_memory">
            <h1 class="memory1"> Memory Game</h1>
        </header>

        <section class="score-panel">
            <h3 class="memory_3">Score Panel</h3>
            <ul id="star-rating" class="star-rating">
                <li class="star"><i class="fa fa-star"></i></li>
                <li class="star"><i class="fa fa-star"></i></li>
                <li class="star"><i class="fa fa-star"></i></li>
            </ul>
            <span class="moves-counter">0</span> Moves
            <div class="timer-container">
                <span class="timer"><i class="fa fa-hourglass-start"></i> Timer: 00:00</span>
            </div>
            <div class="reset">
                <button class="btn_memory reset-btn">Reset <i class="fa fa-repeat"></i></button>
            </div>
        </section>

        <!-- Modal -->
        <section class="win-game-modal">
            <div id="modal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2 class="memory_2">Congratulations!</h2>
                    <p class="p_memory">You have won the game and found all 8 pairs of cards.</p>
                    <img class="modal-img" src="https://github.com/FoxyStoat/memory-game/blob/master/assets/img/Vault-Boy-Thumb-Up.jpg?raw=true" alt="Vault boy giving the thumbs up from the game fall out">
                    <button class="btn_memory play-again-btn">Play Again?</button>
                </div>
            </div>
        </section>

        <ul class="deck"></ul>

    <script src="IAmemory.js"></script>

    </div>
</div>
</body>
</html>