<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeliHouse</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">

        <div class="menu container">
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="productos.php">Nuestros Productos</a></li>
                    <li><a href="contacto.php">Contáctanos</a></li>


                </ul>
            </nav>
            <div>
                <ul>
                    <li class="submenu">
                        <img src="images/car.svg" id="img-carrito" alt="carrito">
                        <div id="carrito">
                            <table id="lista-carrito">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <p id="total">Total: $0</p>
                            <a href="#" id="vaciar-carrito" class="btn-2">Vaciar Carrito</a>
                            <a href="compra.php" id="confirmar-compra" class="btn-2">Confirmar Compra</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="header-content container">
            <div class="header-img">
                <img src="images/right.png">
            </div>
            <div class="header-txt">
                <h1>Lo mejor en pizzas caseras</h1>
                <p>Prueba las mejores pizzas</p>
                <a href="nosotros.php" class="btn-1">Información</a>
            </div>
        </div>
    </header>

    <section class="ofert container">
        <div class="ofert-1">
            <div class="ofert-img">
                <img src="images/f1.png" alt="">
            </div>
            <div class="ofert-text">
               <h3>Pizza personal</h3>
               <a href="productos.php" class="btn-2">Información</a>
            </div>
        </div>

        <div class="ofert-1">
            <div class="ofert-img">
                <img src="images/f2.png" alt="">
            </div>
            <div class="ofert-text">
               <h3>Pizza mediana</h3>
               <a href="productos.php" class="btn-2">Información</a>
            </div>
        </div>

        <div class="ofert-1">
            <div class="ofert-img">
                <img src="images/f3.png"alt="">
            </div>
            <div class="ofert-text">
               <h3>Pizza Familiar</h3>
               <a href="productos.php" class="btn-2">Información</a>
            </div>
        </div>
    </section>

    <main class="products-container" id="lista-1">

        <h2>Productos</h2>

        <div class="product-content">
            <div class="product">
                <img src="images/1.png" alt="">
                <div class="product-txt">
                    <h3>Pizza Americana</h3>
                    <p>Lista de Precios:</p>
                    <p>Personal: </p><p class="precio">$22</p>
                    </p><a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al carrito</a>
                    <p>Mediana: </p><p class="precio">$29</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="2">Agregar al carrito</a>
                    <p>Familiar: </p><p class="precio">$42</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="3">Agregar al carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="images/2.png" alt="">
                <div class="product-txt">
                    <h3>Pizza de Pepperoni</h3>
                    <p>Lista de Precios:</p>
                    <p>Personal: </p><p class="precio">$25</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="4">Agregar al carrito</a>
                    <p>Mediana: </p><p class="precio">$32</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="5">Agregar al carrito</a>
                    <p>Familiar: </p><p class="precio">$45</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="6">Agregar al carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="images/3.png" alt="">
                <div class="product-txt">
                    <h3>Pizza Vegetariana</h3>
                    <p>Lista de Precios:</p>
                    <p>Personal: </p><p class="precio">$29</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="7">Agregar al carrito</a>
                    <p>Mediana: </p><p class="precio">$39</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="8">Agregar al carrito</a>
                    <p>Familiar: </p><p class="precio">$59</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="9">Agregar al carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="images/4.png" alt="">
                <div class="product-txt">
                    <h3>Pizza de Champiñones</h3>
                    <p>Lista de Precios:</p>
                    <p>Personal: </p><p class="precio">$29</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="10">Agregar al carrito</a>
                    <p>Mediana: </p><p class="precio">$36</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="11">Agregar al carrito</a>
                    <p>Familiar: </p><p class="precio">$53</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="12">Agregar al carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="images/5.png" alt="">
                <div class="product-txt">
                    <h3>Pizza Hawaiana</h3>
                    <p>Lista de Precios:</p>
                    <p>Personal: </p><p class="precio">$23</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="13">Agregar al carrito</a>
                    <p>Mediana: </p><p class="precio">$31</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="14">Agregar al carrito</a>
                    <p>Familiar: </p><p class="precio">$45</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="15">Agregar al carrito</a>
                </div>
            </div>

            <div class="product">
                <img src="images/6.png" alt="">
                <div class="product-txt">
                    <h3>Pizza de Chorizo</h3>
                    <p>Lista de Precios:</p>
                    <p>Personal: </p><p class="precio">$28</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="16">Agregar al carrito</a>
                    <p>Mediana: </p><p class="precio">$37</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="17">Agregar al carrito</a>
                    <p>Familiar: </p><p class="precio">$54</p>
                    <a href="#" class="agregar-carrito btn-2" data-id="18">Agregar al carrito</a>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
        const confirmarCompraBtn = document.getElementById('confirmar-compra');

        confirmarCompraBtn.addEventListener('click', () => {
        const productosCarrito = JSON.parse(localStorage.getItem('productos'));

        if (productosCarrito && productosCarrito.length > 0) {
            localStorage.setItem('productosCompra', JSON.stringify(productosCarrito));
        }
        });
        });
    </script>

    <section class="blog container">

        <div class="blog-1">
            <img src="images/b1.jpg" alt="">
            <h3>Nuestra Ubicación</h3>
            <p>
                Estamos ubicados en el pasaje Villa el sol A-9
                (Frente al estadio, Altura de la panamericana sur)
                del distrito de Subtanjalla, Ica.
            </p>
        </div>

        <div class="blog-1">
            <img src="images/b2.jpg" alt="">
            <h3>Sobre nosotros</h3>
            <p>
                La pizzería Deli House es una pizzería especializada en la preparación y distribución
                de pizzas hechas con el mejor sabor de casa. Tenemos un modesto local donde atendemos
                a nuestros clientes.
            </p>
        </div>

        <div class="blog-1">
            <img src="images/b3.jpg" alt="">
            <h3>Contacta con nosotros</h3>
            <p>
                Puedes llamarnos o escribirnos a nuestros 2 números de WhatsApp: +51 986252378 y
                +51 983455145. También puedes seguirnos en muchas de nuestras redes sociales: puedes
                seguirnos en nuestro facebook haciendo <a href="https://www.facebook.com/HousePizza.pe/?locale=es_LA">click aquí.</a>
            </p>
        </div>

    </section>

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
    <script src="java.js"></script>
</body>
</html>