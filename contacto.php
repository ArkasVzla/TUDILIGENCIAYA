<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>..:: Contactanos ::..</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
</head>
<body>
<div class="navbar-fixed">
    <nav>
        <div class="encabezado nav-wrapper">
            <div class="container">
                <a href="index.php" class="brand-logo">Tu Diligencia YA</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php"><i class="material-icons left">home</i>Inicio</a></li>
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
                                                    <input id="nombre" name="nombre" type="tel" class="validate">
                                                    <label for="nombre">Nombre</label>
                                                </div>

                                                <div class="input-field col s12 m6 l6">
                                                    <i class="material-icons prefix">account_box</i>
                                                    <input id="apellido" name="apellido" type="tel" class="validate">
                                                    <label for="apellido">Apellido</label>
                                                </div>

                                                <div class="input-field col s12 m6 l6">
                                                    <i class="material-icons prefix">accessibility</i>
                                                    <input id="cedula" name="cedula" type="tel" class="validate">
                                                    <label for="cedula">Cedula</label>
                                                </div>

                                                <div class="input-field col s12 m6 l6">
                                                    <i class="material-icons prefix">phone</i>
                                                    <input id="telefono" name="telefono" type="tel" class="validate">
                                                    <label for="telefono">Telefono</label>
                                                </div>

                                                 <div class="input-field col s12 m6 l6">
                                                    <i class="material-icons prefix">contact_mail</i>
                                                    <input id="correo" name="correo" type="tel" class="validate">
                                                    <label for="correo">Correo</label>
                                                </div>

                                                 <div class="input-field col s12 m6 l6">
                                                    <i class="material-icons prefix">edit_location</i>
                                                    <input id="pais" name="pais" type="tel" class="validate">
                                                    <label for="pais">Pais</label>
                                                </div>                                                                                      
                                            </div>

                                            <div class="input-field col s12">
                                                <select name="servicio">
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
                                                     <input type="file" multiple name="archivo">
                                                 </div>
                                                 <div class="file-path-wrapper">
                                                     <input class="file-path validate" type="text" placeholder="Adjuntar Documento">
                                                 </div>
                                            </div>
                                            
                                            <div class="col s6">
                                                <button class="btn btn-small waves-effect waves-light" type="submit" name="action">Enviar</button>
                                            </div>

                                            <?php if (!empty($errores)): ?>
                                                <div class="card-panel red">
                                                    <?php echo $errores; ?>
                                                </div>
                                            <?php elseif (isset($enviado)): ?>
                                                <div class="card-panel green">
                                                    <p>Solicitud enviada</p>
                                                </div>
                                            <?php endif;  ?>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="modal-footer">
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
                                </div>
                            </div>
                        </form>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>   
</div>

<ul class="sidenav" id="mobile-demo">
    <li><a href="index.php"><i class="material-icons left">home</i>Inicio</a></li>
    <li><a href="la_empresa.php">La Empresa</a></li>
    <li><a href="servicios.php">Servicios</a></li>
    <li><a href="contacto.php">Contacto</a></li>
    <li><a href="solicitar.php" class="btn white black-text waves-effect waves-teal">Solicitar</a></li>
</ul>

<!-- Slider de la pagina -->
<div class="slider">
    <ul class="slides">
        <li>
            <img src="img/servicios.jpg">
            <div class="caption center">
            <h3 class="wow rubberBand">Contactanos</h3>
        </li>
    </ul>
</div>
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col s12 m6 l6">
            <h4 class="blue-text center-align">Para mas informacion contactanos</h4>
            <br><br> 
            <img class="materialboxed responsive-img" width="500" src="img/servicios.png">            
        </div>
        <br><br><br>
        <div class="col s12 m6 l6">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="nombre" type="text" class="validate">
                        <label for="nombre">Nombre</label>
                    </div>

                    <div class="input-field col s6">
                        <i class="material-icons prefix">phone</i>
                        <input id="telefono" type="tel" class="validate">
                        <label for="telefono">Telefono</label>
                    </div>

                    <div class="input-field col s6">
                        <i class="material-icons prefix">email</i>
                        <input id="correo" type="email" class="validate">
                        <label for="correo">Correo</label>
                    </div>

                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="asunto" type="text" class="validate">
                        <label for="asunto">Asunto</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea id="mensaje" class="materialize-textarea validate"></textarea>
                        <label for="mensaje">Mensaje</label>
                    </div>
                    <br><br>
                    <div class="col s12">
                        <p class="center-align"><a class="waves-effect blue waves-light btn-large"><i class="material-icons right">send</i>Enviar</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<footer class="page-footer blue">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">© Tu Diligencia YA </h5>
                <p class="grey-text text-lighten-4">Tramita tus documentos de forma segura</p>
            </div>

            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Siguenos en:</h5>
                <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2018 Copyright Venezuela
            <a class="grey-text text-lighten-4 right" href="#!">Creado por  ..:: DevSign ::..</a>
        </div>
    </div>
</footer>

<div class="fixed-action-btn">
  <a class="btn-floating btn-large blue pulse">
    <i class="large material-icons">menu</i>
  </a>
  <ul>
    <li><a class="btn-floating blue tooltipped" data-position="left" data-tooltip="Facebook"><i class="material-icons">insert_chart</i></a></li>
    <li><a class="btn-floating red darken-1"><i class="material-icons">format_quote</i></a></li>
    <li><a class="btn-floating blue"><i class="material-icons">publish</i></a></li>
  </ul>
</div>

    <!-- JavaScript -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/sitio.js"></script>
    <script>
        // barra de navegacion
        $(document).ready(function(){
            $('.sidenav').sidenav();
        });

        // slider
        $(document).ready(function(){
            $('.slider').slider({
                indicators: false
            });
        });       
     
        
        // boton desplegable
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.fixed-action-btn');
        var instances = M.FloatingActionButton.init(elems, {
        direction: 'top',
        hoverEnabled: false
        });
        
        // tooltipeds
        $(document).ready(function(){
             $('.tooltipped').tooltip();
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
  });
    </script>
</body>
</html>