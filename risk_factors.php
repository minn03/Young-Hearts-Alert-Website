<?php
    Define("TITLE","Risk Factors | Young Hearts Alert");
    define("explanationOfTitle", "Raising awareness about early heart attacks");

    //Array
    $healthConditions = array(
                            array(
                                "name" => "High blood pressure.",
                                "explanation" => "It is a medical condition that happens when the blood pressure in your arteries and other blood vessels is too high. If the high blood pressure is not under controlled, it can have an adverse effect on your heart as well as other vital organs like brain and kidneys. Since high blood pressure usually has no symptoms, it is often referred to as the 'silent killer' Measuring your blood pressure is the only way to determine if you have high blood pressure. In order to reduce your risk of heart disease and heart attack, you can lower your blood pressure using medication or lifestyle modifications."
                            ),
                            array(
                                "name" => "Unhealthy blood cholesterol levels.",
                                "explanation" => "Cholesterol is a waxy, fat-like substance produced by the liver or present in some foods. Although your body produces enough cholesterol from your liver, most of the cholesterol we get comes from the foods we eat. If we consume more cholesterol than our bodies can utilize, extra cholesterol will accumulate in the walls of arteries, including those of the heart. This leads to narrowing of the arteries which may decrease the blood flow to the kidneys, heart, brain and other organs."
                            ),
                            array(
                                "name" => "Diabetes mellitus.",
                                "explanation" => "For gaining energy, your body needs glucose (sugar). The pancreas produces the hormone insulin, which aids in transferring glucose from food to your body's cells for energy. If you have diabetes, your body produce insufficient insulin, can't use its own insulin as well as it should, or both. Elevations of blood sugar are the result of diabetes. Adults with diabetes have a higher chance of dying from heart disease than adults without the disease."
                            ),
                            array(
                                "name" => "Obesity.",
                                "explanation" => "Overweight is considered obesity. Obesity is associated with lower levels of 'good' cholesterol and higher levels of 'bad' cholesterol. Diabetes, elevated blood pressure and heart disease all can caused by obesity."
                            )
                        );

    $behaviours = array(
                        array(
                            "name" =>"Consuming a diet high in saturated fats, trans fat, and cholesterol. ",
                            "explanation" => "Consuming a diet high in saturated fats, trans fat, and cholesterol</b> has been connected to atherosclerosis and other disorders including heart disease. Moreover, eating a diet high in salt(sodium) might also cause blood pressure to rise."
                        ),
                        array(
                            "name" =>"A sedentary lifestyle ",
                            "explanation" =>"can lead to heart disease. It may also increase the possibility of having diabetes, high blood pressure, high cholesterol, obesity and other illness that are risk factors. To reduce your risk of heart disease, you are encouraged to engage more in regular exercise."
                        ),
                        array(
                            "name" =>"Excessive alcohol use ",
                            "explanation" => "can increase blood pressure and heart disease risk. Additionally, it raises blood levels of triglycerides, a fatty molecule that raises the risk of heart disease.
                            <ul>
                                <li>A woman should only take one drink each day.</li>
                                <li>A man shouldn't have more than two drinks every day.</li>
                            </ul>"                          
                        ),
                        array(
                            "name" =>"Tobacco use ",
                            "explanation" => " raises the risk of heart disease and heart attack:
                            <ul>
                                <li>Smoking cigarettes damages blood vessels and the heart, increasing the risk of heart attcks and heart disorders like atherosclerosis.</li>
                                <li>Blood pressure is raised by nicotine.</li>
                                <li>Carbon monoxide from cigarette smoke decrease the amount of oxygen that your blood can carry.</li>
                                <li>Even for those who do not smoke, being around secondhand smoke can raise one's risk of getting heart disease.</li>
                            </ul>"
                        )
                    );
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risk Factors | Young Hearts Alert</title>
    <link rel="stylesheet" href="risk_factors.css">

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
            <h1 data-aos="fade-right" data-aos-duration="1400">Risk Factors in Young People</h1>
        </div>
        <div class="conditions">
            <h2 data-aos="fade-right" data-aos-duration="1800">What health conditions increase the risk of heart disease?</h2><br>
            <ul data-aos="fade-right" data-aos-duration="2200">
                <li><strong><?php echo $healthConditions[0]["name"];?> </strong><?php echo $healthConditions[0]["explanation"];?></li><br>
                <li><strong><?php echo $healthConditions[1]["name"];?> </strong><?php echo $healthConditions[1]["explanation"];?></li><br>
                <li><strong><?php echo $healthConditions[2]["name"];?> </strong><?php echo $healthConditions[2]["explanation"];?></li><br>
                <li><strong><?php echo $healthConditions[3]["name"];?> </strong><?php echo $healthConditions[3]["explanation"];?></li>
            </ul>
        </div>
        <br>
        <div class="behaviors">
            <h2 data-aos="fade-right" data-aos-duration="1800">What behaviors increase the risk of heart disease?</h2><br>
            <ul data-aos="fade-right" data-aos-duration="2200">
                <li><strong><?php echo $behaviours[0]["name"];?></strong> <?php echo $behaviours[0]["explanation"];?></li><br>
                <li><strong><?php echo $behaviours[1]["name"];?></strong> <?php echo $behaviours[1]["explanation"];?></li><br>
                <li><strong><?php echo $behaviours[2]["name"];?></strong> <?php echo $behaviours[2]["explanation"];?></li><br>
                <li><strong><?php echo $behaviours[3]["name"];?></strong> <?php echo $behaviours[3]["explanation"];?></li>
            </ul>
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
