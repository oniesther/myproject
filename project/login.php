<?php 
session_start();

?>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/swiper.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/owl.min.css">
    <title>Document</title>
</head>
<body>
    
    <div class="topnavbar" style="background-color: rgb(0, 140, 255); height: 30px;">
      <div class="text-center "><a href="" style="color:#fff; text-decoration: none;">Get free delivery nation or pickup in
          store</a></div>
    
    </div>
    <!-- NAVBAR -->
    <nav class="navbar-one flex">
      <div class="container d-flex justify-content-evenly">
        <a href="#" class="text-dark text-decoration-none"><span>Free delivery worldwide</span></a>
        <a href="#" class="text-dark text-decoration-none"><span>Order Online & Safely Collect in Store</span></a>
        <a href="#" class="text-dark text-decoration-none"><span>Monthly Payment Options</span></a>
      </div>
    </nav>
    <nav class="navbar" style="background-color: black; height: 70px;">
      <div class="container-fluid">
        <a class="navbar-brand fs-1 fw-bold text-light" href="index.php">iStore</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <li class="nav-item dropdown" id="box" style="list-style: none;">
          <a class="nav-link dropdown-toggle fs-6 text-light" href="mac.php" id="navbarDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Mac
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" id="drop" style="list-style-type: none;">
            <li><a class="dropdown-item fs-6" id="drop" href="mac.php" style="list-style: none;">Macbook Pro|M1 Pro<br>chip</a>
            </li>
            <li><a class="dropdown-item fs-6" href="mac.php">Macbook Pro|M1 Chip</a></li>
            <li><a class="dropdown-item fs-6" href="mac.php">Macbook Air|M1 Chip</a></li>
            <li><a class="dropdown-item fs-6" href="mac.php">Mac mini|M1 Chip</a></li>
            <li><a class="dropdown-item fs-6" href="mac.php">Macbook Pro|16"</a></li>
            <li><a class="dropdown-item fs-6" href="mac.php">Macbook Pro|13"</a></li>
            <li><a class="dropdown-item fs-6" href="mac.php">Macbook Pro|M1 Chip</a></li>
            <li><a class="dropdown-item fs-6" href="mac.php">Macbook Air</a></li>
            <li><a class="dropdown-item fs-6" href="mac.php">iMac</a></li>
            <li><a class="dropdown-item fs-6" href="mac.php">iMac Pro</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown" style="list-style: none;">
          <a class="nav-link dropdown-toggle fs-6 text-light" href="apple.php" id="navbarDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            iphone
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="list-style: none;">
            <li><a class="dropdown-item fs-6" href="apple.php">iphone 13mini-new</a></li>
            <li><a class="dropdown-item fs-6" href="apple.php">iphone 13-new</a></li>
            <li><a class="dropdown-item fs-6" href="apple.php">iphone 13Pro-new</a></li>
            <li><a class="dropdown-item fs-6" href="apple.php">iphone 13Pro Max-new</a></li>
            <li><a class="dropdown-item fs-6" href="apple.php">iphone 12mini</a></li>
            <li><a class="dropdown-item fs-6" href="apple.php">iphone 12</a></li>
            <li><a class="dropdown-item fs-6" href="apple.php">iphone 12Pro</a></li>
            <li><a class="dropdown-item fs-6" href="apple.php">iphone 12Pro Max</a></li>
            <li><a class="dropdown-item fs-6" href="apple.php">iphone SE</a></li>
            <li><a class="dropdown-item fs-6" href="apple.php">iphone 11</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown" style="list-style: none;">
          <a class="nav-link dropdown-toggle fs-6 text-light" href="product.php" id="navbarDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            ipad
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="list-style: none;">
            <li><a class="dropdown-item fs-6" href="product.php">ipad 9th Gen-new</a></li>
            <li><a class="dropdown-item fs-6" href="product.php">ipad 8th Gen</a></li>
            <li><a class="dropdown-item fs-6" href="product.php">ipad 7th Gen</a></li>
            <li><a class="dropdown-item fs-6" href="product.php">ipad Air</a></li>
            <li><a class="dropdown-item fs-6" href="product.php">ipad Pro|M1 chip</a></li>
            <li><a class="dropdown-item fs-6" href="product.php">ipad Pro</a></li>
            <li><a class="dropdown-item fs-6" href="product.php">ipad mini 6-new</a></li>
            <li><a class="dropdown-item fs-6" href="product.php">ipad mini</a></li>
          </ul>
        </li>
        <li class="nav-item" style="list-style: none;">
          <a class="nav-link fs-6 text-light" href="apple.php">Apple Watch</a>
        </li>
        <li class="nav-item dropdown" style="list-style: none;">
          <a class="nav-link dropdown-toggle fs-6 text-light" href="shopping.php" id="navbarDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Airpods
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item fs-6" href="shopping.php">Airpod with Wireless</a></li>
            <li><a class="dropdown-item fs-6" href="shopping.php">Charging|3rd Gen-new</a></li>
            <li><a class="dropdown-item fs-6" href="shopping.php">Airpods Max</a></li>
            <li><a class="dropdown-item fs-6" href="shopping.php">Airpods Pro</a></li>
            <li><a class="dropdown-item fs-6" href="shopping.php">Airpods with Charging</a></li>
            <li><a class="dropdown-item fs-6" href="shopping.php">Case</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown" style="list-style: none;">
          <a class="nav-link dropdown-toggle fs-6 text-light" href="#" id="navbarDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Accessories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="list-style: none;">
            <li><a class="dropdown-item fs-6" href="#">AirTags</a></li>
            <li><a class="dropdown-item fs-6" href="#">Apple Pencil</a></li>
            <li><a class="dropdown-item fs-6" href="#">Apple TV</a></li>
            <li><a class="dropdown-item fs-6" href="#">Audio</a></li>
            <li><a class="dropdown-item fs-6" href="#">Bags & Sleeves</a></li>
            <li><a class="dropdown-item fs-6" href="#">Cable & Docks</a></li>
            <li><a class="dropdown-item fs-6" href="#">Charging</a></li>
            <li><a class="dropdown-item fs-6" href="#">Cover & Screen</a></li>
            <li><a class="dropdown-item fs-6" href="#">Protectors</a></li>
            <li><a class="dropdown-item fs-6" href="#">ipad</a></li>
            <li><a class="dropdown-item fs-6" href="#">Remote Working</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown" style="list-style: none;">
          <a class="nav-link dropdown-toggle fs-6 text-light" href="#" id="navbarDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Support
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="list-style: none;">
            <li><a class="dropdown-item fs-6" href="#">Device Finacing</a></li>
            <li><a class="dropdown-item fs-6" href="#">B2B</a></li>
            <li><a class="dropdown-item fs-6" href="#">Trade-in</a></li>
            <li><a class="dropdown-item fs-6" href="#">iCare</a></li>
          </ul>
        </li>
              <div class="text-light text-decoration-none d-flex" style="list-style: none;">
            <a href="#"><i class="fas fa-search text-light"></i></a>
            <a href="login.php"><i class="fas fa-user-circle text-light"></i></a>
           <a href="#"><i class="fas fa-shopping-cart text-light"></i></a>
    </div>
