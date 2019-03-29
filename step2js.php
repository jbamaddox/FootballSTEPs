    
<script>
    var favoriteTeam = "Purdue";
    var teamA = "<?php echo($teamA); ?>";
    var teamB = "<?php echo($teamB); ?>";
    
    
    var teamAPasser = "<?php echo($teamAPasser); ?>";
    var teamBPasser = "<?php echo($teamBPasser); ?>";
    
    var teamARusher = "<?php echo($teamARunner); ?>";
    var teamBRusher = "<?php echo($teamBRunner); ?>";
    
    var teamADefense = "<?php echo($teamADefense); ?>";
    var teamBDefense = "<?php echo($teamBDefense); ?>";
    //var teamAScore = "";
    //var teamBScore = "";
    var teamAPassingYards = <?php echo(round($calculatedPassYPG_A)); ?>;
    var teamBPassingYards = <?php echo(round($calculatedPassYPG_B)); ?>;
    
    var teamARushingYards = <?php echo(round($calculatedRushYPG_A)); ?>;
    var teamBRushingYards = <?php echo(round($calculatedRushYPG_B)); ?>;
    
    var teamAPassingTD = <?php echo(round($calculatedPassTDPG_A)); ?>;
    var teamBPassingTD = <?php echo(round($calculatedPassTDPG_B)); ?>;
    
    var teamARushingTD = <?php echo(round($calculatedRushTDPG_A)); ?>;
    var teamBRushingTD = <?php echo(round($calculatedRushTDPG_B)); ?>;
    
    var teamATotalYards = <?php echo(round($calculatedPassYPG_A + $calculatedRushYPG_A)); ?>;
    var teamBTotalYards = <?php echo(round($calculatedPassYPG_B + $calculatedRushYPG_B)); ?>;
    
    var teamAColor = "<?php echo($teamAColor); ?>";
    var teamBColor = "<?php echo($teamBColor); ?>";
    
    var welcome8 = <?php echo($welcome8); ?>;
    
    var winWidth = window.innerWidth;
    
    //---------------------Side Navigation-------------------//
    function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
        
    }
    
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    //----------------------Side Navigation End----------------//
    
    
    
    //When window loads
    window.onload = function(){
        //Click tab at bottom
        document.getElementById("buttonSchoolA").click();
        
        //Size columns correctly
        window.onload = resizeFirstRow();
        
        //Display Twitter
        
            document.getElementById("teamATwitter").style.opacity = 1;
            document.getElementById("teamBTwitter").style.opacity = 1;
        

        
        
        //update total yards bar
        var tybar = 0;
        
        if (teamATotalYards >= teamBTotalYards){
            document.getElementById('totalYardsBar').style.float = "left";
            tybar = (teamATotalYards/(teamATotalYards + teamBTotalYards) * 100 );
            document.getElementById('totalYardsBar').style.width = tybar + "%";
            document.getElementById('totalYardsBar').style.backgroundColor = teamAColor;
        }else{
            document.getElementById('totalYardsBar').style.float = "right";
            tybar = (teamBTotalYards/(teamATotalYards + teamBTotalYards) * 100 );
            document.getElementById('totalYardsBar').style.width = tybar + "%";
            document.getElementById('totalYardsBar').style.backgroundColor = teamBColor;
        }
        
        
        //update passing bar
        var pybar = 0;
        
        if (parseInt(teamAPassingYards, 10) >= parseInt(teamBPassingYards, 10)){
            document.getElementById('passingYardsBar').style.float = "left";
            pybar = (parseInt(teamAPassingYards, 10)/(parseInt(teamAPassingYards, 10) + parseInt(teamBPassingYards, 10)) * 100 );
            document.getElementById('passingYardsBar').style.width = pybar + "%";
            document.getElementById('passingYardsBar').style.backgroundColor = teamAColor;
        }else{
            document.getElementById('passingYardsBar').style.float = "right";
            pybar = (  parseInt(teamBPassingYards, 10)  /  (parseInt(teamAPassingYards, 10) + parseInt(teamBPassingYards, 10)) * 100 );
            document.getElementById('passingYardsBar').style.width = pybar + "%";
            document.getElementById('passingYardsBar').style.backgroundColor = teamBColor;
        }
        
        
        //update rushing bar
        
        var rybar = 0;
        
        if (parseInt(teamARushingYards, 10) >= parseInt(teamBRushingYards, 10)){
            document.getElementById('rushingYardsBar').style.float = "left";
            rybar = (parseInt(teamARushingYards, 10)/(parseInt(teamARushingYards, 10) + parseInt(teamBRushingYards, 10)) * 100 );
            document.getElementById('rushingYardsBar').style.width = rybar + "%";
            document.getElementById('rushingYardsBar').style.backgroundColor = teamAColor;
        }else{
            document.getElementById('rushingYardsBar').style.float = "right";
            rybar = (  parseInt(teamBRushingYards, 10)  /  (parseInt(teamARushingYards, 10) + parseInt(teamBRushingYards, 10)) * 100 );
            document.getElementById('rushingYardsBar').style.width = rybar + "%";
            document.getElementById('rushingYardsBar').style.backgroundColor = teamBColor;
        }
        
        
        if (welcome8 == 8){
            displayWelcome();
        }
        
        /**/
        if (winWidth < 768){
            document.getElementById("scoreboardDiv").style.width = "100%";
        }else{
            document.getElementById("scoreboardDiv").style.width = "58%";
        }
        
    };
    
    
    
    window.onscroll = function() {
        //---------------Score Menu Switch----------------------//
        var chooseTeam = document.getElementById("chooseTeam");
        var scoreBoardBar = document.getElementById("ScoreBoardBar");
        
        var sticky = chooseTeam.offsetTop + 150;
    
        if (window.pageYOffset >= sticky) {
          scoreBoardBar.classList.add("sticky");  //sticky css class added
          document.getElementById("ScoreBoardBar_ul").style.display = "block";    //scoreboard bar appears
        } else {
          scoreBoardBar.classList.remove("sticky");   //sticky css class romoved
          document.getElementById("ScoreBoardBar_ul").style.display = "none";    //scoreboard bar dissapears
        }
        //-----------------Score Menu Switch End------------------//
        
        //----------------Title Bar -----------------//
        if(window.pageYOffset >0){
            document.getElementById("titleBar").style.top = "-25px";
            //show small logo
            document.getElementById("titleBarLogo").innerHTML = '<img  src="Images/fb_gold2.png" style="height: 35px; padding-top: 25px; opacity: 1;"><img  src="Images/fbquote1.png" style="height: 50px; opacity: 0;">';
            
        }else{
            document.getElementById("titleBarLogo").innerHTML = '<img  src="Images/fbquote1.png" style="height: 50px; opacity: 1;"><img  src="Images/fb_gold2.png" style="height: 35px; padding-top: 20; opacity: 0;">';
            document.getElementById("titleBar").style.top = window.pageYOffset;
        }
        //----------------Title Bar-------------------//
        
        
        //-------Parallax background scrolling----------//
        /*
        var tippyTop = window.pageYOffset;
        var newYPos = 0;
        newYPos = newYPos - tippyTop/ .75;
        document.body.style.backgroundPosition = "0px " + newYPos + "px";
        */
        //-------Parallax background scrolling----------//
        
        
        
        //----------Please scroll bar----------//
        var topTeams = document.getElementById("topTeams");
        
        
        
        if ((topTeams.offsetTop - 100) - ((window.pageYOffset) + window.innerHeight) < 0) {
            
            document.getElementById("pleaseScroll").style.opacity = "0";
        }else{
            document.getElementById("pleaseScroll").style.opacity = "1";
        }
        //----------Please scroll bar-----------//
        
        
        
        
    };
    
    
    
    //------------------Stats/News/Twitter??---------------------//
    
    
    
    function openTray(evt, schoolName) {
        // Declare all variables
        var i, tabcontent, tablinks;
    
        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
    
        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
    
        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(schoolName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    
    //------------------Stats/News/Twitter?? end -------------------//
    
    
    
    // Resizing the Columns
    
    
    
    function resizeFirstRow(){
        /*
        if (winWidth < 768){
            document.getElementById("scoreboardDiv").style.width = "100%";
        }else{
            document.getElementById("scoreboardDiv").style.width = "58%";
        }
        */
        if (winWidth < 768){
            document.getElementById("scoreboardTable").style.float = "none";
        }else{
            document.getElementById("scoreboardTable").style.float = "left";
        }
        
    }
    
    //Resizing the Columns End
    
    
    
    //---------------------Substitute Navigation-------------------//
    function openSubNav() {
        document.getElementById("mySubNav").style.width = "100%";
        
    }
    
    function closeSubNav() {
        document.getElementById("mySubNav").style.width = "0";
    }
    //----------------------Substitute Navigation End----------------//
    
    
    
    
    //Team A Positions
    function changeTeamAValue(newTeam_A){
        document.getElementById('teamAValue').value = newTeam_A;
    }
    
    function changeTeamAPasser(newTeam_A){
        document.getElementById('teamAPasser').value = newTeam_A;
    }
    
    function changeTeamARunner(newTeam_A){
        document.getElementById('teamARunner').value = newTeam_A;
    }
    
    function changeTeamADefense(newTeam_A){
        document.getElementById('teamADefense').value = newTeam_A;
    }
    
    
    //Team B Positions
    function changeTeamBValue(newTeam_B){
        document.getElementById('teamBValue').value = newTeam_B;
    }
    
    function changeTeamBPasser(newTeam_B){
        document.getElementById('teamBPasser').value = newTeam_B;
    }
    
    function changeTeamBRunner(newTeam_B){
        document.getElementById('teamBRunner').value = newTeam_B;
    }
    
    function changeTeamBDefense(newTeam_B){
        document.getElementById('teamBDefense').value = newTeam_B;
    }
    
    
    
    
    function changeFavoriteTeam(newFavoriteTeam){
        document.getElementById("favoriteTeam").innerHTML = newFavoriteTeam;
        document.getElementById("favoriteTeamButton").innerHTML = newFavoriteTeam;
        favoriteTeam = newFavoriteTeam;
        
    }
    
    
    function closeWelcome(){
        document.getElementById("welcome").style.height = "0%";
        document.getElementById("welcome").style.display = "none";
    }
    
    
    
    function displayWelcome(){
        document.getElementById("welcome").style.height = "100%";
        document.getElementById("welcome").style.display = "block";
    }
    
    
</script>