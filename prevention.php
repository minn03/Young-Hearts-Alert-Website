<?php
    define("TITLE","Prevention | Young Heart Alerts");
    define("explanationOfTitle","Raising awareness about early heart attacks");

    $preventions = array(
        "Do not over-exercise. Regular exercise is recommended to avoid heart disease, and as your tolerance and stamina improve, the intensity of the exercise should be gradually increased.",
        "Monitoring and treating any underlying health conditions, especially diabetes and other conditions that can affect heart health",
        "Reduce mental stress by doing regular yoga and other stress management exercises.",
        "Reducing consumption of sodium and sugar and avoiding trans fats",
        "Sleeping for at least 7-8 hours is necessary for overall well-being.",
        "Smoking and alcohol intake should be avoided completely.",
        "Maintaining or attaining a healthy weight",
        "Becoming more physically active",
        "Eating a healthy, balanced diet",
        "Follow a healthy lifestyle"
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prevention | Young Hearts Alert</title>
    <link rel="stylesheet" href="prevention.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!--- google fonts --->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!--- animation --->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
<header>
        <a href="#" class="logo"><?php echo TITLE;?></a>
        <hr>
        <ul class="navlist">
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="risk_factors.php">Risk Factors</a></li>
            <li><a href="signs_symptoms.php">Signs & Symptoms</a></li>
            <li><a href="prevention.php">Prevention</a></li>
            <li><a href="commonQues.php">Additional Common Questions</a></li>
        </ul>

        <div class="nav-right">
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <section class="content">
        <h1 data-aos="fade-right" data-aos-duration="1400">Prevention of Heart Attacks in Young People</h1>
        <h2 data-aos="fade-right" data-aos-duration="1800">To minimize the risk of heart attack, you should take some precautionary measures: </h2><br>
        <ul data-aos="fade-right" data-aos-duration="2200">
            <li><?php echo $preventions[0]?></li>
            <li><?php echo $preventions[1]?></li>
            <li><?php echo $preventions[2]?></li>
            <li><?php echo $preventions[3]?></li>
            <li><?php echo $preventions[4]?></li>
            <li><?php echo $preventions[5]?></li>
            <li><?php echo $preventions[6]?></li>
            <li><?php echo $preventions[7]?></li>
            <li><?php echo $preventions[8]?></li>
            <li><?php echo $preventions[9]?></li>
        </ul>
    </section>

    <!--- js link --->
    <script src="script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script> 
    <br>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Young Hearts Alert</p>
    </footer>
</body>
</html>

