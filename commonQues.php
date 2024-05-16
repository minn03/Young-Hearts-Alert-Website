<?php
    Define("TITLE","Additional Common Questions | Young Hearts Alert");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risk Factors | Young Hearts Alert</title>
    <link rel="stylesheet" href="commonQues.css">

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
        <div class="main-content">
            <h1 data-aos="fade-right" data-aos-duration="1400">Why should I call 999 even if I am able to drive myself to the hospital? <br>(or have someone drive me)?</h1>
            <br><h2 data-aos="fade-right" data-aos-duration="1800">It is advisable to dial 999 if you experience any heart attack symptoms for several reasons:</h2>
            <ul data-aos="fade-right" data-aos-duration="2200">
                <li>While heading to the hospital, first responders can perform some of the initial diagnostic work and treatment for a heart attack. This may expedite the overall process of diagnosis and treatment process.</li>
                <li>You often have immediate access to care if you arrive at the hospital by ambulance. When you're having a heart attack, every second matters.</li>
                <li>Heart attacks can cause your heart to beat irregularly or stop entirely, either of which increase your risk of passing out. When that occurs, first responders can act quickly to stabilize you if you're in an ambulance. Additionally, you won't have to worry about passing out behind the wheel and endangering other people or yourself in the process.</li>
            </ul>
        </div>
        <br>
        <div class="notes">
            <h2 data-aos="fade-up" data-aos-duration="2600">A note from Cleveland Clinic</h2>
            <p data-aos="fade-up" data-aos-duration="3000">In order to avoid irreversible cardiac damage, a blocked artery requires emergency care. If your symptoms aren't severe and intense, you might believe that you're not having a heart attack. However, some symptoms may be minor, it's advisable to have a provider check them. Calling 999, rather than driving yourself or having someone else drive you, can save more lives than you think. Time saved equates to a heart muscle saved, which increases your chances of a better outcome.</p>
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
