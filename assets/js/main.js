const menu = document.getElementById('hamburger-icon');
const sidebar = document.getElementsByClassName('sidebar')[0];
const smoke = document.getElementsByClassName('smoke')[0];
const maincont = document.getElementsByClassName('main-content')[0];
const kincup = document.getElementsByClassName('kincup')[0];
const kuncup = document.getElementsByClassName('kincup')[1];

menu.addEventListener('click',function(){
    smoke.classList.toggle('hide');
    sidebar.classList.toggle('hide');
    maincont.classList.toggle('hide');
    kincup.classList.toggle('hide');
    kuncup.classList.toggle('hide');
});