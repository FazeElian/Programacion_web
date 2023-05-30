//Despliegue menú Inicio
const iconoInicio = document.querySelector(".icono-inicio");
const ulMenu = document.querySelector(".ul-menu");

iconoInicio.addEventListener("click",() =>{
    ulMenu.classList.toggle("nav-menu_visible");
});

//Despliegue menú Registro
const iconoRegistro = document.querySelector(".icono-usuario");
const ulRegistro = document.querySelector(".ul-registro");

iconoRegistro.addEventListener("click",() =>{
    ulRegistro.classList.toggle("nav-menu-registro_visible");
});