<?php
    define("TITLE","About | Young Hearts Alert");
    define("explanationOfTitle","Raising awareness about early heart attacks");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Young Hearts Alert</title>
    <link rel="stylesheet" href="about.css">
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

        </div>
    </header>
    
    <section class="content">
        <h1 data-aos="fade-right" data-aos-duration="1400">Myths & Truth About Heart Attack</h1><br>
        <div class="flip_box" data-aos="zoom-in" data-aos-duration="1400">
            <div class="inner">
                <div class="front">
                    <h2><i class="fa fa-heartbeat"></i> Myth: <br>Heart Attacks Only Happen to Older People</h2>
                </div>
                <div class="back">
                    <h2><i class="fa fa-heartbeat"></i> Fact: <br>While the risk of heart attacks increases with age, they can occur in people of all ages, including younger adults. Lifestyle factors, genetics, and underlying health conditions can contribute to the risk of a heart attack.</h2>
                </div>
            </div>
        </div>
        <div class="introduction">
            <div class="image">
                <img src="heart.png" data-aos="fade-right" data-aos-duration="2200">
                <h1 data-aos="fade-right" data-aos-duration="2200">What is a <a href="https://www.columbiaasia.com/malaysia/health-articles/what-is-a-heart-attack/">Heart Attack</a>?</h1>
                <p data-aos="fade-right" data-aos-duration="2600">A heart attack is an extremely dangerous condition results from insufficient blood flow to certain parts of the heart muscle. Although there are numerous possible causes for this reduction in blood flow, a blockage in one or more of your heart's arteries is typically the reason. The affected cardiac muscle will start to die without blood supply. If your blood flow returns slowly, a heart attack can lead you die or suffer irreversible cardiac damage. A heart attack is a life-threatening emergency. If you think you or some you're with is having a heart attack, dial 999 or the number for your local emergency services. Time is critical in treating a heart attack. Even a few minutes' delay can cause death or permanent heart damage.</p>
            </div>
        </div>
    </section>
    <br>
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
