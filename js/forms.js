const para = document.getElementById('visitorName');
const legend = document.querySelector('legend')
para.addEventListener('click', updateName);

function updateName() {
  let name = prompt('Quel est votre nom ?', 'Alice');
  if(name != null || name != '') {
    para.textContent = `Bienvenue, ${name} !`;
    legend.textContent = `Aimez-vous mon site, ${name} ?`;
  }
  else if(name == null || name == '') {
    para.textContent = `Bienvenue !`;
    legend.textContent = `Aimez-vous mon site ?`;
  }
  para.style.backgroundColor = 'white';
}
