<div class="header">
    <!-- <h1>Este es el encabezado</h1> -->
    <img src="img/logo.jpg" alt="">
<div class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Inicio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Catálogo
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#" onclick="cargar('main','catalogo/muebles.php')">Muebles</a>
                <a class="dropdown-item" href="#" onclick="cargar('main','catalogo/electrodomesticos.php')">Electrodomésticos</a>
                <a class="dropdown-item" href="#" onclick="cargar('main','catalogo/lineablanca.php')">Línea blanca</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" onclick="cargar('main','catalogo/electronica.php')">Electrónica</a>
                </div>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="#" onclick="cargar('main','nosotros/nosotros.php')">Nosotros <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="cargar('main','eventos/eventos.php')">Eventos</a>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Carrito de compras
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#" onclick="cargar('main','carrito/registro.php')">Registro</a>
                <a class="dropdown-item" href="#" onclick="cargar('main','carrito/login.php')">Login</a>
                <a class="dropdown-item" href="#" onclick="cargar('main','carrito/misordenes.php')">Mis ordenes</a>
                <a class="dropdown-item" href="#" onclick="cargar('main','carrito/centrodm.php')">Centro de mensajes</a>
                <a class="dropdown-item" href="#" onclick="cargar('main','carrito/consulta.php')">Consulta</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" onclick="cargar('main','carrito/checkout.php')">Checkout</a>
                </div>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>

</div>

</div>