// Animacion de barra de menu

$(window).scroll(function() {
  if ($(document).scrollTop() >= 100) {
    $('.encabezado').addClass('fondo');
  } else {
    $('.encabezado').removeClass('fondo');
  }
});


//*-------------- INICIANDO WOW ------------------ * //

new WOW().init();

var wow =  new  WOW (
  {
    boxClass :      'wow' ,       // clase css del elemento animado (el valor predeterminado es wow) 
    animateClass :  'animated' , // clase css de la animación (el valor predeterminado es animado) 
    offset :        0 ,           // distancia al elemento al activar la animación (el valor predeterminado es 0) 
    mobile :        true ,        // desencadenar animaciones en dispositivos móviles (el valor predeterminado es true) 
    live :          true ,        // actuar sobre el contenido cargado de forma asíncrona (el valor predeterminado es true)
    callback :      function ( box ) {
       // la devolución de llamada se activa cada vez que se inicia una animación 
      // el argumento que se pasa es el nodo DOM que se está animando
    }
  }
);
wow . init ();