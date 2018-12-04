<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>...::: Tu Diligencia YA :::...</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/materialize.min.css">
</head>
<body>
<!-- Barra de navegacion -->
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper blue lighten-2">
            <div class="container">
                <a href="index.php" class="brand-logo">Tu Diligencia YA</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php"><i class="material-icons left">home</i> Inicio</a></li>
                    <li><a href="la_empresa.php">La Empresa</a></li>
                    <li><a href="servicios.php">Servicio</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li>
                        <form action="#" class="black-text">
                            <!-- Modal Trigger -->
                            <a class="btn white black-text waves-effect waves-teal modal-trigger" href="#modal0">Solicitar</a>
                            <div id="modal0" class="modal top-sheet">
                                <div class="modal-content">
                                    <h4>Solicitud de Servicio</h4>
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="row">                                            
                                                <div class="input-field col s12 m6 l6">
                                                    <i class="material-icons prefix">account_box</i>
                                                    <input id="nombre" type="tel" class="validate">
                                                    <label for="nombre">Nombre</label>
                                                </div>

                                                <div class="input-field col s12 m6 l6">
                                                    <i class="material-icons prefix">account_box</i>
                                                    <input id="apellido" type="tel" class="validate">
                                                    <label for="apellido">Apellido</label>
                                                </div>

                                                <div class="input-field col s12 m6 l6">
                                                    <i class="material-icons prefix">accessibility</i>
                                                    <input id="cedula" type="tel" class="validate">
                                                    <label for="cedula">Cedula</label>
                                                </div>

                                                <div class="input-field col s12 m6 l6">
                                                    <i class="material-icons prefix">phone</i>
                                                    <input id="telefono" type="tel" class="validate">
                                                    <label for="telefono">Telefono</label>
                                                </div>

                                                 <div class="input-field col s12 m6 l6">
                                                    <i class="material-icons prefix">contact_mail</i>
                                                    <input id="correo" type="tel" class="validate">
                                                    <label for="correo">Correo</label>
                                                </div>

                                                 <div class="input-field col s12 m6 l6">
                                                    <i class="material-icons prefix">edit_location</i>
                                                    <input id="pais" type="tel" class="validate">
                                                    <label for="pais">Pais</label>
                                                </div>                                                                                      
                                            </div>

                                            <div class="input-field col s12">
                                                <select>
                                                <option value="" disabled selected>Seleccionar Servicio</option>
                                                <option value="1">Apostillado de documento</option>
                                                <option value="2">Antecedentes penales</option>
                                                <option value="3">Gestiones Gubernamentales</option>
                                                <option value="4">Tramites Civiles</option>
                                                <option value="5">Tramites Bancarios</option>
                                                <option value="6">Pago de deudas de servicios Publicos</option>
                                                <option value="7">Supervision de Viviendas</option>
                                                </select>                                                
                                            </div>
                                                              
                                            <div class="file-field input-field col s6">
                                                 <div class="btn btn-large">
                                                     <span>File</span>
                                                     <input type="file" multiple>
                                                 </div>
                                                 <div class="file-path-wrapper">
                                                     <input class="file-path validate" type="text" placeholder="Adjuntar Documento">
                                                 </div>
                                            </div>
                                            
                                            <div class="col s6">
                                                <button class="btn btn-small waves-effect waves-light" type="submit" name="action">Enviar</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="modal-footer">
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<ul class="sidenav" id="mobile-demo">
    <li><a href="index.php"><i class="material-icons left">home</i>Inicio</a></li>
    <li><a href="la_empresa.php">La Empresa</a></li>
    <li><a href="servicios.php">Servicios</a></li>
    <li><a href="contacto.php">Contacto</a></li>
    <li><a href="solicitar.php" class="btn white black-text waves-effect waves-teal">Solicitar</a></li>
</ul>

    <!-- Slider de la pagina -->
    <div class="slider fullscreen">
    <ul class="slides">
      <li>
        <img src="img/slider3.jpg"> <!-- random image -->
        <div class="caption center-align">
            <h1 class="center-align"><i class="large material-icons">public</i></h1>
            <h3>Estas Fuera de Venezuela</h3>
            <h5 class="light grey-text text-lighten-3">¿Y no tienes como tramitar tus documentos?</h5>
        </div>
      </li>
      <li>
        <img src="img/slider2.jpg"> <!-- random image -->
        <div class="caption left-align">
            <h1 class="left-align"><i class="large material-icons">record_voice_over</i></h1>
            <h3 class="white-text">En Tu Diligencia YA</h3>
            <h5 class="white-text">Podras Tramitar tus documentos de forma segura</h5>
        </div>
      </li>
      <li>
        <img src="img/slider1.jpg"> <!-- random image -->
        <div class="caption right-align">
            <h1 class="right-align"><i class="large material-icons">wc</i></h1>
            <h3 class="white-text">Ven y solicita</h3>
            <h5 class="white-text">Unos de nuestros servicios</h5>
        </div>
      </li>
    </ul>
  </div>
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        // barra de navegacion
        $(document).ready(function(){
            $('.sidenav').sidenav();
        });

        // slider
        $(document).ready(function(){
            $('.slider').slider({   
                indicators: true,
                duration: 800,
                interval: 3700
            });
        });

        // Modals
        $(document).ready(function(){
             $('.modal').modal();
        });
        
        //select
        $(document).ready(function(){
            $('select').formSelect();
        });

        $(document).ready(function() {
             $('input#input_text, textarea#textarea2').characterCounter();
        });
      
        
            
    </script>


</body>
</html>