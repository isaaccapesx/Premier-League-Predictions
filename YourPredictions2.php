<?php
session_start();


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
  <title>PLP | Your Predictions</title> <!--Title at the top so the user know which page they are on-->
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
          <li><a href="Index2.php">Home</a></li> <!--links to home page and is a button -->
          <li><a class="active" href="YourPredictions2.php">Your Predictions</a></li><!-- links to your prediction page and is a button this is active because this is the premier league page-->
          <li><a href="PredictionLeague2.php">Prediction League</a></li><!-- links to prediction league page and is a button -->
          <li><a href="PremierLeague2.php">Premier League</a></li><!-- links to premier league  page and is a button -->
          <li><a href="settings.php"><?php echo$_SESSION['username'];?></a></li><!-- links to settings page and is a button -->
        </ul>
      </nav>
    </div>
  </div>
<form action ="insertpredictions.php" method="POST"> <!-- inserts the predictions into a database-->
  
  <div class ="Line100 flex"> <!-- class "Line100" is a line that goes underneath each match thats played to seperate. class "flex" centres text and adjusts size.-->  
          <div class="row"> <!-- class "row" clears the float and puts all the content in the same row-->
            <div class="column"> <!--class "Column" is image size-->
              <img src="Images/Teams/Arsenal.png" alt="Arsenal">
          </div>
            <div class="column2"> <!--class "column2" is for team names-->
              <h1>Arsenal</h1>
            </div>
          <div class="column3"> <!--class "column3" is for the prediction-->
            <label for="arsenal" style ="font-size:28px"></label> 
            <input class ="predictionInput" type="text" id="arsenal" name="arsenal"> <!--class "predictionInput" is the style of the input-->
          </div>
          <div class="column4 flex"> <!--class "column4" is the style for the text that says "vs"-->
            <h1>Vs</h1>
          </div>
          <div class="column3"> <!--class "column3" is for the prediction-->
            <label for="mancity" style ="font-size:28px"></label> 
            <input class ="predictionInput" type="text" id="mancity" name="mancity"> <!--class "predictionInput" is the style of the input-->
          </div>
            <div class="column2">  <!--class "column2" is for team names-->
              <h1>Manchester City</h1>
            </div>
          <div class="column"> <!--class "Column" is image size-->
          <img src="Images/Teams/ManCity.png" alt="Manchester City">
       </div>
    </div>
  </div>

  <div class ="Line100 flex"> <!-- class "Line100" is a line that goes underneath each match thats played to seperate. class "flex" centres text and adjusts size.-->  
          <div class="row"> <!-- class "row" clears the float and puts all the content in the same row-->
            <div class="column"> <!--class "Column" is image size-->
              <img src="Images/Teams/ManUnited.png" alt="Manchester United">
           </div>
            <div class="column2"> <!--class "column2" is for team names-->
              <h1>Manchester United</h1>
            </div>
           <div class="column3"> <!--class "column3" is for the prediction-->
            <label for="manunited" style ="font-size:28px"></label> 
            <input class ="predictionInput" type="text" id="manunited" name="manunited"> <!--class "predictionInput" is the style of the input-->
           </div>
           <div class="column4 flex"> <!--class "column4" is the style for the text that says "vs"-->
            <h1>Vs</h1>
          </div>
          <div class="column3"> <!--class "column3" is for the prediction-->
            <label for="newcastle" style ="font-size:28px"></label> 
            <input class ="predictionInput" type="text" id="newcastle" name="newcastle"> <!--class "predictionInput" is the style of the input-->
           </div>
           <div class="column2">  <!--class "column2" is for team names-->
            <h1>Newcastle United</h1>
         </div>
         <div class="column"> <!--class "Column" is image size-->
          <img src="Images/Teams/Newcastle.png" alt="Newcastle United">
       </div>
    </div>
  </div>

  <div class ="Line100 flex"> <!-- class "Line100" is a line that goes underneath each match thats played to seperate. class "flex" centres text and adjusts size.-->  
          <div class="row"> <!-- class "row" clears the float and puts all the content in the same row-->
            <div class="column"> <!--class "Column" is image size-->
              <img src="Images/Teams/Spurs.png" alt="Tottenham Hotspur">
           </div>
            <div class="column2"> <!--class "column2" is for team names-->
              <h1>Tottenham Hotspur</h1>
            </div>
           <div class="column3"> <!--class "column3" is for the prediction-->
            <label for="spurs" style ="font-size:28px"></label> 
            <input class ="predictionInput" type="text" id="spurs" name="spurs"> <!--class "predictionInput" is the style of the input-->
           </div>
           <div class="column4"> <!--class "column4" is the style for the text that says "vs"-->
            <h1>Vs</h1>
          </div>
          <div class="column3"> <!--class "column3" is for the prediction-->
            <label for="villa" style ="font-size:28px"></label> 
            <input class ="predictionInput" type="text" id="villa" name="villa"> <!--class "predictionInput" is the style of the input-->
           </div>
           <div class="column2">  <!--class "column2" is for team names-->
            <h1>Aston Villa</h1>
         </div>
         <div class="column"> <!--class "Column" is image size-->
          <img src="Images/Teams/astonvilla.png" alt="Aston Villa">
       </div>
    </div>
  </div>

  <div class ="Line100 flex"> <!-- class "Line100" is a line that goes underneath each match thats played to seperate. class "flex" centres text and adjusts size.-->  
          <div class="row"> <!-- class "row" clears the float and puts all the content in the same row-->
            <div class="column"> <!--class "Column" is image size-->
              <img src="Images/Teams/liverpool.png" alt="Liverpool">
           </div>
            <div class="column2"> <!--class "column2" is for team names-->
              <h1>Liverpool</h1>
            </div>
           <div class="column3"> <!--class "column3" is for the prediction-->
            <label for="liverpool" style ="font-size:28px"></label> 
            <input class ="predictionInput" type="text" id="liverpool" name="liverpool"> <!--class "predictionInput" is the style of the input-->
           </div>
           <div class="column4"> <!--class "column4" is the style for the text that says "vs"-->
            <h1>Vs</h1>
          </div>
          <div class="column3"> <!--class "column3" is for the prediction-->
            <label for="brighton" style ="font-size:28px"></label> 
            <input class ="predictionInput" type="text" id="brighton" name="brighton"> <!--class "predictionInput" is the style of the input-->
           </div>
           <div class="column2">  <!--class "column2" is for team names-->
            <h1>Brighton</h1>
         </div>
         <div class="column"> <!--class "Column" is image size-->
          <img src="Images/Teams/brighton.png" alt="Brighton Home Albion">
       </div>
    </div>
  </div>

  <div class ="Line100 flex"> <!-- class "Line100" is a line that goes underneath each match thats played to seperate. class "flex" centres text and adjusts size.-->  
          <div class="row"> <!-- class "row" clears the float and puts all the content in the same row-->
            <div class="column"> <!--class "Column" is image size-->
              <img src="Images/Teams/fullan.png" alt="Fulham">
           </div>
            <div class="column2"> <!--class "column2" is for team names-->
              <h1>Fulham</h1>
            </div>
           <div class="column3"> <!--class "column3" is for the prediction-->
            <label for="fulham" style ="font-size:28px"></label> 
            <input class ="predictionInput" type="text" id="fulham" name="fulham"> <!--class "predictionInput" is the style of the input-->
           </div>
           <div class="column4"> <!--class "column4" is the style for the text that says "vs"-->
            <h1>Vs</h1>
          </div>
          <div class="column3"> <!--class "column3" is for the prediction-->
            <label for="brentford" style ="font-size:28px"></label> 
            <input class ="predictionInput" type="text" id="brentford" name="brentford"> <!--class "predictionInput" is the style of the input-->
           </div>
           <div class="column2">  <!--class "column2" is for team names-->
            <h1>Brentford</h1>
         </div>
         <div class="column"> <!--class "Column" is image size-->
          <img src="Images/Teams/brentford.png" alt="Brentford">
       </div>
    </div>
  </div>

  <div class ="Line100 flex"> <!-- class "Line100" is a line that goes underneath each match thats played to seperate. class "flex" centres text and adjusts size.-->  
          <div class="row"><!-- class "row" clears the float and puts all the content in the same row-->
            <div class="column"> <!--class "Column" is image size-->
              <img src="Images/Teams/Chelsea.png" alt="Chelsea">
           </div>
            <div class="column2"> <!--class "column2" is for team names-->
              <h1>Chelsea</h1>
            </div>
           <div class="column3"> <!--class "column3" is for the prediction-->
            <label for="chelsea" style ="font-size:28px"></label> 
            <input class ="predictionInput" type="text" id="chelsea" name="chelsea"> <!--class "predictionInput" is the style of the input-->
           </div>
           <div class="column4"> <!--class "column4" is the style for the text that says "vs"-->
            <h1>Vs</h1>
          </div>
          <div class="column3"> <!--class "column3" is for the prediction-->
            <label for="crystalpalace" style ="font-size:28px"></label> 
            <input class ="predictionInput" type="text" id="crystalpalace" name="crystalpalace"> <!--class "predictionInput" is the style of the input-->
           </div>
           <div class="column2">  <!--class "column2" is for team names-->
            <h1>Crystal Palace</h1>
         </div>
         <div class="column"> <!--class "Column" is image size-->
          <img src="Images/Teams/crystalpalace.png" alt="Crystal Palace">
       </div>
    </div>
  </div>

  <div class ="Line100 flex"> <!-- class "Line100" is a line that goes underneath each match thats played to seperate. class "flex" centres text and adjusts size.-->  
    <div class="row"> <!-- class "row" clears the float and puts all the content in the same row-->
      <div class="column"> <!--class "Column" is image size-->
        <img src="Images/Teams/WestHam.png" alt="West Ham United">
     </div>
      <div class="column2"> <!--class "column2" is for team names-->
        <h1>West Ham United</h1>
      </div>
     <div class="column3"> <!--class "column3" is for the prediction-->
      <label for="westham" style ="font-size:28px"></label> 
      <input class ="predictionInput" type="text" id="westham" name="westham"> <!--class "predictionInput" is the style of the input-->
     </div>
     <div class="column4"> <!--class "column4" is the style for the text that says "vs"-->
      <h1>Vs</h1>
    </div>
    <div class="column3"> <!--class "column3" is for the prediction-->
      <label for="Wolves" style ="font-size:28px"></label> 
      <input class ="predictionInput" type="text" id="wolves" name="wolves"> <!--class "predictionInput" is the style of the input-->
     </div>
     <div class="column2">  <!--class "column2" is for team names-->
      <h1>Wolves</h1>
   </div>
   <div class="column"> <!--class "Column" is image size-->
    <img src="Images/Teams/wolves.png" alt="Wolves">
 </div>
