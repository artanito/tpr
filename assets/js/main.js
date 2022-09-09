const navigation = document.getElementById("nav");
const menu = document.getElementById("hamburger");

menu.addEventListener("click", () => {
  navigation.classList.toggle("active");
  menu.classList.toggle("active");
});
$(document).ready(function () {
  //Maruf al Bashir Reza
  $(window).on('load', function () { // makes sure the whole site is loaded 
    $('#status').fadeOut(); // will first fade out the loading animation 
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
    $('body').delay(550).css({ 'overflow': 'visible' });
  });
});
