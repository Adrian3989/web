<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <header class="header">
        <div class="menu container">
            <input type="checkbox" id="menu">
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="productos.php">Nuestros Productos</a></li>
                    <li><a href="contacto.php">Contáctanos</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <form method="post" action="">
        <h2>Contacto</h2>

        <div class=input-group>
            <?php if(isset($mensaje)): ?>
               <h3><?php echo $mensaje; ?></h3>
            <?php endif; ?>

            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" placeholder="Nombre" required>
            <label for="phone">Telefono</label>
            <input type="tel" name="phone" id="phone" placeholder="Telefono" required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="message">Mensaje</label>
            <textarea type="mesage" name="message" id="message" cols="30" rows="5" placeholder="Mensaje" required></textarea>
            <input class="btn" type="submit" name="register" value="Enviar">
        </div>

        </form>
    </div>

    </form>

    <footer class="footer">

        <div class="footer-content container">
            <div class="link">
                <h3></h3>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                </ul>
            </div>

            <div class="link">
                <h3></h3>
                <ul>
                    <li><a href="https://www.facebook.com/HousePizza.pe/?locale=es_LA">Facebook</a></li>
                </ul>
            </div>

            <div class="link">
                <h3></h3>
                <ul>
                    <li><a href="https://wa.me/+51989674154">WhatsApp</a></li>
                </ul>
            </div>

            <div class="link">
                <h3></h3>
                <ul>
                    <li><a href="https://www.google.com/maps/place/Deli+House/@-14.0203088,-75.7622494,19z/data=!4m6!3m5!1s0x9110fd03922f2d37:0xac0879e6018deeb9!8m2!3d-14.0203087!4d-75.7618878!16s%2Fg%2F11h3dfn0qb?entry=ttu">Google Maps</a></li>
                </ul>
            </div>

        </div>

    </footer>
    <?php
    include("registrar.php");
    ?>
</body>
</html>