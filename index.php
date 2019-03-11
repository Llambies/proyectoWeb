<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Landing page</title>
    <!--<link rel="stylesheet" href="./reset.css">-->

    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./marcAlandete.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Fira+Sans');
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="cuerpo">

        <header>
            <img src="./imgs/logo_u15.svg" alt="">

            <p class="Boton_sesion" onclick="iniciarModal()"><a href="#">Iniciar sesión</a></p>

        </header>
        <section class="principal">
            <h1 class="eslogan">
                <bold>El sistema inalámbrico que monotoriza tus cultivos</bold>
            </h1>
            <div class="borde">
                <p>Nuestro producto te permite medir la temperatura, la humedad relativa, la salinidad del agua, la iluminación y la presión atmosférica, y mostrar todas las lecturas de los sensores en tiempo real.</p>
            </div>
            <div class="compra">
                <a href="pagina_compra.html">Adquirir producto</a>
            </div>
        </section>

        <!-- Parte Marc Alandete -->

        <section id="fondoModal">
                <div class="contenidoModal">
                <form action="./comprobar-login.php" class="" method="POST"> <!--Formulario dividido en filas-->
                    <div> <!--  Esta es la primera-->
                        <input type="text" name="usuario" id="" placeholder="Usuario" class="inputDato" required>
                    </div>
                    <?php 
                    
                    if (isset($_GET['loginInvalido'])) {
                        $parametro=$_GET['loginInvalido'];
                        if ($parametro == true) {
                    

                            echo '<div style="margin-top:-25px;">
                                <p style="color:red">Usuario o contraseña inválidos</p>
                        
                                </div>';}
                        }
                    
                    ?>
                    <div><!--  Esta es la segunda-->
                        <input type="password" name="password" id="" placeholder="Contraseña" class="inputDato" required>
                    </div>
                    <div id="botonesFormulario"><!--  Esta es la tercera-->
                        <a class="boton_rojo" onclick="ocultarModal()">Cancelar</a>
                        
                        <input type="submit"name="" id="botonEnviar" class="botonEnviar">
                        
                      
                        
                    </div>
                    <div class="contacto">
                        <p>Si no recuerdas tus datos contáctanos: </p>
                        <p>902 222 345</p>
                    </div>
        
                </form>
            </div>
            </section>

        <!-- Parte Marc Alandete - FIN -->

        <section class="carac" id="carac">
            <article><img src="./imgs/ejGrafica-hum.PNG.png" alt="Humedad">
                <p>La aplicación te permite visualizar las medidas que captan los sensores en tiempo real, como la humedad. De esta forma usted puede controlar mejor sus cultivos para una mejor producción.</p>
            </article>
            <article><img src="./imgs/ejGrafica-temp.PNG.png" alt="Temperatura">
                <p>También permite visualizar las medidas de temperatura, que influye en el crecimiento de la planta y la productividad de las cosechas. Así, usted puede equilibrar estos factores mucho más fácil.</p>
            </article>
            <article><img src="./imgs/ejApp-campo.png" alt="Celular">
                <p>Nuestras redes de sensores inalámbricas combinadas con otras tecnologías le permiten evaluar el estado de sus cultivos para un estudio de la agricultura con precisión.</p>
            </article>
        </section>

         <!-- Parte Marc Alandete -->
        
            <script>
                
                function iniciarModal() {
                    document.getElementById('fondoModal').style.display = "flex";
                }
        
                function ocultarModal() {
                    document.getElementById('fondoModal').style.display = "none";
        
                }
                var modal = document.getElementById('fondoModal');
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
                
               
                <?php 
                    
                    if (isset($_GET['loginInvalido'])) {
                        $parametro=$_GET['loginInvalido'];
                        if ($parametro == true) {
                    

                            echo 'iniciarModal();';}
                        }
                    
                    ?>
                
        
            </script>

        <!-- Parte Marc Alandete - FIN -->

        <footer>
            <li>

                <a href="#">Términos y condiciones</a>
                <a href="#">Mapa del sitio</a>
                <a href="#">Política de privacidad</a>
                <a href="#">FAQ</a>
            </li>
            <p>©Todos los derechos reservados</p>
        </footer>
    </div>
</body>

</html>
