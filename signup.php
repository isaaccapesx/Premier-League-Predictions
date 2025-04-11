<?php
session_start();
include "db_conn.php"; /* connects to database page */
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, intial-scale=1.0"> <!--adjusts the scale of a website-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com"> <!--refers to a font style website-->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!--refers to a font style website-->
  <link href="https://fonts.googleapis.com/css2?family=Gothic+A1&display=swap" rel="stylesheet"><!--refers to a font style website-->
  <link rel="icon" type="image/x-icon" href="Images/ICON.png"><!--links the images-->
  <link rel="stylesheet" href="Style.css"> <!--refers to the style sheet-->
  <title>PLP | Register your account</title> <!--Title at the top so the user know which page they are on-->
</head>
<body>
  <section class="Teams bg-dark">
    <div class="flex"> <!--when website size has been altered. when its smaller the cards come closer together-->
      <!--Start of all the team buttons. when clicking the icons, it will go to the club website-->
      <div class="TeamCard">
        <a href="https://www.arsenal.com/?utm_source=premier-league-website&utm_campaign=website&utm_medium=link" target="_blank"><img src="Images/Teams/Arsenal.png" alt="Arsenal"></a>
      </div>
      <div class="TeamCard">
        <a href="https://www.avfc.co.uk/?utm_source=premier-league-website&utm_campaign=website&utm_medium=link" target="_blank"><img src="Images/Teams/AstonVilla.png" alt="AstonVilla"></a>
      </div>
      <div class="TeamCard">
        <a href="https://www.afcb.co.uk/?utm_source=premier-league-website&utm_campaign=website&utm_medium=link" target="_blank"><img src="Images/Teams/Bournmouth.png" alt="Bournmouth"></a>
      </div>
      <div class="TeamCard">
        <a href="https://www.brentfordfc.com/en??utm_source=premier-league-website&utm_campaign=website&utm_medium=link" target="_blank"><img src="Images/Teams/Brentford.png" alt="Brentford"></a>
      </div>
      <div class="TeamCard">
        <a href="https://www.brightonandhovealbion.com/?utm_source=premier-league-website&utm_campaign=website&utm_medium=link" target="_blank"><img src="Images/Teams/Brighton.png" alt="Brighton"></a>
      </div>
      <div class="TeamCard">
        <a href="https://www.chelseafc.com/en??utm_source=premier-league-website&utm_campaign=website&utm_medium=link" target="_blank"><img src="Images/Teams/Chelsea.png" alt="Chelsea"></a>
      </div>
      <div class="TeamCard">
        <a href="https://www.cpfc.co.uk/?utm_source=premier-league-website&utm_campaign=website&utm_medium=link" target="_blank"><img src="Images/Teams/CrystalPalace.png" alt="CrystalPalace"></a>
      </div>
      <div class="TeamCard">
        <a href="https://www.evertonfc.com/?utm_source=premier-league-website&utm_campaign=website&utm_medium=link" target="_blank"><img src="Images/Teams/Everton.png" alt="Everton"></a>
      </div>
      <div class="TeamCard">
        <a href="https://www.fulhamfc.com/?utm_source=premier-league-website&utm_campaign=website&utm_medium=link" target="_blank"><img src="Images/Teams/Fullan.png" alt="Fullan"></a>
      </div>
      <div class="TeamCard">
        <a href="https://www.leedsunited.com/?utm_source=premier-league-website&utm_campaign=website&utm_medium=link" target="_blank"><img src="Images/Teams/Leeds.png" alt="Leeds"></a>
      </div>
      <div class="TeamCard">
        <a href="https://www.lcfc.com/?utm_source=premier-league-website&utm_campaign=website&utm_medium=link" target="_blank"><img src="Images/Teams/Leicester.png" alt="Leicester"></a>
      </div>
      <div class="TeamCard">
        <a href="https://www.liverpoolfc.com/?utm_source=premier-league-website&utm_campaign=website&utm_medium=link" target="_blank"><img src="Images/Teams/Liverpool.png" alt="Liverpool"></a>
      </div>
      <div class="TeamCard">
        <a href="https://www.mancity.com/?utm_source=premier-league-website&utm_campaign=website&utm_medium=link" target="_blank"><img src="Images/Teams/ManCity.png" alt="ManCity"></a>
      </div>
      <div class="TeamCard">
        <a href="https://www.manutd.com/?utm_source=premier-league-website&utm_campaign=website&utm_medium=link" target="_blank"><img src="Images/Teams/ManUnited.png" alt="ManUnited"></a>
      </div>
      <div class="TeamCard">
        <a href="https://www.nufc.co.uk/?utm_source=premier-league-website&utm_campaign=website&utm_medium=link" target="_blank"><img src="Images/Teams/Newcastle.png" alt="Newcastle"></a>
      </div>
      <div class="TeamCard">
        <a href="https://www.nottinghamforest.co.uk/?utm_source=premier-league-website&utm_campaign=website&utm_medium=link" target="_blank"><img src="Images/Teams/NottinghamForest.png" alt="NottinghamForest"></a>
      </div>
      <div class="TeamCard">
        <a href="https://www.southamptonfc.com/?utm_source=premier-league-website&utm_campaign=website&utm_medium=link" target="_blank"><img src="Images/Teams/Southampton.png" alt="Southampton"></a>
      </div>
      <div class="TeamCard">
        <a href="https://www.tottenhamhotspur.com/?utm_source=premier-league-website&utm_campaign=website&utm_medium=link" target="_blank"><img src="Images/Teams/Spurs.png" alt="Spurs"></a>
      </div>
      <div class="TeamCard">
        <a href="https://www.whufc.com/?utm_source=premier-league-website&utm_campaign=website&utm_medium=link" target="_blank"><img src="Images/Teams/WestHam.png" alt="WestHam"></a>
      </div>
      <div class="TeamCard">
        <a href="https://www.wolves.co.uk/?utm_source=premier-league-website&utm_campaign=website&utm_medium=link" target="_blank"><img src="Images/Teams/Wolves.png" alt="Wolves"></a>
      </div>
       <!--end of all the team buttons-->
    </div>
  </section>

  <section class="bg-light"> <!--gap between very top banner and the second banner (white line)-->
    <h1 class="gap">.</h1> <!--makes the gap happen-->
  </section>

  <div class="navbar sticky">  <!--class "navbar" is a purple banner at the top. class "sticky" makes the header stay in the same position when scrolling down-->
    <div class="containernav flex"><!--class "containernav" is a box inside the header where all the content is. class "flex" makes the content change size when website is smaller -->
      <img class="logoimg" src="Images/Logos/WhitePremLogo.png" alt="Logo"> <!-- White lion picture-->
      <h1 class="logo1">Premier</h1><!-- text next to logo-->
      <h1 class="logo2">League</h1><!-- text next to logo-->
      <h1 class="logo3">Predictions.</h1><!-- text next to logo-->
      <nav>
        <ul class="smA"> <!--sets the font size class-->
          <li><a href="Index.php">Home</a></li> <!--links to home page and is a button -->
          <li><a href="YourPredictions.php">Your Predictions</a></li><!-- links to your prediction page and is a button this is active because this is the premier league page-->
          <li><a href="PredictionLeague.php">Prediction League</a></li><!-- links to prediction league page and is a button -->
          <li><a href="PremierLeague.php">Premier League</a></li><!-- links to premier league  page and is a button -->
          <li><a href="FAQ.php">FAQ</a></li><!-- links to faq page and is a button -->
        </ul>
      </nav>
    </div>
  </div>

