<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width"/>
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Login | Amary</title>

    <!--Fuentes de tipo de letras Iconografia-->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <!--Mis estilos-->

    <link rel="stylesheet" href="stylel.css">

</head>
<body>
    
    <div class="contenedor-login">

        <!--Slider-->
        <div class="contenedor-slider">
            <div class="slider">

                <!--Slide 1-->
                <div class="slide fade">
                    <img src="img/Campana7.jpg" alt="">


                    <div class="contenido-slider">

                        <div class="logo">
                            
                        </div>

                        <p class="slider-texto">
                            
                        </p>

                    </div>

                </div>

                <!--Slide 2-->
                <div class="slide fade">
                    <img src="img/Campana5.jpg" alt="">

                    <div class="contenido-slider">

                        <div class="logo">
                            
                        </div>

                        <p class="slider-texto">
                            
                        </p>

                    </div>

                </div>

            </div>

            <!--Botones next y prev-->
            <a href="#" class="prev"><i class="fas fa-chevron-left"></i></a>
            <a href="#" class="next"><i class="fas fa-chevron-right"></i></a>

            <!--dots-->
            <div class="dots">

                <!--<span class="dot active"></span>-->

            </div>

        </div>

        <!--Formularios-->

        <div class="contenedor-texto">

            <div class="contenedor-form">

                <a href="https://amarycr.com/" style="color: #708848;">Volver a la página principal</a>
                <h1 class="titulo">¡Bienvenido a Amary!</h1>
                <p class="descripcion">Inicie sesion para poder acceder a tu dispositivo Ally y ver la informacion disponible</p>
                
                <!--Tabs-->
                <ul class="tabs-links">
                    <li class="tab-link active">Iniciar Sesión</li>
                    
                </ul>

                <!--Formulario de login-->

                <form action="" method="POST" id="formLogin" class="formulario active">

                    <div class="error-text">
                        <p>aqui los errores del formulario</p>
                    </div>

                    <input type="text" placeholder="Correo electrónico" class="input-text" name="correo" autocomplete="off">
                    <div class="grupo-input">

                        <input type="password" placeholder="Contraseña" name="password" class="input-text clave">
                        <button type="button" class="icono fas fa-eye mostrarClave"></button>

                    </div>

                        
                        <button class="btn" id="btnLogin" type="button">Iniciar Sesión</button>


                </form>

                <!--Formulario de registro-->

                <form action="" method="POST" id="formRegistro" class="formulario ">

                    <div class="error-text ">

                    </div>

                    <input type="text" placeholder="Nombre y Apellidos" class="input-text" name="nombre" autocomplete="off">
                    <input type="text" placeholder="Correo electrónico" class="input-text" name="correo" autocomplete="off">

                    <div class="grupo-input">

                        <input type="password" placeholder="Contraseña" name="password" class="input-text clave">
                        <button type="button" class="icono fas fa-eye mostrarClave"></button>

                    </div>

                    <!--Checkbox Personalizados-->
                    <label class="contenedor-cbx animate">
                        Me gustaría recibir notificaciones sobre productos
                        <input type="checkbox" name="cbx_notificaciones" checked>
                        <span class="cbx-marca"></span>
                    </label>

                    <label class="contenedor-cbx animate">

                        He leido y acepto los
                        <a href="#" class="link">Términos y Condiciones</a>
                        <a href="#" class="link">y Política de privacidad de mi tienda</a>

                        <input type="checkbox" name="cbx_terminos">
                        <span class="cbx-marca"></span>

                    </label>

                    <button class="btn" id="btnRegistro" type="button">Crear cuenta</button>

                </form>

            </div>

        </div>

    </div>

    <!--Scripts-->

    <script src="js/login.js"></script>

</body>
</html>