
const flecha = document.querySelector('#flecha');
const cono = document.querySelector('#cono');


cono.onclick = () =>{
    cono.classList.toggle('open')
    flecha.classList.toggle('visible')
}