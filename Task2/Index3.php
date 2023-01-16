<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ToKa Fitness</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
                    <a class="nav-link" href="Index4.php">BMR</a>
                </div>
                </div>
            </div>
        </nav>
    </header>
    <style>
    body {
        background-image: url('images/Index3BG.jpg');

        /* Full height */
        height: 1000%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>

  <div class="container mt-3">
    <form method="POST">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="weight" style="color:white">Weight in kg.</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="weight" name="weight" placeholder="Enter your weight in kilograms.">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="height" style="color:white" >Height in cm.</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="height" name="height" placeholder="Enter your height in centimeters.">
        </div>
      </div>
      <div class="form-group mt-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10 align-right">
          <button type="submit" class="btn btn-primary btn-block" name="calculate">Calculate</button>
        </div>
      </div>
    </form>
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-10 align-right">
      
      <?php

      

        function calculateBMI($weight, $height){
          $bmi = ($weight / $height / $height) * 10000;
          $bmiRounded = round($bmi, 1);
          
            if($bmiRounded <= 18.4){
              echo $BMIcolor = "#FF0000";
            }
            if($bmiRounded >= 18.5 && $bmiRounded <= 24.9){
              echo $BMIcolor = "#39C117";
            }
            if($bmiRounded >= 25 && $bmiRounded <= 29.9){
              echo $BMIcolor = "#DFAE23";
            }
            if($bmiRounded >= 30 && $bmiRounded <= 39.9){
              echo $BMIcolor = "#F68A33";
            }
            else {
              echo $BMIcolor = "#FF0000";
            }

          echo "<h2 style='color:" . $BMIcolor . "'>Your BMI is ${bmiRounded}</h2>";
        }


        if(isset($_POST['calculate'])){
          if (!isset($_POST['weight'])) {
            return 'Please enter your weight';
            exit();
          }
          if (!isset($_POST['height'])) {
            return 'Please enter your height';
            exit();
          }
          $weight = filter_var(htmlentities(floatval($_POST['weight'])),FILTER_SANITIZE_NUMBER_FLOAT);

          $height = filter_var(htmlentities(floatval($_POST['height'])),FILTER_SANITIZE_NUMBER_FLOAT);

          calculateBMI($weight, $height);
        }
    ?>
    </div>
    </div>
  </div>
</body>
</html>