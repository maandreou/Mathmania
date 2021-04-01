/***** Subtraction Grade 2 *****/
let startButton = document.getElementById("start");
let stopButton = document.getElementById("stop");
let refreshButton = document.getElementById("refresh");
let inputField = document.getElementById("in");
let form = document.querySelector("form");
let p = document.getElementById("p");
let q = document.getElementById("q");
let op = document.getElementById("op");
let response = document.getElementById("response");
let results = document.getElementById("results");
let category = document.getElementById("category");
let review = document.getElementById("review");
let qanswered = document.getElementById("qanswered");
let text = document.getElementById("text");

/***** State variables *****/
//var max = 50;
var num1;
var num2;
var answer;

var startTime;
var endTime;

var count;
var times = [];

document.getElementById("stop").style.visibility = "hidden";
document.getElementById("refresh").style.visibility = "hidden";
document.getElementById("in").style.visibility= "hidden";
document.getElementById("review").style.visibility= "hidden";
document.getElementById("qanswered").style.visibility= "hidden";
document.getElementById("text").style.visibility= "hidden";

startButton.onclick = function () {
  document.getElementById("start").style.visibility = "hidden";
  document.getElementById("refresh").style.visibility = "hidden";
  document.getElementById("stop").style.visibility = "hidden";
  document.getElementById("in").style.visibility= "visible";
  document.getElementById("qanswered").style.visibility= "visible";
  document.getElementById("text").style.visibility= "visible";
  count = 0;
  times = [];
  results.innerHTML = "";
  category.innerHTML = "";
  refreshNums();
  inputField.className = "";
  stopButton.className = "";
  inputField.focus();
};

/***** initializing *****/
inputField.className = "hide";
stopButton.className = "hide";

form.onsubmit = function (e) {
  e.preventDefault();
  getAnswer();
};

stopButton.onclick = function () {
  var resultString;
  var categoryString;
  if (times.length > 0) {
    var total = 0;
    for (var i = 0; i < times.length; i++) {
      total += times[i];
    }
    var mean = (total / times.length) / 1000;
    resultString = "Average time: " + mean.toPrecision(4) + " seconds";
    categoryString = getCategory(mean);
    document.getElementById("refresh").style.visibility = "visible";
    document.getElementById("stop").style.visibility = "hidden";
  } else {
    resultString = "No results recorded. Hit the Enter key to submit your answers! ";
    categoryString = "";
    inputField.value = "";
    document.getElementById("refresh").style.visibility = "visible";

  }
  refreshButton.className = "";

  refreshButton.onclick = function () {
    document.getElementById("refresh").style.visibility = "hidden";
    refreshNums();
    count = 0;
    times = [];
    results.innerHTML = "";
    category.innerHTML = "";
    inputField.className = "";
    stopButton.className = "";
    inputField.focus();
    document.getElementById("start").style.visibility = "hidden";
    document.getElementById("stop").style.visibility = "hidden";
    document.getElementById("in").style.visibility = "visible";
    document.getElementById("qanswered").style.visibility= "visible";
    document.getElementById("text").style.visibility= "visible";
  };

  inputField.className = "hide"; //hide the input field
  stopButton.className = "hide"; //hide the stop button
  startButton.className = ""; //show the start button

  p.innerHTML = "";
  q.innerHTML = "";
  op.innerHTML = "";
  response.innerHTML = "";
  results.innerHTML = resultString;
  category.innerHTML = categoryString;
};


/***** FUNCTIONS *****/
var refreshNums = function () { //gets new question and new start time
  results.innerHTML = count; // displays how many questions you have answered
  //gets random numbers
  num1 = Math.floor((Math.random() * 50) + 1);
  num2 = Math.floor((Math.random() * 50) + 1);

  if (num2 > num1) {
    let temp = num2;
    num2 = num1;
    num1 = temp;
  }
  p.innerHTML = num1;
  op.innerHTML = "-";
  q.innerHTML = num2;

  startTime = new Date();
};

var getAnswer = function () {
  var correct = num1 - num2;
  answer = parseInt(inputField.value);


  if (answer === correct) {
    endTime = new Date();
    times[count++] = endTime.getTime() - startTime.getTime();
//answer was correct so no need for 'try again'
    response.innerHTML = "";
    if (count == 25) {
      stopButton.onclick();
        document.getElementById("stop").style.visibility = "hidden";
        document.getElementById("refresh").style.visibility = "visible";
        document.getElementById("in").style.visibility = "hidden";
        document.getElementById("qanswered").style.visibility = "hidden";
        document.getElementById("text").style.visibility = "hidden";
    } else {
      refreshNums();
    }
  } else {
    response.innerHTML = "Mhm this doesn't look quite right... Give this another go!";
  }
  inputField.value = "";
};


var getCategory = function (mean) {
  var c;
  if (mean < 2) {
    c = "Excellent! You are a true Mathmaniac!";
  } else if (mean < 4) {
    c = "Amazing! You are a math God!";
  } else if (mean < 6) {
    c = "Good job! You are on the right track, keep practicing! Practice makes perfect!";
  } else if (mean < 8) {
    c = "Maybe you should consider reviewing strategies on how to subtract in your head. Take a look at the video under the review section to refresh your memory and come back to keep practicing!";
  }
  else if (mean > 8) {
    c = "Mhm, looks like you are having trouble fellow mathmaniac... Make sure to watch the tutorials under the review page and ask for help from your teacher!";
  }
  return c;
};