let display = document.getElementById("display");
let currentInput = "";


function addNumber(number) {
    currentInput += number;
    display.value = currentInput;
}


function add() {
    currentInput += " + ";
    display.value = currentInput;
}


function subtract() {
    currentInput += " - ";
    display.value = currentInput;
}


function multiply() {
    currentInput += " * ";
    display.value = currentInput;
}


function divide() {
    currentInput += " / ";
    display.value = currentInput;
}


function calculate() {
    try {
        display.value = eval(currentInput);
        currentInput = display.value;  
    } catch (e) {
        display.value = "Error";  
        currentInput = ""; 
    }
}


function clearDisplay() {
    display.value = "";
    currentInput = "";
}


function calculateSquare() {
    if (currentInput === "") return;
    let result = Math.pow(parseFloat(currentInput), 2);
    display.value = result;
    currentInput = result.toString();
}


function calculateRoot() {
    if (currentInput === "") return;
    let result = Math.sqrt(parseFloat(currentInput));
    display.value = result;
    currentInput = result.toString();
}






