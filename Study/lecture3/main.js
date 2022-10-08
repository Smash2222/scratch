function stringInversion(str) {
    let wordsArray = str.split(' ');
    wordsArray.reverse();
    return wordsArray.join(' ');
}

function searchDatesInString(str) {
    let dateRegExp = /(\d{2})-(\d{2})-(\d{4})/;
    let res = str.match(dateRegExp);
    return `Day: ${res[1]}, Month: ${res[2]}, year ${res[3]}`;
}

let but = document.querySelector('#but');
but.addEventListener('click', () => {
    // var 1
    let textElement = document.forms['demoform'].text;
    // var 2
    let textElement2 = document.querySelector('#text');
    // var 3
    let textElement3 = document.querySelector("form[name = 'demoform'] input[name='text']");
    // var 4
    let textElement4 = document.forms['demoform'].text;
    let str = textElement.value;
    let invertedString = stringInversion(str);
    let resultElement = document.querySelector("form[name='demoform'] .result");
    resultElement.innerHTML = invertedString;
    document.querySelector('#dates-result').innerHTML = searchDatesInString(str);
});