<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ToKa Fitness</title>
        <!-- CSS only -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="Index.php">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="about.php">About</a>
                    <a class="nav-link" href="TLevelShop/index2.html">Services</a>
                    <a class="nav-link" href="login-form.html">Advice</a>
                    <a class="nav-link" href="register-form.html">Contact</a>
                </div>
                </div>
            </div>
        </nav>
    </header>
    <style>
    body {
        background-image: url('images/Index2BG.jpg');
        background-size:cover;
        position:relative;
    }
    </style>

    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Fitness advice </h5>
                            <p class="card-text">Strive for at least 150 minutes of exercise per week</p>
                            <p class="card-text">Cut your coffee calories</p>
                            <p class="card-text">Keep a fitness journal</p>
                            <p class="card-text">Pay attention to your thoughts</p>
                            <p class="card-text">Eat the rainbow</p>
                            <p class="card-text">Avoid processed foods</p>
                            <p class="card-text">Make sure you drink water</p>
                            <p class="card-text">Increase Your Protein.</p>
                            <h5 class="card-title"> Healthy living</h5>
                            <p class="card-text">Measure and Watch Your Weight</p>
                            <p class="card-text">Limit Unhealthy Foods and Eat Healthy Meals</p>
                            <p class="card-text">Take Multivitamin Supplements</p>
                            <p class="card-text">Drink Water and Stay Hydrated, and Limit Sugared Beverages</p>
                            <p class="card-text">Exercise Regularly and Be Physically Active</p>
                            <p class="card-text">Reduce Sitting and Screen Time</p>
                            <p class="card-text">Get Enough Good Sleep</p>
                            <p class="card-text">Go Easy on Alcohol and Stay Sober.</p>
                            <h5 class="card-title"> Training Advice</h5>
                            <p class="card-text">Warm up and cool down for five to 10 minutes</p>
                            <p class="card-text">Focus on form, not weight</p>
                            <p class="card-text">Working at the right tempo helps you stay in control rather than compromise strength gains through momentum.</p>
                            <p class="card-text">Pay attention to your breathing during your workouts</p>
                            <p class="card-text">Keep challening yourself by slowly increasing weight or resistence</p>
                            <p class="card-text">Stick with your routine</p>
                            <p class="card-text">Give muscles time off</p>
        </div>
        </section>
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
<body>
    <a href="Index.php" class="btn btn-primary">Go back to home</a>
</body>
</html>