</nav>  <!-- END OF NAVBAR -->






    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div>
                                        <h1 class="h4 text-gray-900 mb-4 fs-1">Customer Login
                                            <hr class="border">
                                        </h1>
                                        
                                    
                                    <form action="welcome.php  " method="POST">
                                        <div class="form-group">
                                            <label>Email </label>
                                            <input type="email" class="form-control form-control-user mt-1"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="email" require>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label> Password</label>
                                            <input type="password" class="form-control form-control-user mt-1"
                                                id="exampleInputPassword" placeholder="Password" name="password" required>
                                        </div>
                                        <div class="form-group mt-1">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                         <button type="submit" class="btn btn-primary w-50 mt-2" name="login">Login</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forget_password.php">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
</div>

    </div>
<!-- FOOTER -->
<div class="footer pt-4 mt-5">

    <div class="container">
      <div class="row">

        <div class="col-sm-3 mb-3">
          <img style="width: 140px;" src="./assets/images/iphone.png" alt="">

          <div class="social_media_icons mt-3">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-youtube"></i>
            <i class="fab fa-instagram"></i>
            <i class="fas fa-envelope"></i>
          </div>

        </div>
  
        <div class="col-sm-3 mb-3">
          <h6 class="fw-bold"> Company </h6>
            <li><a href="">Store Locator</a></li>
            <li><a href="">Contact</a></li>
        </div>
  
        <div class="col-sm-3 mb-3">
          <h6 class="fw-bold"> Products </h6>
            <li><a href="">Shop Ipad</a></li>
            <li><a href="">Shop Iphone</a></li>
            <li><a href="">Shop Mac</a></li>
            <li><a href="">Shop Accessories</a></li>
        </div>
  
        
        <div class="col-sm-3 mb-3">
          <h6 class="fw-bold"> Policies </h6>
            <li><a href="">Terms of services </a></li>
            <li><a href="">Return policy</a></li>
            <li><a href="">Shopping policy</a></li>
            <li><a href="">Privacy policy</a></li>
      </div>
  
    </div>
    </div>

    <div class="footer_bottom pt-3">
      <div class="container">
        <div class="row">

          <div class="col-6">
            <p> &copy; 2021 iStore Nigeria</p>
          </div>

          <div class="col-6 d-flex justify-content-end">
            <img src="./assets/images/master.png" alt="">
          </div>

        </div>
      </div>
    </div>
    
  </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    

         <script src="script.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>