console.log("Task 2 of Level 1");

/* Develop a basic button that changes its color when clicked using JavaScript. */

function changeColor() {
    var button = document.getElementById("colorButton");

    var randomBGColor = getRandomBGColor();
    var randomColor = getRandomColor();

    button.style.backgroundColor = randomBGColor;
    button.style.color = randomColor;
}

function getRandomBGColor() {
    let letters = '0123456789ABCDEF';
    let color = '#';
    for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

function getRandomColor() {
    let letters = '0123456789ABCDEF';
    let color = '#';
    for (let j = 0; j < 6; j++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}



/* Create an alert box that displays a greeting message based on the current time using JavaScript. */

function displayGreetings() {
    var currentHour = new Date().getHours();
    
    if (currentHour >= 5 && currentHour < 12) {
        return "Good morning!";
    } else if (currentHour >= 12 && currentHour < 18) {
        return "Good afternoon!";
    } else {
        return "Good evening!";
    }
}
function getGreetings() {
    var greetingMessage = displayGreetings();
    alert(greetingMessage);
}


/* Build a basic calculator that adds two numbers together and displays the result using JavaScript. */

function addNumbers() {
    var num1 = parseFloat(document.getElementById("num1").value);
    var num2 = parseFloat(document.getElementById("num2").value);

    // Check if both input fields are filled
    if (!isNaN(num1) && !isNaN(num2)) {
        // Add the numbers
        var sum = num1 + num2;

        // Display the result
        document.getElementById("result").textContent = "Result (A+B): " + sum;
    } else {
        // Display an error message if any of the input fields are empty
        document.getElementById("result").textContent = "Please enter valid numbers in both fields.";
    }
}
