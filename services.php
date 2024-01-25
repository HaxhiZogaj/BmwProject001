<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="services.css">
</head>
<body>
    <div>
        <?php
          if($Bmw_Cars <12){
            $engine= "Experience the powerful BMW engines designed for optimal performance in the morning light.";
            }
          elseif($Bmw_Cars <18){
            $engine = "exlope the cutting-edge transmissions,engineered with M Powernd Active Turbo, during the afternoon.";
        } else {
            $engine = "Unleash the crazy power of BMW cars with 5.2L engines, reaching 100km/h in 3.1 seconds, as the evening falls.";
        }
        ?>
        <p><?php echo $engine; ?></p>
    </div>
    <div class="container">
        <div class="header">
            <div class="logo">
            </div>
            <div class="nav">
                <ul>
                    <li><a href="Home-page.html">Home</a></li>
                    <li><a href="future.html">Future</a></li>
                    <li><a href="Login.html">Account</a></li>
                </ul>
            </div>
            <div class="buttons">
                <button>Press it</button>
                <button>Test Drive</button>
            </div>
        </div>

        <div class="main_content">
            <div class="content">
                <h1>Bmw Service<br><scan>Competition</scan></h1>
                <p>Maximum driving Dynamics and Fastnes</p>
                

            </div>
            <div class="car_img">

            </div>
        </div>
         <div class="futures">
            <div class="engine">
               <img src="carengine.jpg">
               <p>700HP,553NW High Performance M Power</p>
            </div>
            <div class="transmission">
                <img src="transmision.jpg">
                <p>M Power with Active Turbo </p>
            </div>
            <div class="power">
                <img src="power.jpg">
                <p>Crazy Power with 5.2l engine,100km/h in 3.1sec</p>
            </div>
            <div class="brake">
                <img src="breaks.jpg">
                <p>Power on brakes is so good,made by ceramics </p>

            </div>
         </div>
    </div>
    
</body>
</html>