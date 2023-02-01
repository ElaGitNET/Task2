<html>
    <body>
        <center>
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
                        <a class="nav-link" href="#">Services</a>
                        <a class="nav-link" href="#">Advice</a>
                        <a class="nav-link" href="#">Contact</a>
                    </div>
                    </div>
                </div>
            </nav>
        </header>
        <style>
        body {
            background-image: url('images/heroImage.jpg');
            background-size:cover;
            position:relative;
        }
        </style>
                <br>
                <br>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                Gender:
                <Select name="gender" ><br>
                    <option>Male</option>
                    <option>Female</option>
                    </select><br><br>
                Age:
                    <input name="age" type="text"> yrs.<br><br>
                Weight:
                    <input name="weight" type="text">kgs.<br><br>
                Height:
                    <input name="height" type="text">cm.<br><br>
                    <br><input type="Submit" value="Calculate">

                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $age=$_POST['age'];
                            $weight=$_POST['weight'];
                            $height = $_POST['height'];
                            $calories="0.0215183";
                            $gender=$_POST['gender'];

                                switch($gender){
                                    case 'Female':
                                        $gender= 665 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age);
                                        echo "<p>Your estimated daily metabolic rate is $gender </p>";
                                        echo "<p>This means that you need rouhgly $gender calories a day to maintain your current weight.</p>";

                                        break;
                                        case 'Male':
                                            $gender=66 + (13.7 *$weight) + (5 * $height) - (6.8 * $age);
                                            echo "<p>Your estimated daily metabolic rate is $gender </p>";
                                            echo "<p>This means that you need rouhgly $gender calories a day to maintain your current weight.</p>";
                                }
                            }
            ?>
                </form>
            </center>
        </body>
</html>

