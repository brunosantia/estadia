<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Carrito de Compra</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles2.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg " id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" id="logo"><img src="/img/logo.png" alt="" width="90px"> Carrito de Compra
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fa-solid fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Panaderia </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cafeteria </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">bibliografia</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <div class="icons">

                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                </form>

            </div>
        </div>
    </nav>

    <div class="product-container" id="cart">
        <div class="product-container">
            <div class="product-image">
                <img src="imagen_producto.jpg" alt="Nombre del producto">
            </div>
            <div class="product-details">
                <h1 class="product-title">Nombre del producto</h1>
                <p class="product-price">Precio: $50</p>
                <button class="add-to-cart-btn" onclick="addToCart(50)">Agregar al carrito</button>
            </div>
        </div>
    </div>

    <script src="js/javascript.js"></script>
</body>

</html>