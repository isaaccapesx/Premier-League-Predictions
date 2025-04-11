<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, intial-scale=1.0"> <!--adjusts the scale of a website-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com"> <!--refers to the style website-->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!--refers to the style website -->
  <link href="https://fonts.googleapis.com/css2?family=Gothic+A1&display=swap" rel="stylesheet"> <!--refers to the style website -->
  <link rel="icon" type="image/x-icon" href="Images/ICON.png"> <!--links the images-->
  <link rel="stylesheet" href="Style.css"> <!--refers to the style sheet-->
  <title>PLP | FAQ</title> <!--Title at the top so the user know which page they are on-->
</head>
<body>
  <div class="navbar sticky"> <!--class "navbar" is a purple banner at the top. class "sticky" makes the header stay in the same position when scrolling down-->
    <div class="containernav flex"> <!--class "containernav" is a box inside the header where all the content is. class "flex" makes the content change size when website is smaller -->
      <img class="logoimg" src="Images/Logos/WhitePremLogo.png" alt="Logo">  <!-- White lion picture-->
      <h1 class="logo1">Premier</h1> <!-- text next to logo-->
      <h1 class="logo2">League</h1> <!-- text next to logo-->
      <h1 class="logo3">Predictions.</h1> <!-- text next to logo-->
      <nav>
        <ul class="smA"> <!--sets the font size for each button-->
          <li><a href="Index2.php">Home</a></li> <!--links to home page and is a button-->
          <li><a href="YourPredictions2.php">Your Predictions</a></li> <!-- links to your predictions page and is a button-->
          <li><a href="PredictionLeague2.php">Prediction League</a></li> <!-- links to prediction league page and is a button-->
          <li><a href="PremierLeague2.php">Premier League</a></li> <!--links to premier league page and is a button-->
          <li><a href="FAQ2.php"><?php echo$_SESSION['username'];?></a></li><!--links to FAQ page and is a button. this is active because this is the FAQ page.-->
        </ul>
      </nav>
    </div>
  </div>

  <div class="flex"><!--div "flex" centres the content-->
    <div class="MABox"> <!--managing my account entire box-->
      <h1>Managing my account</h1> <!--Big header at the top of the box-->
      <ul>
        <div class="MABoxOne"> <!--all this content is in one box -->
            <li><h2>How do I change my email?</h2></li>
            <li><p>Need to change your email? Here's a few ways to change your email.</p></li> <!--"here" will be highlighted and links to change email page where an email verification will occur when a new email has been entered (need to be logged in first)-->
        </div>
          <div class="MABoxTwo"> <!--all this content is in one box-->
            <li><h2>How do I Reset my Password?</h2></li>
            <li><p>Forgot your password or need to change it? Here is the best way to reset your password.</p></li> <!-- "here" will be highlighted and will link to a signup page and a reset button will be here --> 
          </div>
          <div class="MABoxThree"> <!--all this content is in one box-->
            <li><h2>How do I sign up?</h2></li>
            <li><p>In order to play Premier League Predictions you need an account. To create an account, press here.</p></li> <!--"here" will be highlighted and will link to a signup page-->
          </div>
      </ul>
    </div>
  </div>
  <div class="flex"><!--div "flex" centres the content-->
    <div class="USEBox"> <!--how to use premier league prediction entire box-->
      <h1>How do I use Premier League Predictions?</h1> <!--big header at top of the box-->
      <ul>
        <div class="USEBoxOne"> <!--all this content is in one box-->
          <li><h2>How do I predict?</h2></li>
          <li><p>Enter your predictions here.</p></li> <!--"here" will be highlighted and links to change email page where an email verification will occur when a new email has been entered (need to be logged in first)-->
        </div>
          <div class="USEBoxTwo"> <!--all this content is in one box-->
            <li><h2>When can I change my predictions?</h2></li>
            <li><p>You have until 1 hour before the game kicks off. After this hour you will be unable to place your prediction. You have unlimited changes to your predictions.</p></li>
          </div>
          <div class="USEBoxThree"> <!--all this content is in one box-->
            <li><h2>Can I have multiple predictions?</h2></li>
            <li><p>No. You can join multiple leagues but your prediction is the same in each league.</p></li>
          </div>
        </ul>
      </div>
  </div>
    <div class="flex"><!--div "flex" centres the content-->
    <div class="PBox"> <!--how do my points work entire box-->
      <h1>How do my points work?</h1> <!--big header at the top of the box-->
      <ul>
        <div class="PBoxOne"> <!--all this content is in one box-->
          <li><h2>How do I get points?</h2></li>
          <li><p>Each goal prediction guess correctly you gain 10 points. For consecutive predictions you gain a multiplier. For example if you predict Fulham 2-0 Bournemouth and the score is Fulham 2-1 Bournemouth you will gain 10 points. If the score is Fulham 2-0 Bournemouth, you will get 10 points x 1.2 and so on. The multiplier will end until you guess a score incorrectly.</p></li> <!---"here" will be highlighted and will link to a page where you can change the password-->
        </div>
        <div class="PBoxTwo"> <!--all this content is in one box-->
          <li><h2>How does my wildcard work?</h2></li>
          <li><p>Once a gameweek you can choose a prediction that you are certain of, and it will double your points if guessed correctly. If you don't use it, you will lose it, so use it!</p></li>
        </div>
        <div class="PBoxThree"> <!--all this content is in one box-->
          <li><h2>When do I recieve my points?</h2></li>
          <li><p>You will recieve your points 2 hours after the last match has been played on that day.</p></li>
        </div>
      </ul>
      </div>
    </div>
    <div class="flex"> <!--div "flex" centres the content-->

    <div class="LBox"><!--league entire box-->
      <h1>Leagues</h1> <!--big header at the top of the box-->
      <ul>
        <div class="LBoxOne"> <!--all this content is in one box-->
          <li><h2>Why can't I join my friend's league?</h2></li>
          <li><p>Make sure you are entering the league code correctly. The code is case sensitive. If you are entering the code correctly you may have been banned from the league.</p></li>
        </div>
        <div class="LBoxTwo"> <!--all this content is in one box-->
          <li><h2>Why have I been removed from my friend's league?</h2></li>
          <li><p>You may have been removed from the league for several reasons. You may want to ask the league leader why you have been removed.</p></li>
        </div>
        <div class="LBoxThree"> <!--all this content is in one box-->
          <li><h2>How do I see my friend's predictions?</h2></li>
          <li><p>You can see your friends predictions on the predictions tab. When pressing the match, underneath the match it will show other peoples prediction. </p></li>
        </div>
      </ul>
    </div>
  </div>
