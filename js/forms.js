function updateName() {
  let name = prompt('What\'s your name ?', 'Alice');
  if(name) {
    button.textContent = `Welcome, ${name} !`;
    legend.textContent = `Do you like my website, ${name} ?`;
  }
  else {
    button.textContent = `Welcome !`;
    legend.textContent = `Do you like my website ?`;
  }
  button.style.backgroundColor = 'white';
}

const button = document.getElementById('visitorName');
const legend = document.querySelector('legend')
button.addEventListener('click', updateName);