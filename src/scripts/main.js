 const images = require.context('../images/', true)
 const imagePath = (name) => images(name, true)

 $(document).ready(function() {

   // Show mobile menu
   $('.menu__icon').on('click', function () {
     $(this).closest('.header__navigation__menu')
       .toggleClass('menu_state_open');
     if ($('.header__navigation__menu').hasClass('menu_state_open')) {
       $('html').addClass('menuopen');
       $('body').addClass('menuopen');
     } else {
       $('html').removeClass('menuopen');
       $('body').removeClass('menuopen');
     }
   });
   $('.menu__item').on('click', function () {
     $('html').removeClass('menuopen');
     $('body').removeClass('menuopen');
     $(this).closest('.header__navigation__menu')
       .removeClass('menu_state_open');
   });

   // Anchor link scroll
   $(".menu__item a").on("click", function (event) {
     event.preventDefault();
     var id  = $(this).attr('href'),
       top = $(id).offset().top;
     $('body,html').animate({scrollTop: top}, 1500);
   });

  // Script for service worker (PWA)
   if ('serviceWorker' in navigator) {
     window.addEventListener('load', function() {
       navigator.serviceWorker.register('sw.js')
         .then(function(registration) {
           // Registration was successful
           console.log('ServiceWorker registration successful with scope: ', registration.scope);
         }, function(err) {
           // registration failed :(
           console.log('ServiceWorker registration failed: ', err);
         });
     });
   }
 });






