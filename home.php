<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Young Hearts Alert</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!--- google fonts --->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
    
<!--- animation --->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <header>
        <a href="#" class="logo">Young Hearts Alert</a>
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
            <h1 data-aos="fade-right" data-aos-duration="1400">Welcome to <br>"Young Hearts Alert"</h1>
            <h2 data-aos="zoom-in-left" data-aos-duration="1400", data-aos-delay="200">A heart attack is a blessing in disguise, a chance to start over, to make changes, and to live a better life. – Jill Essary</h2>
            <p data-aos="fade-right" data-aos-duration="1400">This website, "Young Hearts Alert" is dedicated to create awareness among young adults on heart attack. Our goal is to shed light on the risk factors, potential warning signs, and preventive measures that can be taken to combat this rising trend. We aim to provide young adults with the knowledge and tools necessary to safeguard their heart health against the rising tide of cardiovascular diseases.
            <br><br>Explore our resources to understand better how you can stay ahead of this disease, ensuring a healthier future. Together, let’s tackle this challenge head-on, armed with awareness and action!</p>
        </div>

        
        <div class="image" data-aos="zoom-in" data-aos-duration="1400">
            <img src="heart attack.png">
        </div>
    </section>

    <!--- js link --->
    <script src="script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script> 

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Young Hearts Alert</p>
    </footer>
</body>
</html>

