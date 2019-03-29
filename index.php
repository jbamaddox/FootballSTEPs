<?php
include("functions2.php");
include("step2js.php");
?>
<html>
    <head>
        
        <title>Football STEPs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="shortcut icon" href="/Images/fb_Gold_tab.ico"/>
        <link rel="stylesheet" type="text/css" href="step.css">
        
    </head>
    <!-- head end-->
    
    
    
    <!--body begin-->
    <body onresize = "resizeFirstRow()">
        <span id="para"></span>
        
        
        <!-- --------------------Score Board Bar---------------------->
        <div id="ScoreBoardBar">
            <ul id="ScoreBoardBar_ul">
                <li style="text-align: right;"><img src="Images/<?php echo($teamA); ?>.png"></li>
                <li style="text-align: right; margin-top: 30px;"><a id="scoreBoardBarTeamA"><?php echo($teamA); ?></a></li>
                
                <li style=" margin-top: 30px;"><a id="scoreBoardBarTeamAScore"><?php echo(round($teamAPointsTotal)); ?></a></li>
                
                <li style=" margin-top: 30px;"><a id="scoreBoardBarTeamBScore"><?php echo(round($teamBPointsTotal)); ?></a></li>
                
                <li style="text-align: left; margin-top: 30px;"><a id="scoreBoardBarTeamB"><?php echo($teamB); ?></a></li>
                <li style="text-align: left;"><img src="Images/<?php echo($teamB); ?>.png"></li>
            </ul>
        </div>
        
        <!-- Score Board Bar End--->
        
        
        
        
        <!-- ------------ TitleBar ----------------- -->
        <div class="titleBar" id="titleBar">
                    <div id="titleBarLogo" style="-webkit-transition: all 2s; transition: all 2s; float: left; margin-left: 20px; margin-top: 0px; height: 50px; z-index: 18;">
                        <img  src="Images/fbquote1.png" style="height: 50px;" />
                    </div>
                    <span id="titleMV" style="float: right; margin-top:15px; margin-right: 10px"></span>
        </div>
        <!-- title bar -->
        
        
        
        
        
        <!--Welcome -->
        <div id="welcome" style="background-color: rgba(25,25,25, .98); position: fixed; margin: 0 auto; top: 50px; width: 96%; -webkit-transition: all 1.5s; transition: all 1.5s; z-index: 14; margin-left: 2%; margin-top: 10px; height: 0%; display: none; z-index: 25;">
            <div class="welcomeContent" style="width: 40%; margin-left: 30%;">
                <img src="Images/fb_gold.png" style="width: 30%; margin-left: 35%;"/>
            </div>
            
            <div class="welcomeContent">
                <img src="Images/fbskins_quotesFull.png" style="width: 100%;"/>
            </div>
            
            
            
            <div class="welcomeContent">
                <p style="font-size: 1em; text-align: center; margin: 0 auto;">
                    Welcome to  <strong>FootballSTEPs.com</strong>  where we use real game stats to predict the outcome of a game between any two Power5 teams on a neutral field and allow you to substitute the passing, running, or defensive contributions of any team for any another. 
                    <br/>
                    <br/>How accurate are we?
                    <br/>
                    <br/>For the 2017-2018 bowl season, the <strong>S.T.E.P.</strong> algorithm was 15-4 for applicable games with a &#177(2.7) points for competitive games. We accurately predicted the exact score of the championship game, and was within 6 yards of both the passing and rushing totals for Alabama in that game.
                </p>
                <p style="text-align: center;">Enjoy!</p>
            </div>
            
            
            <div class="welcomeContent">
                <button id="welcomeClose" class="buttonSub" onclick="closeWelcome()" style="width: 30%; margin-left: 35%; background-color: rgb(225,225,225); color: rgb(25,25,25);">Got it</button>
            </div>
            
        </div>
        <!--Welcome -->
        
        
        
        <!--  Favorite Team Side Menu -------------- -->    
        <div id="mySidenav" class="sidenav">
            
            <!--favorite menu close button -->
            <button style="   background-color: rgba(200,200,200, .95);
                              color: rgb(50,50,50);
                              width: 90%;
                              font-size: 18px;
                              margin: 0 auto;
                              height: 35px;
                              opacity: 1;
                              border: none;
                              float: left;
                              -webkit-transition-duration: 0.4s; /* Safari */
                              transition-duration: 0.4s;"
                    href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                <span>CLOSE &times;</span>
              </button>
            <!-- favorite menu close button end-->
          
          
            <!-- Choose Favorite Team Button-->          
            <div id="chooseFavoriteTeam" style="width: 80%; margin: 0 auto; ">
                <ul id="nav">
                            
                            <li style=" width: 80%; min-width: 70px;">
                                <a style="text-align: center; padding-top: 5px;" class="fly" href="#" id="favoriteTeam" name="favoriteTeam" ><script>document.write(favoriteTeam);</script></a>
                                <ul class="dd">
                                    <li><a class="fly" href="#">ACC</a>
                                        <ul>
                                            
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Boston College</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Clemson</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Duke</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Florida St.</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Georgia Tech</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Louisville</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Miami (FL)</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">North Carolina</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">NC State</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Pittsburgh</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Syracuse</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Virginia</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Virginia Tech</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Wake Forest</button></a></li>
                                        </ul>
                                    </li>
                                    <li><a class="fly" href="#">Big 10</a>
                                        <ul>
                                            
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Illinois</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Indiana</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Iowa</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Maryland</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Michigan</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Michigan St.</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Minnesota</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Nebraska</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Northwestern</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Ohio St.</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Penn St.</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Purdue</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Rutgers</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Wisconsin</button></a></li>
                                        </ul>
                                    </li>
                                    <li><a class="fly" href="#">Big 12</a>
                                        <ul>
                                            
                                            
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Baylor</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Iowa St.</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Kansas</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Kansas St.</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Oklahoma</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Oklahoma St.</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">TCU</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Texas</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Texas Tech</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">West Virginia</button></a></li>
                                        </ul>
                                    </li>
                                    <li><a class="fly" href="#">Pac 12</a>
                                        <ul>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Arizona</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Arizona St.</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">California</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Colorado</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Oregon</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Oregon St.</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">USC</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Stanford</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">UCLA</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Utah</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Washington</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Washington St.</button></a></li>
                                        </ul>
                                    </li>
                                    <li><a class="fly" href="#">SEC</a>
                                        <ul>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Alabama</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Arkansas</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Auburn</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Florida</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Georgia</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Kentucky</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">LSU</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Ole Miss</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Mississippi St.</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Missouri</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">South Carolina</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Tennessee</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Texas A&M</button></a></li>
                                            <li><a><button onclick="changeFavoriteTeam(this.innerHTML)">Vanderbilt</button></a></li>
                                        </ul>
                                    </li>
                                                    
                                </ul>
                            </li>
                </ul>
            </div>
            <!-- Choose Favorite Team Button end-->
            
            
            <!--  Favorite Team Twitter-->
            <div id="FavoriteTeamTwitter" style="width: 80%; margin: 0 auto; margin-top: 10%;">
                <a class="twitter-timeline" data-height="400px" data-width="100%" data-theme="dark" href="https://twitter.com/BoilerFootball?ref_src=twsrc%5Etfw">Tweets by BoilerFootball</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <!--  Favorite Team Twitter-->

            
          
        </div>
        <!-- favorite team menu end-->
        
        
        
        <!--  ---------------Button for Favorite Team ---------------- -->
        <div style="display: none;">
            <button class="buttonNav" onclick="openNav()" style="display: none;">&#9776; <span id="favoriteTeamButton"><script>document.write(top25);</script></span></button>
            <!--  ---------------Button for Favorite Team ---------------- -->
        </div>    
        
        
        
        
        
            
            
        <!-- rows for body begin-->
        <div id="allRows" style=" width: 100%; float: left; margin: 0 auto; padding-top: 0px;  background-color: rgba(225,225,225, .35);">
            
            
                
                <!-- Team A Twitter -->
                <div id="teamATwitter" style="-webkit-transition: all 2s; transition: all 2s; opacity: 0; width: 18%; float: left; margin: 1% 1% 1% 1%; box-shadow: 0px 16px 16px 0px rgba(0,0,0,0.8); z-index: 2;">
                        <a class="twitter-timeline" data-height="600px" data-width="100%" data-theme="dark" href="https://twitter.com/<?php echo($teamATwitter); ?>?ref_src=twsrc%5Etfw">Tweets by <?php  echo($teamATwitter); ?></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <!-- Team A Twitter End -->
                
                
                
                <!--- Table for Scoreboard -
                <div id="scoreboardDiv" style="float: left; margin: 0 auto; z-index: 3;">---->
                    
                    <table id="scoreboardTable" >
                        
                        <!-- STEP  -->
                        <tr>
                            <td><img src="Images/fbskins_quotesFull_black.png" style="width: 96%; margin-left: 2%;"/></td>
                        </tr>
                        <!-- STEP  -->
                        
                            
                        <!-- ------- Choose a Team Menu ------- -->
                        <tr>
                            <td>
                                
                                <div class="chooseTeam" id="chooseTeam" style="width: 100%; margin-bottom: 15px;">
                                    <form action="index.php" method="get">
                                        <input type="hidden" name="teamA" value="<?php echo($teamA) ?>" id="teamAValue" />
                                        <ul id="nav">
                                            
                                            
                                            <li style=" width: 50%; min-width: 70px; float: left; height: 40px;">
                                                <a style="  font-size:1.5em; height: 100%; text-align: center; padding-top: 5px;" class="fly" href="#"
                                                   >
                                                    <span style="float: left; width: 30%;"><img style="margin: 0 auto; height: 100%;" src="Images/<?php echo($teamA); ?>.png"></span>
                                                    <span id="teamA" style="text-align: center; float: left; padding-top: 5px; width: 70%; text-shadow: 2.5px 5px 7.5px black;"><?php echo($teamA); ?></span></a>
                                                
                                                <ul class="dd">
                                                    <li><a class="fly" href="#">ACC</a>
                                                        <ul>
                                                            
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Boston College</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Clemson</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Duke</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Florida St.</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Georgia Tech</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Louisville</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Miami (FL)</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">North Carolina</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">NC State</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Pittsburgh</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Syracuse</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Virginia</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Virginia Tech</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Wake Forest</button></a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="fly" href="#">Big 10</a>
                                                        <ul>
                                                            
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Illinois</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Indiana</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Iowa</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Maryland</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Michigan</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Michigan St.</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Minnesota</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Nebraska</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Northwestern</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Ohio St.</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Penn St.</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Purdue</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Rutgers</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Wisconsin</button></a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="fly" href="#">Big 12</a>
                                                        <ul>
                                                            
                                                            
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Baylor</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Iowa St.</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Kansas</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Kansas St.</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Oklahoma</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Oklahoma St.</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">TCU</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Texas</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Texas Tech</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">West Virginia</button></a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="fly" href="#">Pac 12</a>
                                                        <ul>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Arizona</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Arizona St.</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">California</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Colorado</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Oregon</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Oregon St.</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">USC</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Stanford</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">UCLA</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Utah</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Washington</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Washington St.</button></a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="fly" href="#">SEC</a>
                                                        <ul>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Alabama</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Arkansas</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Auburn</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Florida</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Georgia</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Kentucky</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">LSU</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Ole Miss</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Mississippi St.</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Missouri</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">South Carolina</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Tennessee</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Texas A M</button></a></li>
                                                            <li><a><button onclick="changeTeamAValue(this.innerHTML)">Vanderbilt</button></a></li>
                                                        </ul>
                                                    </li>
                                                                    
                                                </ul>
                                            </li>
                                                                                
                                                                                
                                            <li style="width: 50%; min-width: 70px; float: right; height: 40px;">
                                                <!-- Hidden Input for Form-->
                                                <input type="hidden" name="teamB" value="<?php echo($teamB); ?>" id="teamBValue"/>
                                                
                                                <!-- Team B Button-->
                                                <a style="font-size: 1.5em; height: 100%; text-align: center; padding-top: 5px;" class="fly" href="#"  >
                                                    <span style="float: left; padding-top: 5px; display: inline-block; width: 70%; text-align: center; text-shadow: 2.5px 5px 7.5px black;"><?php echo($teamB); ?></span>
                                                    <span style="float: left; display: inline-block; width: 30%;"><img style="margin: 0 auto; height: 100%;" src="Images/<?php echo($teamB); ?>.png"></span>
                                                </a>
                                                
                                                    <ul class="dd">
                                                        <li><a class="fly" href="#">ACC</a>
                                                            <ul>
                                                                
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Boston College</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Clemson</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Duke</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Florida St.</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Georgia Tech</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Louisville</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Miami (FL)</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">North Carolina</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">NC State</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Pittsburgh</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Syracuse</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Virginia</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Virginia Tech</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Wake Forest</button></a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="fly" href="#">Big 10</a>
                                                            <ul>
                                                                
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Illinois</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Indiana</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Iowa</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Maryland</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Michigan</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Michigan St.</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Minnesota</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Nebraska</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Northwestern</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Ohio St.</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Penn St.</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Purdue</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Rutgers</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Wisconsin</button></a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="fly" href="#">Big 12</a>
                                                            <ul>
                                                                
                                                                
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Baylor</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Iowa St.</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Kansas</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Kansas St.</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Oklahoma</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Oklahoma St.</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">TCU</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Texas</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Texas Tech</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">West Virginia</button></a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="fly" href="#">Pac 12</a>
                                                            <ul>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Arizona</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Arizona St.</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">California</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Colorado</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Oregon</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Oregon St.</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">USC</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Stanford</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">UCLA</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Utah</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Washington</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Washington St.</button></a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="fly" href="#">SEC</a>
                                                            <ul>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Alabama</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Arkansas</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Auburn</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Florida</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Georgia</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Kentucky</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">LSU</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Ole Miss</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Mississippi St.</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Missouri</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">South Carolina</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Tennessee</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Texas A M</button></a></li>
                                                                <li><a><button onclick="changeTeamBValue(this.innerHTML)">Vanderbilt</button></a></li>
                                                            </ul>
                                                        </li>
                                                                        
                                                    </ul>
                                            </li>
                                            
                                        </ul>
                                
                                    </form>
                                </div>
                                      
                            </td>
                            
                        </tr>
                        <!-- ------- Choose a Team Menu End ------- -->
                        
                        
                        <!-- Team total Scores -->         
                        <tr>
                            <td>
                                
                                <div style="display: inline-block; width: 100%; min-width: 70px;">
                                    <a style="font-size: 2.5em; height: 100%; text-align: center;" class="fly" >
                                    <strong><span id="teamAScore" style="text-align: right; width: 40%; float: left; padding-right: 10%; -webkit-transition: all 2s; transition: all 2s;" ><?php echo(round($teamAPointsTotal)); ?></span></strong>
                                    <strong><span id="teamBScore" style="text-align: left; width: 40%; float: left; padding-left: 10%; -webkit-transition: all 2s;transition: all 2s;"><?php echo(round($teamBPointsTotal)); ?></span></strong></a>
                                </div>
                               
                            </td>
                        </tr>
                        <!-- Team total Scores End-->
                        
                        
                        <!-- ------- Total Yards Display -------->
                        <tr>
                            <td>
                                
                                <div style="width: 100%; align-self: center;">
                                    <div style="text-align: center; width: 100%;">Total Yards</div>
                                    
                                    <!-- ------- Team A Total Yards Display -------->
                                    <div style="margin-right: 2.5%; width: 30%; float: left; display: inline-block; text-align: right;"><strong><span id ="teamATotalYards"><?php echo(round($calculatedPassYPG_A + $calculatedRushYPG_A))?></span></strong> yards</div>
                                    <!-- ------- Team A Total Yards Display -------->
                                    
                                    
                                    <!-- ------- Total Yards Bar -------->
                                    <div style="margin: 0 auto; background-color: rgb(125, 125, 125); width: 35%; height: 15px; display: inline-block; float: left; box-shadow: 0px 8px 16px 0px rgba(0,0,0,.95);">
                                            <div id="totalYardsBar" style="-webkit-transition: width 1s; transition: all 2s; transition: width 2s; background-color: white; width: 0%; height: 100%;"></div>
                                    </div>
                                    <!-- ------- Total Yards Bar -------->
                                    
                                    
                                    <!-- ------- Team B Total Yards -------->
                                    <div style="margin-left: 2.5%; width: 30%; float: left; display: inline-block; text-align: left;"><strong><span id ="teamBTotalYards"><?php echo(round($calculatedPassYPG_B + $calculatedRushYPG_B))?></span></strong> yards</div>
                                    <!-- ------- Team B Total Yards -------->
                                    
                                        <br/>
                                </div>
                                
                            </td>
                        </tr>
                        <!-- ------- Total Yards Display -------->
                        
                        
                        <!-- ------- Passing Yards Display -------->
                        <tr>
                            <td>
                                
                                <div style="width: 100%; align-self: center;">
                                    <div style="text-align: center; width: 100%;">Passing</div>
                                    
                                    <!-- ------- Team A Passing Yards -------->
                                    <div  style="margin-right: 2.5%; width: 30%; float: left; display: inline-block; text-align: right;"><strong><span id ="teamAPassingYards"><?php echo(round($calculatedPassYPG_A))?></span></strong> yards, <strong><span id ="teamAPassingTD"><?php echo(round($calculatedPassTDPG_A))?></span></strong> td</div>
                                    <!-- ------- Team A Passing Yards -------->
                                    
                                    
                                    <!-- -------  Passing Yards Bar -------->
                                    <div style="margin: 0 auto; background-color: rgb(125,125, 125); width: 35%; height: 15px; display: inline-block; float: left; box-shadow: 0px 8px 16px 0px rgba(0,0,0,.95);">
                                            <div id="passingYardsBar" style="-webkit-transition: width 2s; transition: all 2s; transition: width 2s; background-color: white; width: 0%; height: 100%;"></div>
                                    </div>
                                    <!-- -------  Passing Yards Bar -------->
                                    
                                    
                                    <!-- ------- Team B Passing Yards -------->
                                    <div style="margin-left: 2.5%; width: 30%; float: left; display: inline-block; text-align: left;"><strong><span id ="teamBPassingYards"><?php echo(round($calculatedPassYPG_B))?></span></strong> yards, <strong><span id ="teamBPassingTD"><?php echo(round($calculatedRushTDPG_B))?></span></strong> td</div>
                                    <!-- ------- Team B Passing Yards -------->
                                    <br/>
                                    
                                </div>
                                
                            </td>
                        </tr>
                        <!-- ------- Passing Yards Display -------->
                        
                        
                        <!-- ------- Rushing Yards Display -------->
                        <tr>
                            <td>
                                
                                <div style="width: 100%; align-self: center;">
                                    <div style="text-align: center; width: 100%;">Rushing</div>
                                    
                                    <!-- ------- Team A Rushing Yards -------->
                                    <div style="margin-right: 2.5%; width: 30%; float: left; display: inline-block; text-align: right;"><strong><span id ="teamARushingYards"><?php echo(round($calculatedRushYPG_A))?></span></strong> yards, <strong><span id ="teamARushingTD"><?php echo(round($calculatedRushTDPG_A))?></span></strong> td</div>
                                    <!-- ------- Team A Rushing Yards -------->
                                    
                                    
                                    <!-- ------- Rushing Yards Bar -------->
                                    <div style="margin: 0 auto; background-color: rgb(125, 125, 125); width: 35%; height: 15px; display: inline-block; float: left; box-shadow: 0px 8px 16px 0px rgba(0,0,0,.95);">
                                            <div id="rushingYardsBar" style="-webkit-transition: width 2s; transition: width 2s; transition: all 2s; background-color: white; width: 0%; height: 100%;"></div>
                                    </div>
                                    <!-- ------- Rushing Yards Bar -------->
                                    
                                    
                                    <!-- ------- Team B Rushing Yards -------->
                                    <div style="margin-left: 2.5%; width: 30%; float: left; display: inline-block; text-align: left;"><strong><span id ="teamBRushingYards"><?php echo(round($calculatedRushYPG_B))?></span></strong> yards, <strong><span id ="teamBRushingTD"><?php echo(round($calculatedRushTDPG_B))?></span></strong> td</div>
                                    <!-- ------- Team B Rushing Yards -------->
                                    
                                    <br/>
                                    
                                </div>
                                
                            </td>
                        </tr>
                        <!-- ------- Rushing Yards Display -------->
                        
                        
                        <!--  ---------------Button for Player Substitutions ---------------- -->
                        <tr>
                            <td >
                                
                                <button class="buttonSub" onclick="openSubNav();" style="width: 80%; margin-left: 10%; margin-top: 15px;">Click for Substitutions</button> 
                            </td>
                        </tr>
                        <!--  ---------------Button for Player Substitutions ---------------- -->
    
    
                        <!--Passing Substitution Menu-->
                        <tr >
                            
                            <td style="padding-top: 5px;">
                                <div style="text-align: center; margin: auto;">
                                    <strong>Passing Substitutions</strong>
                                </div>
                                
                                <div style="text-align: center; margin: auto;">
                                    <?php
                                        if($teamA != $teamAPasser){
                                            echo(
                                                '<div style="width: 50%; text-align: center; margin: auto; float: left;">' . $teamA . ' | ' . $teamAPasser . '</div>'
                                            );
                                        }
                                        
                                        if($teamB != $teamBPasser){
                                            echo(
                                                '<div style="width: 50%; text-align: center; margin: auto; float: right;">' . $teamB . ' | ' . $teamBPasser . '</div>'
                                            );
                                        }
                                        
                                        if($teamB == $teamBPasser && $teamA == $teamAPasser){
                                            echo(
                                                '<div style="width: 100%; text-align: center;">No Substitutions Made</div>'
                                            );
                                        }
                                        
                                    
                                    ?>
                                </div>
                            </td>
                            
                        </tr>
                        <!--Passing Substitution Menu-->
                        
                        
                        <!--Rushing Substitution Menu-->
                        <tr>
                            
                            <td style="padding-top: 5px;">
                                <div  style="text-align: center; margin: auto;">
                                    <strong>Rushing Substitutions</strong>
                                </div>
                                <div style="text-align: center; margin: auto;">
                                    <?php
                                        if($teamA != $teamARunner){
                                            echo(
                                                '<div style="width: 50%; text-align: center; margin auto; float: left;">' . $teamA . ' | ' . $teamARunner . '</div>'
                                            );
                                        }
                                        
                                        if($teamB != $teamBRunner){
                                            echo(
                                                '<div style="width: 50%; text-align: center; margin: auto; float: right;">' . $teamB . ' | ' . $teamBRunner . '</div>'
                                            );
                                        }
                                        
                                        if($teamB == $teamBRunner && $teamA == $teamARunner){
                                            echo(
                                                '<div style="width: 100%; text-align: center;">No Substitutions Made</div>'
                                            );
                                        }
                                        
                                    
                                    ?>
                                </div>
                            </td>
                            
                        </tr>
                        <!--Rushing Substitution Menu-->
                        
                        
                        <!--Defensive Substitution Menu-->
                        <tr>
                            
                            <td style="padding-top: 5px;">
                                <div  style="text-align: center; margin: auto;">
                                    <strong>Defense Substitutions</strong>
                                </div>
                                
                                <div style="text-align: center; margin: auto;">
                                    <?php
                                        if($teamA != $teamADefense){
                                            echo(
                                                '<div style="width: 50%; text-align: center; margin auto; float: left;">' . $teamA . ' | ' . $teamADefense . '</div>'
                                            );
                                        }
                                        
                                        if($teamB != $teamBDefense){
                                            echo(
                                                '<div style="width: 50%; text-align: center; margin: auto; float: right;">' . $teamB . ' | ' . $teamBDefense . '</div>'
                                            );
                                        }
                                        
                                        if($teamB == $teamBDefense && $teamA == $teamADefense){
                                            echo(
                                                '<div style="width: 100%; text-align: center;">No Substitutions Made</div>'
                                            );
                                        }
                                        
                                    
                                    ?>
                                </div>
                            </td>
                            
                        </tr>
                        <!--Defensive Substitution Menu-->
                        
                        
                        <!--  ---------------Button for Resetting Player Substitutions ---------------- -->
                        <tr>
                            <td>
                                
                                <form method="get" action="index.php">
                                    
                                    
                                    <input type="hidden" name="teamA" value="<?php  echo($teamA); ?>" />
                                    <input type="hidden" name="teamB" value="<?php  echo($teamB); ?>" />
                                    <input type="submit" class="buttonSub" value="Reset Subs" style="width: 40%; margin: 0 auto; margin-left: 30%; margin-top: 5px; padding-top: 5px;" />
                                </form>
                                
                            </td>
                        </tr>
                        <!--  ---------------Button for Resetting Player Substitutions ---------------- -->
                        
                        
                        <!-- middle column  ***Score Board Bar*** and ***Player Substitutions***-->
                        <tr>
                            <td>
                                
                                <div id="middleColumn" style="width: 100%; float: left; margin: 0 auto;">
                                    
                                    
                                    <!--Player Substitution Menu-->
                                    <div id="mySubNav" class="subNav">
                                            
                                        <!--Player Substitution close button -->
                                        <button style="   background-color: rgba(200,200,200, .95);
                                                          color: rgb(50,50,50);
                                                          width: 90%;
                                                          font-size: 1em;
                                                          margin: 0 auto;
                                                          height: 65px;
                                                          opacity: 1;
                                                          border: none;
                                                          float: right;
                                                          -webkit-transition-duration: 0.4s; /* Safari */
                                                          transition-duration: 0.4s;
                                                          z-index: inherit;
                                                          box-shadow: 0px 8px 16px 0px rgba(0,0,0,.95);"
                                                href="javascript:void(0)" class="subNavCloseBtn" onclick="closeSubNav()">
                                            <div style="padding-top: 10px;">CLOSE &times;</div>
                                        </button>
                                          <!-- favorite menu close button end-->
                                          
                                          
                                          
                                        <!-- Ssubstitute Player Form menu-->
                                        <form action="index.php" method="get">
                                            <input type="hidden" name="teamA" value="<?php echo($teamA); ?>" />
                                            <input type="hidden" name="teamB" value="<?php echo($teamB); ?>" />
                                            
                                            <div style=" width: 90%; float: right; height: 95%;  ">
                                                
                                                <div class="substitution"><span><strong>Current Passing Offense</strong></span></div>
                                                <div class="panel" id="qbSub">
                                                    
                                                    
                                                        <input type="hidden" name="teamAPasser" value="<?php echo($teamAPasser) ?>" id="teamAPasser" />
                                                        <ul id="nav">
                                                            
                                                            
                                                            <li style=" width: 50%; min-width: 70px; float: left; height: 40px;">
                                                                <a style="  font-size:1.5em; height: 100%; text-align: center; padding-top: 5px;" class="fly" href="#"
                                                                    >
                                                                    <span style="float: left; width: 50%;"><img style="height: 100%; margin: 0 auto;" src="Images/<?php echo($teamAPasser); ?>.png"></span>
                                                                    <span id="teamA" style="text-align: left; float: left; padding-top: 5px; width: 50%;"><?php echo($teamAPasser); ?></span></a>
                                                                
                                                                <ul class="dd">
                                                                    <li><a class="fly" href="#">ACC</a>
                                                                        <ul>
                                                                            
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Boston College</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Clemson</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Duke</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Florida St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Georgia Tech</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Louisville</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Miami (FL)</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">North Carolina</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">NC State</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Pittsburgh</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Syracuse</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Virginia</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Virginia Tech</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Wake Forest</button></a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a class="fly" href="#">Big 10</a>
                                                                        <ul>
                                                                            
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Illinois</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Indiana</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Iowa</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Maryland</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Michigan</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Michigan St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Minnesota</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Nebraska</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Northwestern</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Ohio St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Penn St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Purdue</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Rutgers</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Wisconsin</button></a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a class="fly" href="#">Big 12</a>
                                                                        <ul>
                                                                            
                                                                            
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Baylor</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Iowa St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Kansas</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Kansas St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Oklahoma</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Oklahoma St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">TCU</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Texas</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Texas Tech</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">West Virginia</button></a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a class="fly" href="#">Pac 12</a>
                                                                        <ul>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Arizona</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Arizona St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">California</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Colorado</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Oregon</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Oregon St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">USC</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Stanford</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">UCLA</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Utah</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Washington</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Washington St.</button></a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a class="fly" href="#">SEC</a>
                                                                        <ul>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Alabama</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Arkansas</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Auburn</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Florida</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Georgia</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Kentucky</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">LSU</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Ole Miss</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Mississippi St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Missouri</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">South Carolina</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Tennessee</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Texas A M</button></a></li>
                                                                            <li><a><button onclick="changeTeamAPasser(this.innerHTML)">Vanderbilt</button></a></li>
                                                                        </ul>
                                                                    </li>
                                                                                    
                                                                </ul>
                                                            </li>
                                                                                                
                                                                                                
                                                            <li style="width: 50%; min-width: 70px; float: right; height: 40px;">
                                                                <!-- Hidden Input for Form-->
                                                                <input type="hidden" name="teamBPasser" value="<?php echo($teamBPasser); ?>" id="teamBPasser"/>
                                                                
                                                                <!-- Team B Button-->
                                                                <a style="font-size: 1.5em; height: 100%; text-align: center; padding-top: 5px;" class="fly" href="#"  >
                                                                    <span style="float: left; padding-top: 5px; display: inline-block; width: 50%; text-align: right; "><?php echo($teamBPasser); ?></span>
                                                                    <span style="float: left; display: inline-block; width: 50%;">
                                                                        <img style="margin: 0 auto; height: 100%;" src="Images/<?php echo($teamBPasser); ?>.png">
                                                                    </span>
                                                                </a>
                                                                
                                                                    <ul class="dd">
                                                                        <li><a class="fly" href="#">ACC</a>
                                                                            <ul>
                                                                                
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Boston College</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Clemson</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Duke</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Florida St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Georgia Tech</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Louisville</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Miami (FL)</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">North Carolina</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">NC State</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Pittsburgh</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Syracuse</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Virginia</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Virginia Tech</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Wake Forest</button></a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a class="fly" href="#">Big 10</a>
                                                                            <ul>
                                                                                
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Illinois</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Indiana</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Iowa</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Maryland</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Michigan</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Michigan St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Minnesota</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Nebraska</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Northwestern</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Ohio St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Penn St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Purdue</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Rutgers</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Wisconsin</button></a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a class="fly" href="#">Big 12</a>
                                                                            <ul>
                                                                                
                                                                                
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Baylor</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Iowa St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Kansas</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Kansas St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Oklahoma</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Oklahoma St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">TCU</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Texas</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Texas Tech</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">West Virginia</button></a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a class="fly" href="#">Pac 12</a>
                                                                            <ul>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Arizona</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Arizona St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">California</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Colorado</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Oregon</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Oregon St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">USC</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Stanford</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">UCLA</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Utah</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Washington</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Washington St.</button></a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a class="fly" href="#">SEC</a>
                                                                            <ul>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Alabama</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Arkansas</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Auburn</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Florida</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Georgia</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Kentucky</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">LSU</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Ole Miss</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Mississippi St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Missouri</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">South Carolina</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Tennessee</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Texas A M</button></a></li>
                                                                                <li><a><button onclick="changeTeamBPasser(this.innerHTML)">Vanderbilt</button></a></li>
                                                                            </ul>
                                                                        </li>
                                                                                        
                                                                    </ul>
                                                            </li>
                                                            
                                                        </ul>
                                                    
                                                    
                                                  
                                                  
                                                  
                                                </div>
                                                
                                                <div class="substitution"><span><strong>Current Rushing Offense</strong></span></div>
                                                <div class="panel" id="rbSub">
                                                    
                                                    
                                                        <input type="hidden" name="teamARunner" value="<?php echo($teamARunner) ?>" id="teamARunner" />
                                                        <ul id="nav">
                                                            
                                                            
                                                            <li style=" width: 50%; min-width: 70px; float: left; height: 40px;">
                                                                <a style="  font-size:1.5em; height: 100%; text-align: center; padding-top: 5px;" class="fly" href="#"
                                                                    >
                                                                    <span style="float: left; width: 50%;">
                                                                        <img style="margin: 0 auto; height: 100%;" src="Images/<?php echo($teamARunner); ?>.png">
                                                                    </span>
                                                                    <span id="teamA" style="text-align: left; float: left; padding-top: 5px ; width: 50%;"><?php echo($teamARunner); ?></span></a>
                                                                
                                                                <ul class="dd">
                                                                    <li><a class="fly" href="#">ACC</a>
                                                                        <ul>
                                                                            
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Boston College</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Clemson</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Duke</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Florida St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Georgia Tech</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Louisville</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Miami (FL)</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">North Carolina</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">NC State</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Pittsburgh</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Syracuse</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Virginia</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Virginia Tech</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Wake Forest</button></a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a class="fly" href="#">Big 10</a>
                                                                        <ul>
                                                                            
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Illinois</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Indiana</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Iowa</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Maryland</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Michigan</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Michigan St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Minnesota</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Nebraska</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Northwestern</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Ohio St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Penn St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Purdue</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Rutgers</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Wisconsin</button></a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a class="fly" href="#">Big 12</a>
                                                                        <ul>
                                                                            
                                                                            
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Baylor</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Iowa St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Kansas</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Kansas St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Oklahoma</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Oklahoma St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">TCU</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Texas</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Texas Tech</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">West Virginia</button></a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a class="fly" href="#">Pac 12</a>
                                                                        <ul>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Arizona</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Arizona St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">California</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Colorado</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Oregon</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Oregon St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">USC</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Stanford</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">UCLA</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Utah</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Washington</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Washington St.</button></a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a class="fly" href="#">SEC</a>
                                                                        <ul>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Alabama</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Arkansas</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Auburn</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Florida</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Georgia</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Kentucky</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">LSU</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Ole Miss</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Mississippi St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Missouri</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">South Carolina</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Tennessee</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Texas A M</button></a></li>
                                                                            <li><a><button onclick="changeTeamARunner(this.innerHTML)">Vanderbilt</button></a></li>
                                                                        </ul>
                                                                    </li>
                                                                                    
                                                                </ul>
                                                            </li>
                                                                                                
                                                                                                
                                                            <li style="width: 50%; min-width: 70px; float: right; height: 40px;">
                                                                <!-- Hidden Input for Form-->
                                                                <input type="hidden" name="teamBRunner" value="<?php echo($teamBRunner); ?>" id="teamBRunner"/>
                                                                
                                                                <!-- Team B Button-->
                                                                <a style="font-size: 1.5em; height: 100%; text-align: center; padding-top: 5px;" class="fly" href="#">
                                                                    <span style="float: left; padding-top: 5px; display: inline-block; width: 50%; text-align: right; "><?php echo($teamBRunner); ?></span>
                                                                    <span style="float: left; display: inline-block; width: 50%;"><img style="margin: 0 auto; height: 100%;" src="Images/<?php echo($teamBRunner); ?>.png"></span>
                                                                </a>
                                                                
                                                                    <ul class="dd">
                                                                        <li><a class="fly" href="#">ACC</a>
                                                                            <ul>
                                                                                
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Boston College</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Clemson</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Duke</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Florida St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Georgia Tech</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Louisville</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Miami (FL)</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">North Carolina</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">NC State</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Pittsburgh</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Syracuse</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Virginia</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Virginia Tech</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Wake Forest</button></a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a class="fly" href="#">Big 10</a>
                                                                            <ul>
                                                                                
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Illinois</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Indiana</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Iowa</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Maryland</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Michigan</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Michigan St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Minnesota</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Nebraska</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Northwestern</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Ohio St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Penn St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Purdue</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Rutgers</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Wisconsin</button></a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a class="fly" href="#">Big 12</a>
                                                                            <ul>
                                                                                
                                                                                
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Baylor</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Iowa St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Kansas</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Kansas St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Oklahoma</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Oklahoma St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">TCU</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Texas</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Texas Tech</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">West Virginia</button></a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a class="fly" href="#">Pac 12</a>
                                                                            <ul>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Arizona</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Arizona St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">California</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Colorado</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Oregon</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Oregon St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">USC</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Stanford</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">UCLA</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Utah</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Washington</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Washington St.</button></a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a class="fly" href="#">SEC</a>
                                                                            <ul>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Alabama</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Arkansas</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Auburn</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Florida</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Georgia</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Kentucky</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">LSU</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Ole Miss</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Mississippi St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Missouri</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">South Carolina</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Tennessee</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Texas A M</button></a></li>
                                                                                <li><a><button onclick="changeTeamBRunner(this.innerHTML)">Vanderbilt</button></a></li>
                                                                            </ul>
                                                                        </li>
                                                                                        
                                                                    </ul>
                                                            </li>
                                                            
                                                        </ul>
                                                    
                                                  
                                                </div>
                                                
                                                <div class="substitution"><span><strong>Current Defense</strong></span></div>
                                                <div class="panel" id="defenseSub">
                                                  
                                                    
                                                        <input type="hidden" name="teamADefense" value="<?php echo($teamADefense) ?>" id="teamADefense" />
                                                        <ul id="nav">
                                                            
                                                            
                                                            <li style=" width: 50%; min-width: 70px; float: left; height: 40px;">
                                                                <a style="  font-size:1.5em; height: 100%; text-align: center; padding-top: 5px;" class="fly" href="#"
                                                                    >
                                                                    <span style="float: left; width: 50%;">
                                                                        <img style="margin: 0 auto; height: 100%;" src="Images/<?php echo($teamADefense); ?>.png"></span>
                                                                    <span id="teamA" style="text-align: left; float: left; padding-top: 5px; width: 50%;"><?php echo($teamADefense); ?></span></a>
                                                                
                                                                <ul class="dd">
                                                                    <li><a class="fly" href="#">ACC</a>
                                                                        <ul>
                                                                            
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Boston College</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Clemson</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Duke</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Florida St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Georgia Tech</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Louisville</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Miami (FL)</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">North Carolina</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">NC State</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Pittsburgh</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Syracuse</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Virginia</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Virginia Tech</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Wake Forest</button></a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a class="fly" href="#">Big 10</a>
                                                                        <ul>
                                                                            
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Illinois</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Indiana</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Iowa</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Maryland</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Michigan</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Michigan St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Minnesota</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Nebraska</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Northwestern</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Ohio St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Penn St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Purdue</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Rutgers</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Wisconsin</button></a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a class="fly" href="#">Big 12</a>
                                                                        <ul>
                                                                            
                                                                            
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Baylor</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Iowa St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Kansas</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Kansas St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Oklahoma</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Oklahoma St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">TCU</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Texas</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Texas Tech</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">West Virginia</button></a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a class="fly" href="#">Pac 12</a>
                                                                        <ul>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Arizona</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Arizona St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">California</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Colorado</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Oregon</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Oregon St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">USC</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Stanford</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">UCLA</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Utah</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Washington</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Washington St.</button></a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a class="fly" href="#">SEC</a>
                                                                        <ul>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Alabama</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Arkansas</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Auburn</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Florida</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Georgia</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Kentucky</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">LSU</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Ole Miss</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Mississippi St.</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Missouri</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">South Carolina</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Tennessee</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Texas A M</button></a></li>
                                                                            <li><a><button onclick="changeTeamADefense(this.innerHTML)">Vanderbilt</button></a></li>
                                                                        </ul>
                                                                    </li>
                                                                                    
                                                                </ul>
                                                            </li>
                                                                                                
                                                                                                
                                                            <li style="width: 50%; min-width: 70px; float: right; height: 40px;">
                                                                <!-- Hidden Input for Form-->
                                                                <input type="hidden" name="teamBDefense" value="<?php echo($teamBDefense); ?>" id="teamBDefense"/>
                                                                
                                                                <!-- Team B Defense Button-->
                                                                <a style="font-size: 1.5em; height: 100%; text-align: center; padding-top: 5px;" class="fly" href="#">
                                                                    <span style="float: left; padding-top: 5px; display: inline-block; width: 50%; text-align: right; "><?php echo($teamBDefense); ?></span>
                                                                    <span style="float: left; display: inline-block; width: 50%;">
                                                                        <img style="margin: 0 auto; height: 100%; height: 100%;" src="Images/<?php echo($teamBDefense); ?>.png">
                                                                    </span>
                                                                </a>
                                                                
                                                                    <ul class="dd">
                                                                        <li><a class="fly" href="#">ACC</a>
                                                                            <ul>
                                                                                
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Boston College</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Clemson</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Duke</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Florida St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Georgia Tech</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Louisville</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Miami (FL)</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">North Carolina</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">NC State</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Pittsburgh</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Syracuse</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Virginia</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Virginia Tech</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Wake Forest</button></a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a class="fly" href="#">Big 10</a>
                                                                            <ul>
                                                                                
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Illinois</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Indiana</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Iowa</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Maryland</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Michigan</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Michigan St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Minnesota</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Nebraska</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Northwestern</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Ohio St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Penn St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Purdue</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Rutgers</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Wisconsin</button></a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a class="fly" href="#">Big 12</a>
                                                                            <ul>
                                                                                
                                                                                
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Baylor</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Iowa St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Kansas</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Kansas St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Oklahoma</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Oklahoma St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">TCU</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Texas</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Texas Tech</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">West Virginia</button></a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a class="fly" href="#">Pac 12</a>
                                                                            <ul>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Arizona</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Arizona St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">California</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Colorado</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Oregon</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Oregon St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">USC</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Stanford</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">UCLA</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Utah</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Washington</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Washington St.</button></a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a class="fly" href="#">SEC</a>
                                                                            <ul>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Alabama</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Arkansas</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Auburn</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Florida</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Georgia</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Kentucky</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">LSU</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Ole Miss</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Mississippi St.</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Missouri</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">South Carolina</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Tennessee</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Texas A M</button></a></li>
                                                                                <li><a><button onclick="changeTeamBDefense(this.innerHTML)">Vanderbilt</button></a></li>
                                                                            </ul>
                                                                        </li>
                                                                                        
                                                                    </ul>
                                                            </li>
                                                            
                                                        </ul>
                                                    
                                                  
                                                </div>    
                                                
                                                
                                              
                                            </div>
                                            
                                        </form>    
                                        <!--Substitute Player accordian menu end -->    
                                    </div>
                                    <!-- Substitute Player menu end-->
                                    
                                    
                                </div>
                                
                            </td>
                        </tr>
                        <!-- middle column end-->
                        
                        
                    </table>
                    
                <!---</div>    
                 End of Table for Scoreboard ----->
                
                
                
                <!-- Team B Twitter -->
                <div id="teamBTwitter" style="-webkit-transition: all 2s; transition: opacity 2s; opacity: 0; width: 18%; float: left; margin: 1% 1% 1% 1%; box-shadow: 0px 16px 16px 0px rgba(0,0,0,0.8); z-index: 2;">
                        <a class="twitter-timeline" data-height="600px" data-width="100%" data-theme="dark" href="https://twitter.com/<?php echo($teamBTwitter);  ?>?ref_src=twsrc%5Etfw">Tweets by <?php echo($teamBTwitter); ?></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <!-- Team B Twitter -->
             
            
        
            <!-- Bottom "Please Scroll Bar" -->
            <div id="pleaseScroll">
                <div style="width: 100%; font-size: 1.15em; height: 30px; padding-top: 5px;">
                    <p style="margin: 0 auto; width: 100%; display: inline-block;">Scroll for <strong> FootballSTEPs.com Top 10 </strong>Teams</p>
                </div>
            </div>
            <!-- Bottom "Please scroll bar" end -->
            
            
            
            <!-- Table for Top Conferences -->
            <div id="topConference" style="margin: 0 auto; z-index: 2; display: block; width: 60%; margin-top: 15px;">
                
                
                <img  src="Images/fb_topconference.png" style="width: 100%; opacity: .90;" />
                
                
                <img src="Images/topConferenceTable.png" style="width: 100%; opacity: .95; box-shadow: 0px 8px 16px 0px rgba(0,0,0,.98);%;" />
            </div>
            <!-- Table for Top Conferences -->

            
            
            <!-- Table for Top 50 teams -->
            <div id="topTeamsDiv" style="margin: 0 auto; z-index: 2; display: block; width: 60%; margin-top: 15px;">
                
                
                <!-- Top 25 Image Header -->
                    <img src="Images/fb_top10.png" style=" width: 100%; opacity: .90;" />
                <!--Top 25 Image Header -->
                
                
                <!-- Top 50 table -->
                <table id="topTeams" style="width: 100%; margin: 0 auto; background-color: white; opacity: .95; box-shadow: 0px 8px 16px 0px rgba(0,0,0,.98); z-index: 2; text-align: center; ">
                    <tr><th colspan="2"> Power 5 Rank</th><th>Teams</th><th >Wins vs. Power5 </th></tr>
                    
                    <tr style="background-color: rgb(225,225,225); text-align: center;" ><td>1</td><td><img src="Images/Alabama.png"></td><td>Alabama </td><td>64</td></tr>
                    
                    <tr style="text-align: center;"><td>2</td><td><img src="Images/Ohio St..png"></td><td>Ohio St. </td><td>63</td></tr>
                    
                    <tr style="background-color: rgb(225,225,225); text-align: center;" ><td>3</td><td><img src="Images/Georgia.png"></td><td>Georgia </td><td>62</td></tr>
                
                    <tr style="text-align: center;"><td>4</td><td><img src="Images/Oklahoma St..png"></td><td>Oklahoma St. </td><td>61</td></tr>
                 
                    <tr style="background-color: rgb(225,225,225); text-align: center;" ><td>5</td><td><img src="Images/Penn St..png"></td><td>Penn St. </td><td>61</td></tr>
                 
                    <tr style="text-align: center;"><td>6</td><td><img src="Images/Washington.png"></td><td>Washington </td><td>59</td></tr>
                 
                    <tr style="background-color: rgb(225,225,225); text-align: center;" ><td>7</td><td><img src="Images/Wisconsin.png"></td><td>Wisconsin </td><td>58</td></tr>
                 
                    <tr style="text-align: center;"><td>8</td><td><img src="Images/Auburn.png"></td><td>Auburn </td><td>57</td></tr>
                 
                    <tr style="background-color: rgb(225,225,225); text-align: center;" ><td>9</td><td><img src="Images/Oklahoma.png"></td><td>Oklahoma </td><td>56</td></tr>
                 
                    <tr style="text-align: center;"><td>10</td><td><img src="Images/Clemson.png"></td><td>Clemson </td><td>55</td></tr>
                  
                </table>
                <!-- Top 25 table -->
                
            </div>
            <!-- Table for Top 50 teams -->
        
        
        
            <!-- --------------------Tab Bar Menu-------------------->
            <div class="tab" id="tab">
                <!-- tab buttons begin-->
                
                <span>
                    <!-- column1 begin-->
                    <button style = "width: 50%;" class="tablinks" onclick="openTray(event, 'schoolA');" id="buttonSchoolA">
                        <script>document.write(teamA);</script>
                    </button>
                    <!-- button1 end-->
                    
                    
                    <!-- button2 begin-->
                    <button style = "width: 50%;" class="tablinks" onclick="openTray(event, 'schoolB');" id="buttonSchoolB">
                        <script>document.write(teamB);</script>
                    </button>
                    <!-- butotn2 end-->
                </span>    
                <!-- tab buttons endn-->
                
                
                
                <!-- tab content-->
                    
                    <!-- tab1 content-->
                    <div id="schoolA" class="tabcontent" style="margin-top:45px">
                        <h3> School A</h3>
                        
                        <p>School a News</p>
                        
                    </div>
                    <!-- tab content end-->
                    
                    
                    <!-- tab2 content begin-->
                    <div id="schoolB" class="tabcontent" style="margin-top:45px">
                      <h3>SchoolB</h3>
                      <p>School News</p>
                      
                      
                    </div>
                    <!-- tab2 content end-->
                    
            </div>
            <!--------------------Tab Bar Menu End---------------------->

        </div>
        <!-- rows for body end-->
        
    </body>
    
    
    
</html>