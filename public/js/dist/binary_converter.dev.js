"use strict";

var link = document.querySelector("h1 a");
var main = document.querySelector('main');
var bin = document.querySelector('form input:first-of-type');
var hexa = document.querySelector('form input:last-of-type');

if (bin.value < 100) {
  hexa.value = bin.value * 10;
}

console.log(bin.value);
console.log(hexa.value);
link.addEventListener('click', function onclick(event) {
  event.preventDefault();
  console.log('past ' + link.getAttribute('style'));
  link.style.color = 'yellow';
  console.log('now ' + link.getAttribute('style')); // link.textContent = 'le loup a faim';
  // link.addEventListener('click', () => window.location = "/index.php");
});
main.addEventListener('click', function () {
  main.className = 'main toast';
});