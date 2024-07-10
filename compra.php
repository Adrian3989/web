<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar Compra</title>
    <link rel="stylesheet" href="style4.css">
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
            <li><a href="index.php">Regresar al Inicio</a></li>
        </ul>
    </nav>
    
</div>
</header>

<section class="carrito">
    <h2 style="color: rgb(25, 0, 255);">Confirmar compra</h2>
    
    <form action="pedido.php" method="post">
        <h3>Datos del Cliente</h3>
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" placeholder="Nombre" required>
            <br>
            <label for="phone">Teléfono:</label>
            <input type="tel" name="phone" id="phone" placeholder="Teléfono" required>
            <br>
            <label for="adress">Dirección:</label>
            <input type="text" name="adress" id="adress" placeholder="Dirección">
            <br>
            <label for="tipo-envio">Tipo de Envío:</label>
            <select id="tipo-envio" name="tipo-envio"  required>
                <option value="delivery">Delivery</option>
                <option value="recojo">Recojo en Tienda</option>
            </select>
            <br>
            <input type="hidden" id="carrito" name="carrito">
            <input class="btn" type="submit" name="register2" value="Enviar">
    </form>

    <h2>Resumen de Compra</h2>
        <div id="lista-carrito">
            <table name="lista-carrito" id="lista-carrito">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody id="tabla-productos"></tbody>
            </table>
            <p id="total">Total: $0</p>
            <p>Asegúrese de cancelar en los 10 minutos próximos al envío de su pedido.</p>
        </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const productosCompra = JSON.parse(localStorage.getItem('productosCompra'));
        const tablaProductos = document.getElementById('tabla-productos');
        const totalCompra = document.getElementById('total');

        if (productosCompra && productosCompra.length > 0) {
            let total = 0;

            productosCompra.forEach(producto => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${producto.titulo}</td>
                    <td>$${producto.precio.toFixed(2)}</td>
                `;
                tablaProductos.appendChild(row);
                total += parseFloat(producto.precio);
            });

            totalCompra.textContent = `Total: $${total.toFixed(2)}`;
        } else {

            totalCompra.textContent = `Total: $0`;
        }

        localStorage.removeItem('productosCompra');
    });
</script>

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
        <img src="images/yape.jpeg" alt="">
        <h3> Código QR Yape: +51 989674154</h3>
    </div>

    <div class="blog-1">
        <img src="images/plin.jpeg" alt="">
        <h3> Código QR Plin: +51 989674154</h3>
    </div>

    <div class="blog-1">
        <img src="images/tarjetas.jpeg" alt="">
    </div>

</section>
    
</body>
</html>