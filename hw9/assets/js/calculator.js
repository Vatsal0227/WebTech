var num1 = document.getElementById('num1');
var num2 = document.getElementById('num2');
var calcFunc = document.getElementById('calcFunc');
var elOutput = document.getElementById('results');
var answer;

function calculate(){
    answer = 0;
    if(calcFunc.value === "multiply"){
        answer = num1.value * num2.value;
        elOutput.innerHTML='<h3>Result is: ' + answer + '</h3>';
    }
    if(calcFunc.value === "add"){
        answer = (parseInt(num1.value) + parseInt(num2.value));
        elOutput.innerHTML='<h3>Result is: ' + answer + '</h3>';
    }
    if(calcFunc.value === "subtract"){
        answer = num1.value - num2.value;
        elOutput.innerHTML='<h3>Result is: ' + answer + '</h3>';
    }
    if(calcFunc.value === "divide"){
        answer = num1.value / num2.value;
        elOutput.innerHTML='<h3>Result is: ' + answer + '</h3>';
    }
}
calcFunc.addEventListener("change", calculate);
num1.addEventListener("input", calculate);
num2.addEventListener("input", calculate);