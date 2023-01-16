<!DOCTYPE html>
<html lang="en">
<head>
  <title>ToKa Fitness</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- linking css file -->
  <link rel="stylesheet" href="style.css">
  <!-- bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/31149d48b0.js" crossorigin="anonymous"></script>
</head>
<nav class="navbar navbar-expand-lg fixed-top navbarScroll">
  <div class="container">
      <a class="navbar-brand" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="#home">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="Index2.php">Advice</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact</a>
              </li>
          </ul>
          
      </div>
  </div>
</nav>
 <!-- main banner -->
 <section class="bgimage" id="home">
  <div class="container-fluid">
      <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hero-text">
          <h2 class="hero_title">Welcome to ToKa Fitness</h2>
          <p class="hero_desc">Fitness Workouts Diets Advice</p>
      </div>
      </div>
  </div>
</section>
<!-- about section-->
<section id="about">
  <div class="container mt-4 pt-4">
      <h1 class="text-center">About Us</h1>
      <div class="row mt-4">
          <div class="col-lg-4">
              <img src="images\about.png" class= "imageAboutPage" alt="">
          </div>

          <div class="col-lg-8">
              <p> Here at ToKa Fitness we believe that healthy living is a must for everyone. Our mission is to provide training sessions and advice to our users.
                  
              </p>
              <div class="row mt-3">
                  <div class="col-md-6">
                      <ul>
                          <li>Personal training sessions</li>
                          <li>Advice about fitness training</li>
                          <li>Advice about healthy living </li>

                      </ul>
                  </div>
                  <div class="col-md-6">
                      <ul>
                          <li>Information and advice about fitness training and healthy living </li>
                          <li>Support with your training and lifestyle</li>
                          <li>Customisable workout and eating plans</li>

                      </ul>
                  </div>
              </div>
              <div class="row mt-3">
                  <p> Note: Some features are paid-content only.
                  </p>
              </div>
          </div>
      </div>
</section>
<!-- services section-->
<section id="services">
  <div class="container">
      <h1 class="text-center">Services</h1>
      <div class="row">
          <div class="col-lg-4 mt-4">
              <div class="card servicesText">
                  <div class="card-body">
                      <i class="fas servicesIcon fa-clock"></i>
                      <h4 class="card-title mt-3">Advice</h4>
                      <p class="card-text mt-3"> Fitness, living and training advice
                      </p>
                  </div>
              </div>  
          </div>
          <div class="col-lg-4 mt-4">
              <div class="card servicesText">
                  <div class="card-body">
                      <i class='fas servicesIcon fa-layer-group'></i>
                      <h4 class="card-title mt-3">Personal training sessions</h4>
                      <p class="card-text mt-3"> Have some ready made training sessions :) 
                      </p>
                  </div>
              </div>  
          </div>

          <div class="col-lg-4 mt-4">
              <div class="card servicesText">
                  <div class="card-body">
                      <i class='far servicesIcon fa-check-circle'></i>
                      <h4 class="card-title mt-3">Customisable workout and eating plans</h4>
                      <p class="card-text mt-3"> Customise your own personal workout and eating plans 
                      </p>
                  </div>
              </div>  
          </div>
      </div>

<!-- portfolio section-->
<section id="Advice">
  <div class="container mt-3">
      <h1 class="text-center">Advice</h1>
      <div class="row">
          <div class="col-lg-4 mt-4">
              <div class="card">
                  <img class="card-img-top" src="images/portfolioImage1.jpg" alt="Card image" style="width:100%">
                  <div class="card-body">
                      <h4 class="card-title">Ready workouts</h4>
                      <p class="card-text">Links to workouts</p>
                      <div class="text-center">
                          <a href="https://www.youtube.com/watch?v=HtwkEdFf-kw&list=PL2NpXBzdtNaknMk_m4_a6Qj7P75ixno1Q" class="btn btn-success">Link</a>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-lg-4 mt-4">
              <div class="card portfolioContent">
                  <img class="card-img-top" src="images/portfolioImage4.jpg" alt="Card image" style="width:100%">
                  <div class="card-body">
                      <h4 class="card-title">Fitness and healthy living advice</h4>
                      <p class="card-text">All the knowledge you need</p>
                      <div class="text-center">
                          <a href="Index2.php" class="btn btn-success">Link</a>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-lg-4 mt-4">
              <div class="card portfolioContent">
                  <img class="card-img-top" src="images/portfolioImage3.jpg" alt="Card image" style="width:100%">
                  <div class="card-body">
                      <h4 class="card-title">Calculators</h4>
                      <p class="card-text">Calculate your BMI, Daily calorie need etc.  </p>
                      <div class="text-center">
                          <a href="#" class="btn btn-success">Link</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <br>
<!-- contact section-->
<section id="contact">
  <div class="container mt-3 contactContent">
      <h1 class="text-center">Contact Us</h1>

      <div class="row mt-4">
          <div class="col-lg-6">
              <!-- to edit google map goto https://www.embed-map.com type your location, generate html code and copy the html  -->
              <div style="max-width:100%;overflow:hidden;color:red;width:500px;height:500px;">
                  <div id="embedmap-canvas" style="height:100%; width:100%;max-width:100%;">
                      <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Manchester+UK&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8">
                      </iframe>
                  </div>
                  <a class="googlemaps-html" href="https://www.embed-map.com" id="get-data-forembedmap">https://www.embed-map.com</a>
                  <style>#embedmap-canvas img{max-width:none!important;background:none!important;font-size: inherit;font-weight:inherit;}
                  </style>
              </div>
          </div>

          <div class="col-lg-6">
              <!-- form fields -->
              <form>
                  <input type="text" class="form-control form-control-lg" placeholder="Name">
                  <input type="email" class="form-control mt-3" placeholder="Email">
                  <input type="text" class="form-control mt-3" placeholder="Subject">
                  <div class="mb-3 mt-3">
                      <textarea class="form-control" rows="5" id="comment" name="text" placeholder="Comments"></textarea>
                  </div>
              </form>
              <button type="button" class="btn btn-success mt-3">Contact Me</button>
              
          </div>

      </div>
  </div>
</section>
 <!-- footer section-->
 <footer id="footer">
  <div class="container-fluid">
      <!-- social media icons -->
      <div class="social-icons mt-4">
          <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
          <a href="https://github.com/ElaNetRemastered" target="_blank"><i class="fab fa-github"></i></a>
      </div>
  </div>
</footer>
<body>
    <!-- load javascript after loading all html content -->
    <script src="script/script.js"></script>
</body>
</html>