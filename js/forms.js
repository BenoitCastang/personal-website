const para = document.getElementById('player-one');
console.log(para);
para.addEventListener('click', updateName);

function updateName() {
  let name = prompt('Enter name');
  para.textContent = 'Bienvenue à toi, ' + name + ' !';
}