</div>
</div>


  <div class ="Line100 flex"> <!-- class "Line100" is a line that goes underneath each match thats played to seperate. class "flex" centres text and adjusts size.-->  
          <div class="row"> <!-- class "row" clears the float and puts all the content in the same row-->
            <div class="column"> <!--class "Column" is image size-->
              <img src="Images/Teams/bournmouth.png" alt="Bournemouth">
           </div>
            <div class="column2"> <!--class "column2" is for team names-->
              <h1>Bournemouth</h1>
            </div>
           <div class="column3"> <!--class "column3" is for the prediction-->
            <label for="bouremouth" style ="font-size:28px"></label> 
            <input class ="predictionInput" type="text" id="bournemouth" name="bournemouth"> <!--class "predictionInput" is the style of the input-->
           </div>
           <div class="column4"> <!--class "column4" is the style for the text that says "vs"-->
            <h1>Vs</h1>
          </div>
          <div class="column3"> <!--class "column3" is for the prediction-->
            <label for="leeds" style ="font-size:28px"></label> 
            <input class ="predictionInput" type="text" id="leeds" name="leeds"> <!--class "predictionInput" is the style of the input-->
           </div>
           <div class="column2">  <!--class "column2" is for team names-->
            <h1>Leeds United</h1>
         </div>
         <div class="column"> <!--class "Column" is image size-->
          <img src="Images/Teams/leeds.png" alt="Leeds United">
       </div>
    </div>
  </div>

  <div class ="Line100 flex"> <!-- class "Line100" is a line that goes underneath each match thats played to seperate. class "flex" centres text and adjusts size.-->  
          <div class="row"> <!-- class "row" clears the float and puts all the content in the same row-->
            <div class="column"> <!--class "Column" is image size-->
              <img src="Images/Teams/leicester.png" alt="Leicester City">
           </div>
            <div class="column2"> <!--class "column2" is for team names-->
              <h1>Leicester</h1>
            </div>
           <div class="column3"> <!--class "column3" is for the prediction-->
            <label for="leicester" style ="font-size:28px"></label> 
            <input class ="predictionInput" type="text" id="leicester" name="leicester"> <!--class "predictionInput" is the style of the input-->
           </div>
           <div class="column4"> <!--class "column4" is the style for the text that says "vs"-->
            <h1>Vs</h1>
          </div>
          <div class="column3"> <!--class "column3" is for the prediction-->
            <label for="everton" style ="font-size:28px"></label> 
            <input class ="predictionInput" type="text" id="everton" name="everton"> <!--class "predictionInput" is the style of the input-->
           </div>
           <div class="column2">  <!--class "column2" is for team names-->
            <h1>Everton</h1>
         </div>
         <div class="column"> <!--class "Column" is image size-->
          <img src="Images/Teams/everton.png" alt="Everton">
       </div>
    </div>
  </div>

  <div class ="Line100 flex"> <!-- class "Line100" is a line that goes underneath each match thats played to seperate. class "flex" centres text and adjusts size.-->  
          <div class="row"> <!-- class "row" clears the float and puts all the content in the same row-->
            <div class="column"> <!--class "Column" is image size-->
              <img src="Images/Teams/NottinghamForest.png" alt="Nottingham Forest">
           </div>
            <div class="column2"> <!--class "column2" is for team names-->
              <h1>Nottingham Forest</h1>
            </div>
           <div class="column3"> <!--class "column3" is for the prediction-->
            <label for="nottinghamforest" style ="font-size:28px"></label> 
            <input class ="predictionInput" type="text" id="nottinghamforest" name="nottinghamforest"> <!--class "predictionInput" is the style of the input-->
           </div>
           <div class="column4"> <!--class "column4" is the style for the text that says "vs"-->
            <h1>Vs</h1>
          </div>
          <div class="column3"> <!--class "column3" is for the prediction-->
            <label for="southampton" style ="font-size:28px"></label> 
            <input class ="predictionInput" type="text" id="southampton" name="southampton"> <!--class "predictionInput" is the style of the input-->
           </div>
           <div class="column2">  <!--class "column2" is for team names-->
            <h1>Southampton</h1>
         </div>
         <div class="column"> <!--class "Column" is image size-->
          <img src="Images/Teams/southampton.png" alt="Southampton">
       </div>
    </div>
  </div>
</div>
<div class="flex"> <!--class "flex" centres text and adjusts size -->
    <button class="button Enter">Submit</button>
 </div>
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

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
          <li><a href="Index2.php">Home</a></li>    <!--footer home button -->
          <li><a class="active" href="YourPredictions2.php">Your Predictions</a></li>  <!--footer your prediction buttons-->
          <li><a href="PredictionLeagu2e.php">Prediction League</a></li> <!--footer prediction league button-->
          <li><a href="PremierLeague2.php">Premier League</a></li> <!--footer premier league button-->
          <li><a href="FAQ2.php">FAQ</a></li> <!--footer faq button-->
        </ul>
      </nav>
    </div>
  </div>
</body>
</html>