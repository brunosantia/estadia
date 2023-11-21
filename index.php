<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('head/Head.php') ?>

</head>

<body>

  <div class="home-section">
    <nav class="navbar navbar-expand-lg " id="navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" id="logo"><img src="/img/logo.png" alt="" width="90px"> CAFE </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa-solid fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">panaderia </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cafeteria </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">bibliografia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">contacto</a>
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
    <section class="home">
      <div class="content">
        <h1>Delicioso
          <br><span>Cafe</span>
        </h1>
        <div id="btn"><button>info site</button></div>
      </div>
      <div class="img">
        <img src="./img/logo.png" alt="">
      </div>
    </section>
  </div>

  <div class="container" id="cards">
    <div class="row">
      <div class="col-md-6 py-3 py-md-0">
        <div class="card">
          <img src="./img/pan.jpg" alt="">
          <div class="card-img-overiay">
            <h3>Pan caliente</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore, autem.</p>
            <button id="rn">order now</button>
          </div>
        </div>
      </div>
      <div class="col-md-6 py-3 py-md-0">
        <div class="card">
          <img src="./img/cafe.jpg" alt="">
          <div class="card-img-overiay">
            <h3>Caje molido</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, nostrum.</p>
            <button id="rn">order now</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="banner">
    <h3>other product</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, sint!</p>
    <button id="btnorder">orden now</button>
  </div>





</body>

</html>