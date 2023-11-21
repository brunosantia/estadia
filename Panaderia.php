 <!DOCTYPE html>
 <html lang="en">

 <head>
     <?php include('head/Head.php') ?>
 </head>

 <body>
     <div class="home-section">
         <nav class="navbar navbar-expand-lg " id="navbar">
             <div class="container-fluid">
                 <a class="navbar-brand" href="#" id="logo"><img src="/img/logo.png" alt="" width="90px"> PANADERIA </a>
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="fa-solid fa-bars"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
                     <br><span>Pan de dulce</span>
                 </h1>
             </div>
             <div class="img">
                 <img src="./img/logo.png" alt="">
             </div>
         </section>
     </div>

     <div class="container" id="pan">
        <h1>Delicioso pan de dulces</h1>
         <div class="row" style="margin-top:30px;">
             <div class="col-md-3 py-3 py-md-0">
                 <div class="card">
                     <img src="./img/concha.jpg" alt="">
                     <div class="card-body">
                         <h3>Concha de blanca</h3>
                         <h5>$3.00<span><i class="fa-solid fa-basket-shopping"></i></span></h5>
                     </div>
                 </div>
             </div>
             
             <div class="col-md-3 py-3 py-md-0">
                 <div class="card">
                     <img src="./img/conchachoco.jpg" alt="">
                     <div class="card-body">
                         <h3>Concha de chocolate</h3>
                         <h5>$3.00<span><i class="fa-solid fa-basket-shopping"></i></span></h5>
                     </div>
                 </div>
             </div>
             
             <div class="col-md-3 py-3 py-md-0">
                 <div class="card">
                     <img src="./img/cuerno.jpg" alt="">
                     <div class="card-body">
                         <h3>cuernito</h3>
                         <h5>$4.00<span><i class="fa-solid fa-basket-shopping"></i></span></h5>
                     </div>
                 </div>
             </div>
             
             <div class="col-md-3 py-3 py-md-0">
                 <div class="card">
                     <img src="./img/cuernocrema.jpg" alt="">
                     <div class="card-body">
                         <h3>Cuerno relleno de crema</h3>
                         <h5>$5.00<span><i class="fa-solid fa-basket-shopping"></i></span></h5>
                     </div>
                 </div>
             </div>

             <div class="col-md-3 py-3 py-md-0">
                 <div class="card">
                     <img src="./img/cuernfrance.jpg" alt="">
                     <div class="card-body">
                         <h3>Cuerno frances</h3>
                         <h5>$3.00<span><i class="fa-solid fa-basket-shopping"></i></span></h5>
                     </div>
                 </div>
             </div>
             <br>
             <div class="col-md-3 py-3 py-md-0">
                 <div class="card">
                     <img src="./img/muffin.jpg" alt="">
                     <div class="card-body">
                         <h3>muffin</h3>
                         <h5>$3.00<span><i class="fa-solid fa-basket-shopping"></i></span></h5>
                     </div>
                 </div>
             </div>
             <br>
             <div class="col-md-3 py-3 py-md-0">
                 <div class="card">
                     <img src="./img/muffinchoc.jpg" alt="">
                     <div class="card-body">
                         <h3>muffin de chocolate</h3>
                         <h5>$3.00<span><i class="fa-solid fa-basket-shopping"></i></span></h5>
                     </div>
                 </div>
             </div>
             <br>
             <div class="col-md-3 py-3 py-md-0">
                 <div class="card">
                     <img src="./img/oreja.jpg" alt="">
                     <div class="card-body">
                         <h3>Oreja </h3>
                         <h5>$3.00<span><i class="fa-solid fa-basket-shopping"></i></span></h5>
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