</body>

<body>
  <div class="footer bg-dark">  <!--class "footer" is a big footer rectangle. class "bg-dark" is a colour scheme-->
    <div class="containernav grid grid-3"> <!--class "containernav" is a box inside the footer where all the content is. class "grid" is a grid in the footer for each individual section. class "grid-3" is space for each individual section-->
      <div>
        <h1 class="logotxt">Premier League Predictions.</h1> <!--text style in the bottom left of the footer-->
        <p>Copyright &copy; 2022</p> <!--copyright info and logo-->
      </div>

      <div class="social"> <!--social media buttons-->
        <a href="https://twitter.com/home"><i class="fab fa-twitter fa-2x"></i></a> <!--twitter icon that when pressed links to twitter (would change link to profile if i make account)-->
        <a href="https://www.instagram.com/"><i class="fab fa-instagram fa-2x"></i></a> <!--instagram icon that when pressed links to twitter (would change link to profile if i make account)-->
        <a href="https://en-gb.facebook.com/"><i class="fab fa-facebook fa-2x"></i></a> <!--facebook icon that when pressed links to twitter (would change link to profile if i make account)-->
      </div>
      <nav> <!--section for links/buttons-->
        <ul class="footernav smA"> <!--class "footernav" that sets it to the right. class "smA" is a font size-->
          <li><a href="Index2.php">Home</a></li> <!--links to home page and is a button-->
          <li><a href="YourPredictions2.php">Your Predictions</a></li> <!--links to your prediction page and is a button-->
          <li><a href="PredictionLeague2.php">Prediction League</a></li> <!--links to prediction league page and is a button-->
          <li><a href="PremierLeague2.php">Premier League</a></li> <!--links to premier league page and is a button-->
          <li><a class="active" href="FAQ2.php">FAQ</a></li> <!--links to FAQ page and is a button. this is active because this is the FAQ page.-->
        </ul>
      </nav>
    </div>



</body>
</html>

