<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="calculator.css">
</head>
<body>
    <div class="calculator">
        <input type="text" id="display" disabled>
        <div class="buttons">
            <button onclick="clearDisplay()">C</button>
            <button onclick="addNumber('9')">9</button>
            <button onclick="addNumber('8')">8</button>
            <button onclick="addNumber('7')">7</button>
            <button onclick="addNumber('6')">6</button>
            <button onclick="addNumber('5')">5</button>
            <button onclick="addNumber('4')">4</button>
            <button onclick="addNumber('3')">3</button>
            <button onclick="addNumber('2')">2</button>
            <button onclick="addNumber('1')">1</button>
            <button onclick="addNumber('0')">0</button>
            <button onclick="calculate()">=</button>
            <button onclick="add('+')">+</button>
            <button onclick="subtract('-')">-</button>
            <button onclick="multiply('*')">*</button>
            <button onclick="divide('/')">/</button>
            <button onclick="calculateSquare()">x²</button>
            <button onclick="calculateRoot()">√</button>
        </div>
    </div>
    <script src="calculator_func.js"></script>
</body>
</html>