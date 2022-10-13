// Function declaration
function calcSum(title) {
    let result = 0;
    for (let index = 1; index < arguments.length; index++)
        result += arguments[index];
    return `${title}: ${result}`;
}

let value = calcSum('sum', 1, 2, 3, 4, 5);
// console.log(value);

// Function expression
let type = 2;
let getValue;
if (type === 1) {
    getValue = function (a, b) {
        return a + b;
    };
} else {
    getValue = function (a, b) {
        return a * b;
    };
}

let result = getValue(1, 2);
// console.log(result)

// new Function
let getMyValue = new Function('a', 'b', 'return a + b;');
console.log(getMyValue(3, 4));

// Arrow Functions
let func = (a, b) => {
    return a + b;
};
let summa = func(1, 2)

// Lambda Functions
let func1 = (a, b) => a + b;

let summa1 = func1(1, 2);

let month = [
    'January',
    'February',
    'March',
    'March',
    'March',
    'March',
    'March',
    'March',
    'September',
    'October',
];
setInterval(
    function () {
        let date = new Date();
        document.querySelector('#timer').innerHTML = `${date.getDate()} ${month[date.getMonth()]} 
        ${date.getFullYear()}year ${date.getHours()}:${date.getMinutes()}:${date.getSeconds()}`;
    }, 1000);

let date1 = new Date("2022-10-05 19:00");
let date2 = new Date("2021-11-05 19:00");
let diff = date1.getTime() - date2.getTime();
// console.log(diff / (1000 * 60 * 60 * 24));