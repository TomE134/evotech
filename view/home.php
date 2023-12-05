<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="view/css/home.css">
    <title>Evotech</title>
    <ion-icon name="desktop-outline"></ion-icon>


</head>


<body>
    <nav class="navbar navbar-expand-lg  fixed-top py-1">
        <div class="container-fluid">
            <img src="images/Picture1.png" style="width: 50px; height: 50px;" alt="Evotech Logo">
            <a class="navbar-brand me-auto" href="home.php">Evotech</a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Evotech</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-basket">
                                    Basket
                                </i>
                            </a>
                        </li>

                </div>
            </div>
            <a href="login" class="login-button">Login</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
     
    <!--Empty box to fix formatting error 
        Creates an empty above content to prevent main content  being covered by navbar
    -->
    <section class="bg-dark text-light p-5 text-center text-sm-start py-5">

    </section>

    <section class="bg-success text-light p-5 text-center text-sm-start py-5">
        <div class="container">
            <div class="d-sm-flex allign-items-center justify-content-between">
                <div>
                    <h2>Evolve Your Gear</h2>
                    <p class="lead my-3">
                    
                    </p>
                    <button class="btn btn-primary btn-md">Shop Now</button>
                </div>
               <img class="img-fluid w-10" src="images/Picture1.png"alt="Evotech"> 
            </div>
        </div>

    </section>

    <!--Boxes-->
    <section class="p-5">
        <div class="container">
         <div class="row">
            <div class="row text-center">
                <div class="col-md">
                    <div class="card bg-light text-dark" >
                        <i class="bi bi-truck" style="font-size: 80px;"></i>
                        <div class="card-body">
                          <h5 class="card-title">Free Delivery</h5>
                          <p class="card-text">Across UK and Global Orders</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-light text-dark" >
                        <i class="bi bi-lightning-charge-fill" style="font-size: 80px;"></i>
                        <div class="card-body">
                          <h5 class="card-title">Extended Warranty</h5>
                          <p class="card-text">12 Month Quality Guarantee</p>
                        </div>
                    </div>   

                </div>
                <div class="col-md">
                   <div class="card bg-light text-dark" >
                      <i class="bi bi-person-circle" style="font-size: 80px;"></i>
                      <div class="card-body">
                        <h5 class="card-title">User Choices</h5>
                        <p class="card-text">'Reviewed and Rated' by Real Users</p>
                      </div>  
                    </div>

                </div>
            </div>
         </div>
        </div>
    </section>
    
    <!-- Spacing issue still needs to be fixed-->
    <section class="d-md-flex flex-md-equal my-md-3 ps-md-3">
        <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="Components">Components</h2>
                <p class="Shop-now">Shop Now.</p>
            </div>
            <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            </div>
        </div>
        <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="Components">CPUs</h2>
                <p class="Shop-now">Shop Now.</p>
            </div>
            <!-- Creates a black box-->
            <div class="bg-dark shadow-sm mx-auto" style="width: 20%; height: 300px; border-radius: 21px 21px 0 0;">
            </div>
        </div>
    </section>

    <section class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
        <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="Components">Graphics Cards</h2>
                <p class="Shop-now">Shop Now.</p>
            </div>
            <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            </div>
        </div>
        <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="Cases">Cases</h2>
                <p class="Shop-now">Shop Now.</p>
            </div>
            <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            </div>
        </div>
    </section>

    <section class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
        <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="Components">Storage</h2>
                <p class="Shop-now">Shop Now.</p>
            </div>
            <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            </div>
        </div>
        <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="Components">Memory</h2>
                <p class="Shop-now">Shop Now.</p>
            </div>
            <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            </div>
        </div>
    </section>


    
    <!-- faq -->
    <section id="Faq" class="p-4">
        <div class="container">
            <h2 class="text-center mb-4">Frequently Asked Questions</h2>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <strong> 
                            What is Evotech?
                        </strong>
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h3>Evotech is a collective of engineers, artists, and creators. We built Evotech, an e-commerce platform that recommends and sells optimum solutions for real-world problems.</h3> 
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> <strong>
                      What solutions does Evotech sell?
                    </strong>
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h3>If there's a problem, we have the technology for you. Check our Shop to view the CPU's, Accessories, Monitors and other Components that we sell.</h3> 
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <strong>
                        I have further questions, where can I get in touch?
                    </strong>  
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h3>You can Contact Us, for further questions. </h3> 
                    </div>
                  </div>
                </div>
              </div>
        </div>

    </section>

    <section id="instructors" class="p-5 bg-light">
        <div class="container">
            <h2 class="text-center text-dark">Customer Reviews</h2>
            <p class="lead text-center text-dark mb-5">
                See what our customers have to say about us 

            </p>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                  <div class="card bg-light"> 
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/men/11.jpg"
                         class="rounded-circle mb-3"
                         alt=""/>
                         <p class="card-text">... </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                   <div class="card bg-light"> 
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/men/11.jpg"
                         class="rounded-circle mb-3"
                         alt=""/>
                         <h3 class="card-text">...</h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/men/11.jpg"
                         class="rounded-circle mb-3"
                         alt=""/>
                         <h3 class="card-text">...</h3>
                     </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="p-5 bg-dark text-light text-center position-relative">
        <div class="container">
            <p class="lead">Evotech</p>
        </div>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>




</html>