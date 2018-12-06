<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solicitar</title>
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
                    <li><a class="btn white black-text waves-effect waves-teal" href="solicitar.view.php">Solicitar</a></li>
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
<br><br><br>
<div class="container">
    <center><h4>Servicio de Solicitud</h4></center>
<!------------------- FORMULARIO -------------------------->
    <div class="row">
        <div class="col s12">
            <form action="enviar.php" method="post" id="form1" name="form1" enctype="multipart/form-data">
                <div class="row">
                    <!------------------- NOMBRE -------------------------->                                            
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">account_box</i>
                        <input id="nombre" name="nombre" type="text" class="validate">
                        <label for="nombre">Nombre</label>
                    </div>
                    <!------------------- APELLIDO -------------------------->
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">account_box</i>
                        <input id="apellido" name="apellido" type="text" class="validate">
                        <label for="apellido">Apellido</label>
                    </div>
                    <!------------------- CEDULA -------------------------->
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">accessibility</i>
                        <input id="cedula" name="cedula" type="text" class="validate">
                        <label for="cedula">Cedula</label>
                    </div>
                    <!------------------- TELEFONO -------------------------->
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">phone</i>
                        <input id="telefono" name="telefono" type="text" class="validate">
                        <label for="telefono">Telefono</label>
                    </div>
                    <!------------------- CORREO -------------------------->
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">contact_mail</i>
                        <input id="correo" name="correo" type="email" class="validate">
                        <label for="correo">Correo</label>
                    </div>
                    <!------------------- PAIS -------------------------->
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">edit_location</i>
                        <input id="pais" name="pais" type="text" class="validate">
                        <label for="pais">Pais</label>
                    </div>                                                                                      
                </div>
                <!------------------- SELECCIONAR SERVICIOS -------------------------->
                <div class="input-field col s6">
                    <select name="servicio">
                    <option selected>Seleccionar Servicio</option>
                    <option value="Apostillado de documento">Apostillado de documento</option>
                    <option value="Antecedentes penales">Antecedentes penales</option>
                    <option value="Gestiones Gubernamentales">Gestiones Gubernamentales</option>
                    <option value="Tramites Civiles">Tramites Civiles</option>
                    <option value="Tramites Bancarios">Tramites Bancarios</option>
                    <option value="Pago de deudas de servicios Publicos">Pago de deudas de servicios Publicos</option>
                    <option value="Supervision de Viviendas">Supervision de Viviendas</option>
                    </select>                                                
                </div>
                 <!------------------- ADJUNTAR ARCHIVO -------------------------->               
                <div class="file-field input-field col s6">
                    <div class="btn btn-large">
                        <span>File</span>
                        <input name="archivo" type="file" multiple>
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Adjuntar Documento">
                    </div>
                </div>
                
                <div class="col s6">
                    <input type="submit" name="submit"  value="enviar">
                </div>
                               
            </form>                            
        </div>
    </div>
            <?php if(!empty($errores)): ?>
                    <div class="card-panel white-text red">
                        <?php echo $errores; ?>
                    </div>
                <?php elseif ($enviado): ?>
                    <div class="card-panel green">
                        <p>Su solicitud ha sido enviada correctamente, estaremos en contacto con usted</p>
                    </div>
                <?php endif ?> 
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