const carrito = document.getElementById('carrito');
const elementos1 = document.getElementById('lista-1');
const lista = document.querySelector('#lista-carrito tbody');
const vaciarCarritoBtn = document.getElementById('vaciar-carrito');

let totalCompra = 0;

function cargarEventListeners(){
    elementos1.addEventListener('click', comprarElemento);
    vaciarCarritoBtn.addEventListener('click', vaciarCarrito);

    carrito.addEventListener('click', (e) => {
        if (e.target.classList.contains('borrar')) {
            const elemento = e.target.parentElement.parentElement;
            const precio = parseFloat(elemento.querySelector('td:nth-child(3)').textContent.replace('$', ''));
            totalCompra -= precio;
            eliminarProductoLocalStorage(e.target.getAttribute('data-id'));
            elemento.remove();
            actualizarTotal();
        }
    });

    document.addEventListener('DOMContentLoaded', () => {
        mostrarProductosLocalStorage();
    });
}

// Función para agregar producto al carrito
function comprarElemento(e) {
    e.preventDefault();
    if (e.target.classList.contains('agregar-carrito')) {
        const elemento = e.target.parentElement.parentElement;
        leerDatosElemento(elemento);
    }
}

// Función para leer los datos del producto
function leerDatosElemento(elemento) {
    const titulo = elemento.querySelector('h3').textContent;
    const precios = elemento.querySelectorAll('.precio');
    const enlaces = elemento.querySelectorAll('.agregar-carrito');

    enlaces.forEach(enlace => {
        enlace.addEventListener('click', (e) => {
            e.preventDefault();
            const index = Array.from(enlaces).indexOf(enlace);
            const tamaño = obtenerTamaño(index);
            const precio = parseFloat(precios[index].textContent.replace('$', ''));

            const infoElemento = {
                imagen: elemento.querySelector('img').src,
                titulo: titulo,
                precio: precio,
                tamaño: tamaño,
                id: enlace.getAttribute('data-id')
            };

            // Agregar producto al carrito y guardar en localStorage
            insertarCarrito(infoElemento);
            guardarProductoLocalStorage(infoElemento);
        });
    });
}

// Función para insertar producto en el carrito
function insertarCarrito(elemento) {
    const row = document.createElement('tr');
    totalCompra += elemento.precio;  // Sumar al total

    row.innerHTML = `
        <td>
            <img src="${elemento.imagen}" width="100"> 
        </td>
        <td>
            ${elemento.titulo}
        </td>
        <td>
            $${elemento.precio.toFixed(2)}
        </td>
        <td>
            <a href="#" class="borrar" data-id="${elemento.id}">X</a>
        </td>
    `;
    lista.appendChild(row);
    actualizarTotal();
}

// Función para guardar producto en localStorage
function guardarProductoLocalStorage(producto) {
    let productos;
    if (localStorage.getItem('productos') === null) {
        productos = [];
    } else {
        productos = JSON.parse(localStorage.getItem('productos'));
    }
    productos.push(producto);
    localStorage.setItem('productos', JSON.stringify(productos));
}

// Función para mostrar productos del localStorage
function mostrarProductosLocalStorage() {
    let productos;
    if (localStorage.getItem('productos') === null) {
        productos = [];
    } else {
        productos = JSON.parse(localStorage.getItem('productos'));
    }
    productos.forEach(producto => {
        insertarCarrito(producto);
    });
}

function eliminarProductoLocalStorage(id) {
    let productos;
    if (localStorage.getItem('productos') === null) {
        productos = [];
    } else {
        productos = JSON.parse(localStorage.getItem('productos'));
    }

    productos.forEach((producto, index) => {
        if (producto.id === id) {
            productos.splice(index, 1);
        }
    });

    localStorage.setItem('productos', JSON.stringify(productos));
}

function vaciarCarrito() {
    while (lista.firstChild) {
        lista.removeChild(lista.firstChild);
    }
    localStorage.removeItem('productos');
    totalCompra = 0;
    actualizarTotal();
    return false;
}

function actualizarTotal() {
    document.getElementById('total').textContent = `Total: $${totalCompra.toFixed(2)}`;
}

function obtenerTamaño(index) {
    switch (index) {
        case 0:
            return 'Personal';
        case 1:
            return 'Mediana';
        case 2:
            return 'Familiar';
        default:
            return '';
    }
}

document.addEventListener('DOMContentLoaded', cargarEventListeners);