<section class="container flex">
  <div class="RegisterAccount"> <!--everything in this class is moved to the center-->
    <div>
      <h1>Register Your Account</h1> <!--title at the top-->
      <h2>Please enter your details down below</h2> <!--second header-->
    </div>
  <div class="RALine"></div> <!--creates a line underneath "Please Enter your details"-->

  <section>
    <form action ="register.php" method="post"> <!--goes to register script -->
      <label for="fname"></label> <!--first name-->
      <input class="RegInputLeft" type="text" id="fname" name="fname" placeholder="First name"> <!--class "RegInput" is the size of the box that lets users enter their first name-->
      <label for="sname"></label> <!--surname-->
      <input class="RegInputRight" type="text" id="sname" name="sname" placeholder="Surname"> <!--class "RegInput" is the size of the box that lets users enter their surname-->
      <label for ="uname"></label> <!--username-->
      <input class="RegInput01" type ="text" id="uname" name="uname" placeholder="Username"><!--class "RegInput01" is the size of the box that lets users enter their username-->
      <label for ="email"></label> <!--email-->
      <input class="RegInput01" type ="text" id="email" name="email" placeholder="Email address"> <!--class "RegInput01" is the size of the box that lets users enter their email-->
      <label for ="Conemail"></label> <!--confirms email address-->
      <input class="RegInput01" type ="text" id="Conemail" name="Conemail" placeholder="Confirm email address"> <!--class "RegInput01" is the size of the box that lets users enter their email again-->
      <label for="password"></label> <!--password-->
      <input class="RegInput" type="password" id="password" name="password" placeholder="Password"> <!--class "RegInput" is the size of the box that lets users enter their password-->
      <label for="Conpassword"></label> <!--confirms password-->
      <input class="RegInput" type="password" id="Conpassword" name="Conpassword" placeholder="Confirm password"> <!--class "RegInput" is the size of the box that lets users enter their password again-->
    


      <div>
        <p class="blankspace1">Your password must have atleast 10 characters and include:</p> <!--class "blankspace1" moves the text -->
        <p class="blankspace">- A Capital letter (Q)</p> <!--class "blankspace" moves the next more to the right then class "blankspace"-->
        <p class="blankspace">- A Number (6) </p> <!--class "blankspace" moves the next more to the right then class "blankspace"-->
        <p class="blankspace">- A Special Character (!)</p> <!--class "blankspace" moves the next more to the right then class "blankspace"-->
      </div>

      <div>
        <button class="button Cancel"><a href="signup.php">Cancel</button></a> <!--class "button" is the size of the button. class "Cancel" makes the button red. When pressed redirects the user back to the register page and removes all the details they have entered.-->
        <button class ="button Enter">Enter</button><!--class "button" is the size of the button. class "enter" makes the button green. -->
      </div>
    </div>
  </form>
