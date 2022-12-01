<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:url" content="http://avantecmx.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="AVANTEC" />
    <meta property="og:description" content="En AVANTEC te ayudamos a desarrollar e implementar soluciones tecnológicas que
    impulsen los resultados de tu negocio" />
    <meta property="og:image" content="https://raw.githubusercontent.com/vidaencodigo/avantec/master/assets/images/avantec.jpg" />

    <link rel="icon" href="assets/icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Avantec</title>
    <script src="https://kit.fontawesome.com/3d68344ae4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/slider.css">

</head>

<body>


    <section class="logo--header">
        <div class="content--logo--header">
            <div>
                <img src="assets/images/avantec.jpg" alt="avantec" class="logo--image">
            </div>
            <div>

            </div>
        </div>
    </section>

    <nav class="navigation">
        <div class="content--navigation">
            <ul>
                <li>
                    <a href="index.php" class="link">Inicio</a>
                    <span class="line"></span>
                </li>
                <li>
                    <a href="index.php#servicios" class="link">Servicios</a>
                    <span class="line"></span>
                </li>
                <li>
                    <a href="#" class="link">Contacto</a>
                    <span class="line"></span>
                </li>
            </ul>
        </div>
    </nav>


    <section class="contact--banners">
        <div class="content">
            <div class="content--info">
                <h1>
                    Contactanos!
                </h1>
                <p>
                    Lo esperamos.
                </p>
            </div>
        </div>
    </section>


    <section class="contact">
        <div class="content">
            <article class="form--action">
                <h2>

                    ¿AVANTEC se adecua a su proyecto?
                    ¡Contactanos!
                </h2>
            </article>
            <article class="formulario">
                <form class="form" method="post" action="index.php?controller=contacto&action=send_mail">
                    <div class="control--horizontal">

                        <div class="control--group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" required autofocus>
                        </div>
                        <div class="control--group">
                            <label for="sourname">Apellidos</label>
                            <input type="text" name="sourn" id="sourn" required>
                        </div>
                    </div>

                    <div class="control--group">
                        <label for="mail">E-mail</label>
                        <input type="mail" name="mail" id="mail" required>
                    </div>

                    <div class="control--group">
                        <label for="comment">Comentario</label>
                        <textarea name="commnent" id="" cols="80" rows="10"></textarea>

                    </div>

                    <div class="buttons">
                        <button type="submit" class="btn primary">Enviar</button>
                    </div>
                </form>
            </article>
        </div>
    </section>


    <footer>
        <div class="content">
            <div class="info">
                <h3>AVANTEC</h3>
            </div>
        </div>
    </footer>
    <!-- JavaScript -->


</body>

</html>