<?php
    //Constants
    define("TITLE", "Signs & Symptoms | Young Hearts Alert");
    define("explanationOfTitle", "Raising awareness about early heart attacks");

    //heartAttackSymptoms Variables
    $heartAttackSymptoms = array("Chest pain or discomfort", "Feeling weak, light-headed, or faint", "Pain or discomfort in the jaw, neck, or back", "Nausea or vomiting, especially with other symptoms", "Shortness of breath");

    //heartArrestSymptoms Variables
    $heartArrestSymptoms = array("Chest pain", "Suddenly collapsing", "Shortness of breath", "Having a very weak pulse or even not having a pulse");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE;?></title>
    <link rel="stylesheet" href="symptoms.css">
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
        <div class="main-content">
            <h1 data-aos="fade-right" data-aos-duration="1400">Signs & Symptoms of Heart Attacks in Young Adults</h1>
            <img src="warning signs.jpg" data-aos="zoom-in" data-aos-duration="1400">
            <p data-aos="fade-right" data-aos-duration="1400">The most typical symptom of a heart attack is chest pain, which usually lasts for few minutes or goes away and then comes back. Some people may describe it as pressure or squeezing sensation. </p>
        </div>
    </section>

    <section class="content2">
        <div class="symptoms">
            <h2 data-aos="fade-right" data-aos-duration="1800">Some other symptoms in young people may include:</h2></p>
            <ul data-aos="fade-right" data-aos-duration="1800">
                <li><?php echo $heartAttackSymptoms[0];?></li>
                <li><?php echo $heartAttackSymptoms[1];?></li>
                <li><?php echo $heartAttackSymptoms[2];?></li>
                <li><?php echo $heartAttackSymptoms[3];?></li>
                <li><?php echo $heartAttackSymptoms[4];?></li>
            </ul>
        </div>
    </section>

    <section class="content3">
        <div class="main-content-2">
            <h1 data-aos="fade-right" data-aos-duration="1800">Sudden Cardiac Arrest in Young Adults</h1>
            <br><h2 data-aos="fade-right" data-aos-duration="1800">What is sudden cardiac arrest?</h2>
            <p data-aos="fade-right" data-aos-duration="1800">If the heart stops beating quickly or if its rhythm becomes so irregular that it is unable to adequately pump blood throughout the body, this is known as <b>sudden cardiac arrest.</b><br>
            <br>Sudden cardiac arrest is rare but more common in young individuals who have congenital heart defects or underlying heart disease.
            <br><br>Similar to heart attack symptoms, cardiac arrest might include: </p>
            <div class="sca" data-aos="fade-right" data-aos-duration="1400">
                <ul data-aos="fade-right" data-aos-duration="1800">
                    <li><?php echo $heartArrestSymptoms[0]?></li>
                    <li><?php echo $heartArrestSymptoms[1]?></li>
                    <li><?php echo $heartArrestSymptoms[2]?></li>
                    <li><?php echo $heartArrestSymptoms[3]?></li>
                </ul>
                <p><b>Cardiac arrest is inevitably fatal without immediate medical intervention.</b></p>
            </div>
        </div>
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