</section>

<div class="footer bg-dark"><!--class "footer" is a big footer rectangle. class "bg-dark" is a colour scheme-->
  <div class="containernav grid grid-3"><!--class "containernav" is a box inside the footer where all the content is. class "grid" is a grid in the footer for each individual section. class "grid-3" is space for each individual section-->
    <div>
      <h1 class="logotxt">Premier League Predictions. </h1><!--text style in the bottom left of the footer-->
      <p>Copyright &copy; 2022</p><!--copyright info and logo-->
    </div>

    <div class="social"> <!--social media buttons-->
      <a href="https://twitter.com/home"><i class="fab fa-twitter fa-2x"></i></a> <!--twitter icon that when pressed links to twitter (would change link to profile if i make account)-->
      <a href="https://www.instagram.com/"><i class="fab fa-instagram fa-2x"></i></a> <!--instagram icon that when pressed links to twitter (would change link to profile if i make account)-->
      <a href="https://en-gb.facebook.com/"><i class="fab fa-facebook fa-2x"></i></a> <!--facebook icon that when pressed links to twitter (would change link to profile if i make account)-->
    </div>
    <nav> <!--section for links/buttons-->
      <ul class="footernav smA">  <!--class "footernav" that sets it to the right. class "smA" is a font size-->
        <li><a href="Index.php">Home</a></li>    <!--footer home button -->
        <li><a href="YourPredictions.php">Your Predictions</a></li>  <!--footer your prediction buttons-->
        <li><a href="PredictionLeague.php">Prediction League</a></li> <!--footer prediction league button-->
        <li><a href="PremierLeague.php">Premier League</a></li> <!--footer premier league button-->
        <li><a href="FAQ.php">FAQ</a></li> <!--footer faq button-->
      </ul>
    </nav>
  </div>
</div>
</body>
</html>