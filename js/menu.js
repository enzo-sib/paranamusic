if (screen.width < 800){
  document.getElementById("boton-menu").classList.remove('hyde')
  document.getElementById('iconos-header').classList.add('hyde')
  document.getElementById('nav').classList.add('hyde')
  document.getElementById('musica-nav').classList.add('hyde')
  document.getElementById('index-banner').classList.add('hyde')
}

function openNav() {
    document.getElementById("mySidenav").style.width = "70%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}