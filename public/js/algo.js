// let a = false, b = c = 2, d = 'home';
// console.log(typeof(e));
// let name = prompt('Enter name'), beginning = 'Welcome, ', end = ' !';
// let welcome = beginning + name + end + a + c + d;
// alert(welcome);
// let a_prompt = 'a = ', a_default = 5, a = prompt(a_prompt, a_default), b_prompt = 'b = ', b_default = 7, b = prompt(b_prompt, b_default);
// a = parseInt(a), b = parseInt(b);
// alert(a + b);
// let text = a + '' + b;
// alert(text);
// result = 5 === parseInt('5');
// result = !result;
// alert(result);
// let a = 0, b = '', c = a === b;
// if (a) {
//     alert(true)
// }
// else if (!a) {
//     alert(false);
// }
// alert(a || b || 'd' ||'last')
// if (confirm('Do you confirm ?')) {
//     alert('confirmed');
// }
// else {
//     alert('not confirmed');
// }
// let choice = prompt('go up or down ?');
// switch(choice) {
//     case 'up':
//         alert('you are alive !');
//     break;
//     case 'down':
//         alert('you are dead !');
//     break;
//     default:
//         alert('I didnt understand what you try to say.');
// }
// alert('Your age : ' + (confirm('Are you an adult ?') ? '18+' : '-18'));
// let number = '5g';
//     parseInt(number);
// alert(number);
// let num = 0;
// do {
//     alert(num);
//     num++;
// }
// let i = 0;
// while (i < 10) {
//     alert(i++);
// }
// for (let i = 1 ; i <= 10 ; i++) {
//     if (i % 2 == 0) {
//         continue;
//     }
//     alert(i);
// }
// let myString = new String('This is a string');
// myString = myString.split('');
// console.log(myString);
// myString = myString.join('  ');
// console.log(myString);
// var arr = new Array('Sébastien', 'Laurence', 'Ludovic', 'Pauline', 'Guillaume');
// let arr = {
//     self: 'Benoit',
//     sister: 'Alice',
//     dad: 'Denis'
// }
// for (let i = 0, c = arr.length ; i < c ; i++) {
//     alert(arr[i]);  
// }
// arr.push('Jill');
// arr['mom'] = 'Soizic';
// arr.cousin = 'Isabelle';
// console.log(arr);
// for (let key in arr) {
//     alert(key + ' = ' + arr[key]);
// }
// let nicks = new Array(), nick;
// while (nick = prompt('What name ?')) {
//         nicks.push(nick);
// }
// if (nicks.length > 0) {
//     nicks = nicks.join('-');
//     alert(nicks);
// }
// else {
//     alert('Empty array !');
// }
// console.log(parseInt('0xa'));
// var text = parseInt('loutre');
// console.log(isNaN(text));

// -----------------------------------------------------
// TP : Transform a number into a french-letter-number
// -----------------------------------------------------

/**
 * Ask user a number and transform it to string
 * @param { Number} num  to tranform as an integer
 * @return { String } letterNum Number transformed into string
*/
function toFrenchString(num) {
        
    let hundreds = {1: 'cent', 2: 'deux cent', 3: 'trois cent', 4: 'quatre cent', 5: 'cinq cent', 6: 'six cent', 7: 'sept cent', 8: 'huit cent', 9: 'neuf cent', };
    let tens = {1: 'dix', 2: 'vingt', 3: 'trente', 4: 'quarante', 5: 'cinquante', 6: 'soixante', 7: 'soixante-dix', 8: 'quate-vingt', 9: 'quatre-vingt dix'};
    let units = {0: 'zéro', 1: 'un', 2: 'deux', 3: 'trois', 4: 'quatre', 5: 'cinq', 6: 'six', 7: 'sept', 8: 'huit', 9: 'neuf', 11: 'onze', 12: 'douze', 13: 'treize', 14: 'quatorze', 15: 'quinze', 16: 'seize'};

    let letterNum = '';
    
    /**
     * Transform numbers into french letters
     * @return { String } letterNum
    */
    function transformNumberIntoFrenchLetterNumber() {
        let arrNum = num.split('');
        if (arrNum.length === 3) {
            if (parseInt(arrNum[2]) === 0 && parseInt(arrNum[1]) != 0 && parseInt(arrNum[0]) != 0) {
                letterNum = letterNum + hundreds[arrNum[0]] + ' ' + tens[arrNum[1]];
            }
            else if (parseInt(arrNum[1]) === 0 && parseInt(arrNum[2]) != 0 && parseInt(arrNum[0]) != 0) {
                letterNum = letterNum + hundreds[arrNum[0]] + ' ' + units[arrNum[2]];
            }
            else if (parseInt(arrNum[0]) === 0 && parseInt(arrNum[1]) != 0 && parseInt(arrNum[2]) != 0) {
                letterNum = letterNum + tens[arrNum[1]] + ' ' + units[arrNum[2]];
            }
            else if (parseInt(arrNum[0]) === 0 && parseInt(arrNum[1]) === 0) {
                letterNum += units[arrNum[2]];
            }
            else if (parseInt(arrNum[0]) === 0 && parseInt(arrNum[2]) === 0) {
                letterNum += tens[arrNum[1]];
            }
            else if (parseInt(arrNum[1]) === 0 && parseInt(arrNum[2]) === 0) {
                letterNum += hundreds[arrNum[0]];
            }
            else {
                letterNum = letterNum + hundreds[arrNum[0]] + ' ' + tens[arrNum[1]] + ' ' + units[arrNum[2]];
            }
        }
        else if (arrNum.length === 2) {
            if (parseInt(arrNum[0]) === 0) {
                letterNum = letterNum + units[arrNum[1]];
            }
            else if (parseInt(arrNum[1]) === 0) {
                letterNum = letterNum + tens[arrNum[0]];
            }
            else if (parseInt(arrNum[1]) === 1 && parseInt(arrNum[0]) != 7 && parseInt(arrNum[0]) != 8 && parseInt(arrNum[0]) != 9) {
                letterNum = letterNum + tens[arrNum[0]] + '-et-un';
            }
            else {
                letterNum = letterNum + tens[arrNum[0]] + '-' + units[arrNum[1]];
            }
        }
        else if (arrNum.length === 1) {
            letterNum += units[arrNum[0]];
        }
        alert(letterNum);
    }
    
    if (1 <= parseInt(num) && parseInt(num) <= 999 && typeof(num) != 'object') {
        transformNumberIntoFrenchLetterNumber();
    }
    else if (parseInt(num) === 0) {
        letterNum += 'zéro';
        alert(letterNum);
    }
    else {
        alert('Number is not valid !');
    }

}

// toFrenchString(prompt('Type a number between 0 and 999'));