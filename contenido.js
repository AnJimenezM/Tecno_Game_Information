
const patron = document.querySelector('#patron');
const submenu = document.querySelector('#submenu');

patron.onclick = () =>{
    patron.classList.toggle('open')
    submenu.classList.toggle('visible')
}


