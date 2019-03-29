<?php
    
    
    /**/
    
        
    $welcome8 = 0;
    
    if(!isset($_REQUEST['teamA'])){
        $teamA = "Purdue";
        $welcome8++;
    }else{
        $teamA = $_REQUEST['teamA'];
    }
    
    if(!isset($_REQUEST['teamAPasser'])){
        $teamAPasser = $teamA;
        $welcome8++;
    }else{
        $teamAPasser = $_REQUEST['teamAPasser'];
    }
    
    if(!isset($_REQUEST['teamARunner'])){
        $teamARunner = $teamA;
        $welcome8++;
    }else{
        $teamARunner = $_REQUEST['teamARunner'];
    }
    
    if(!isset($_REQUEST['teamADefense'])){
        $teamADefense = $teamA;
        $welcome8++;
    }else{
        $teamADefense = $_REQUEST['teamADefense'];
    }
    
    
    
    if(!isset($_REQUEST['teamB'])){
        $teamB = "Indiana";
        $welcome8++;
    }else{
        $teamB = $_REQUEST['teamB'];
    }
    
    if(!isset($_REQUEST['teamBPasser'])){
        $teamBPasser = $teamB;
        $welcome8++;
    }else{
        $teamBPasser = $_REQUEST['teamBPasser'];
    }
    
    if(!isset($_REQUEST['teamBRunner'])){
        $teamBRunner = $teamB;
        $welcome8++;
    }else{
        $teamBRunner = $_REQUEST['teamBRunner'];
    }
    
    if(!isset($_REQUEST['teamBDefense'])){
        $teamBDefense = $teamB;
         $welcome8++;
    }else{
        $teamBDefense = $_REQUEST['teamBDefense'];
    }
    
    
    
    
    
    //Passing
        include("db_connect.php");
        //TeamA
        
        $POTeamASql = "SELECT * FROM passing_offense WHERE TEAM LIKE '" . $teamAPasser . "'";
        //echo $POTeamASql;
        $result = $connection ->query($POTeamASql);
        $POTeamA = $result ->fetch_assoc();
        $passYPG_A = $POTeamA['YPG'];
        if ($POTeamA['PASS TD'] > 0){
            $passTDPG_A = $POTeamA['PASS TD'] / $POTeamA['G'];
        }else{
            $passTDPG_A = 0.0;
        }
        
        
        $PDTeamASql = "SELECT * FROM passing_defense WHERE TEAM LIKE '" . $teamADefense . "'";
        $result = $connection ->query($PDTeamASql);
        $PDTeamA = $result ->fetch_assoc();
        $passYPGAllowed_A = $PDTeamA['YPG'];
        if ($PDTeamA['TDS'] > 0){
            $passTDPGAllowed_A = $PDTeamA['TDS'] / $PDTeamA['G'];
        }else{
            $passTDPGAllowed_A = 0.0;
        }
        //End of Team A
        
        //TeamB
        $POTeamBSql = "SELECT * FROM passing_offense WHERE TEAM LIKE '" . $teamBPasser . "'";
        $result = $connection ->query($POTeamBSql);
        $POTeamB = $result ->fetch_assoc();
        $passYPG_B = $POTeamB['YPG'];
        if($POTeamB['PASS TD'] > 0){
            $passTDPG_B = $POTeamB['PASS TD'] / $POTeamB['G'];
        }else{
            $passTDPG_B = 0.0;
        }
        
        $PDTeamBSql = "SELECT * FROM passing_defense WHERE TEAM LIKE '" . $teamBDefense . "'";
        $result = $connection ->query($PDTeamBSql);
        $PDTeamB = $result ->fetch_assoc();
        $passYPGAllowed_B = $PDTeamB['YPG'];
        if($PDTeamB['TDS'] > 0){
            $passTDPGAllowed_B = $PDTeamB['TDS'] / $PDTeamB['G'];
        }else{
            $passTDPGAllowed_B = 0;
        }
        
        
        
        //End of TeamB
        
        
        $calculatedPassYPG_A = ($passYPG_A + $passYPGAllowed_B)/2;
        //echo $calculatedPassYPG_A . "<br/>";
        $calculatedPassYPG_B = ($passYPG_A + $passYPGAllowed_A)/2;
        //echo $calculatedPassYPG_B . "<br/>";
        
        $calculatedPassTDPYD_A = (   ($passTDPG_A/$passYPG_A) + ($passTDPGAllowed_B/$passYPGAllowed_B)  ) /2;
        $calculatedPassTDPYD_B = (   ($passTDPG_B/$passYPG_B) + ($passTDPGAllowed_A/$passYPGAllowed_A)  ) /2;
        
        $calculatedPassTDPG_A = $calculatedPassTDPYD_A * $calculatedPassYPG_A;
        $calculatedPassTDPG_B = $calculatedPassTDPYD_B * $calculatedPassYPG_B;
        
        $passingPoints_A = ($calculatedPassTDPG_A) *7;
        //echo $passingPoints_A . "<br/>";
        
        $passingPoints_B = ($calculatedPassTDPG_B) *7;
        //echo $passingPoints_B . "<br/>";
        
    //End of Passing Offense
    
    
    
    //Rushing
        //TeamA
        $ROTeamASql = "SELECT * FROM rushing_offense WHERE TEAM LIKE '" . $teamARunner . "'";
        $result = $connection ->query($ROTeamASql);
        $ROTeamA = $result ->fetch_assoc();
        $rushYPG_A = $ROTeamA['YPG'];
        if($ROTeamA['RUSH TD'] > 0){
            $rushTDPG_A = $ROTeamA['RUSH TD'] / $ROTeamA['G'];
        }else{
            $rushTDPG_A = 0.0;
        }
        
        
        
        $RDTeamASql = "SELECT * FROM rushing_defense WHERE TEAM LIKE '" . $teamADefense . "'";
        $result = $connection ->query($RDTeamASql);
        $RDTeamA = $result ->fetch_assoc();
        $rushYPGAllowed_A = $RDTeamA['YPG'];
        if($RDTeamA['OPP RUSH TDS'] > 0){
            $rushTDPGAllowed_A = $RDTeamA['OPP RUSH TDS'] / $RDTeamA['G'];
        }else{
            $rushTDPGAllowed_A = 0;
        }
        
        //End of Team A
        
        //TeamB
        $ROTeamBSql = "SELECT * FROM rushing_offense WHERE TEAM LIKE '" . $teamBRunner . "'";
        $result = $connection ->query($ROTeamBSql);
        $ROTeamB = $result ->fetch_assoc();
        $rushYPG_B = $ROTeamB['YPG'];
        if($ROTeamB['RUSH TD'] > 0){
            $rushTDPG_B = $ROTeamB['RUSH TD'] / $ROTeamB['G'];
        }else{
            $rushTDPG_B = 0.0;
        }
        
        
        $RDTeamBSql = "SELECT * FROM rushing_defense WHERE TEAM LIKE '" . $teamBDefense . "'";
        $result = $connection ->query($RDTeamBSql);
        $RDTeamB = $result ->fetch_assoc();
        $rushYPGAllowed_B = $RDTeamB['YPG'];
        if($RDTeamB['OPP RUSH TDS'] > 0){
            $rushTDPGAllowed_B = $RDTeamB['OPP RUSH TDS'] / $RDTeamB['G'];
        }else{
            $rushTDPGAllowed_B = 0.0;
        }
        
        //End of TeamB
        
        
        $calculatedRushYPG_A = ($rushYPG_A + $rushYPGAllowed_B)/2;
        //echo $calculatedRushYPG_A . "<br/>";
        $calculatedRushYPG_B = ($rushYPG_A + $rushYPGAllowed_A)/2;
        //echo $calculatedRushYPG_B . "<br/>";
        
        
        
        $calculatedRushTDPYD_A = (   ($rushTDPG_A/$rushYPG_A) + ($rushTDPGAllowed_B/$rushYPGAllowed_B)  ) /2;
        $calculatedRushTDPYD_B = (   ($rushTDPG_B/$rushYPG_B) + ($rushTDPGAllowed_A/$rushYPGAllowed_A)  ) /2;
        
        $calculatedRushTDPG_A = $calculatedRushTDPYD_A * $calculatedRushYPG_A;
        $calculatedRushTDPG_B = $calculatedRushTDPYD_B * $calculatedRushYPG_B;
        
        $rushingPoints_A = ($calculatedRushTDPG_A) *7;
        //echo $passingPoints_A . "<br/>";
        
        $rushingPoints_B = ($calculatedRushTDPG_B) *7;
        //echo $passingPoints_B . "<br/>";
        
    //End of Rushing Offense
    
    
    
    //Scoring Defense
        //Team A
        
         
        $teamADefTDpGSql = "SELECT * FROM defensive_tds WHERE TEAM LIKE '" . $teamADefense . "'";
        $result = $connection ->query($teamADefTDpGSql);
        $DefTDpGr_A = $result ->fetch_assoc();
        if($DefTDpGr_A['TDS'] > 0){
            $DefTDpG_A = $DefTDpGr_A['TDS'] / $DefTDpGr_A['G'];
        }else{
            $DefTDpG_A = 0.0;
        }
        
        $DefPpG_A = $DefTDpG_A * 7;
        
    
        //Team B
        $teamBDefTDpGSql = "SELECT * FROM defensive_tds WHERE TEAM LIKE '" . $teamBDefense . "'";
        $result = $connection ->query($teamBDefTDpGSql);
        $DefTDpGr_B = $result ->fetch_assoc();
        if($DefTDpGr_B['TDS'] > 0){
            $DefTDpG_B = $DefTDpGr_B['TDS'] / $DefTDpGr_B['G'];
        }else{
            $DefTDpG_B = 0.0;
        }
        
        $DefPpG_B = $DefTDpG_B * 7;
      /**/
    
    //Special Teams
    
    
    
        //TeamA
        $teamASTSql = "SELECT * FROM special_teams WHERE TEAM LIKE '" . $teamA . "'";
        $result = $connection ->query($teamASTSql);
        $ST_A = $result ->fetch_assoc();
        if($ST_A['FG'] > 0){
            $fgpg_A = $ST_A['FG'] / $ST_A['G'];
        }else{
            $fgpg_A = 0;
        }
        
        $fgPoints_A = $fgpg_A * 3;
        
        //TeamA
        $teamBSTSql = "SELECT * FROM special_teams WHERE TEAM LIKE '" . $teamB . "'";
        $result = $connection ->query($teamBSTSql);
        $ST_B = $result ->fetch_assoc();
        if($ST_B['FG'] > 0){
            $fgpg_B = $ST_B['FG'] / $ST_B['G'];
        }else{
            $fgpg_B = 0;
        }
        
        $fgPoints_B = $fgpg_B * 3;
        
    //End of Special Teams
    
    //Score!!!
    
        $teamAPointsTotal = $passingPoints_A + $rushingPoints_A + $fgPoints_A + $DefPpG_A;
        $teamBPointsTotal = $passingPoints_B + $rushingPoints_B + $fgPoints_B + $DefPpG_B;
        //printf("%s: %.1f <br/>", $teamA, $teamAPointsTotal);
        //printf("%s: %.1f", $teamB, $teamBPointsTotal);
        
        $teamAColorSql = "SELECT * FROM colors WHERE Team LIKE '" . $teamA . "'";
        $result = $connection ->query($teamAColorSql);
        $teamAColorAssoc = $result ->fetch_assoc();
        $teamAColor = $teamAColorAssoc['Color'];
        
        $teamBColorSql = "SELECT * FROM colors WHERE Team LIKE '" . $teamB . "'";
        $result = $connection ->query($teamBColorSql);
        $teamBColorAssoc = $result ->fetch_assoc();
        $teamBColor = $teamBColorAssoc['Color'];
        
        //Twitter
        $teamATwitterSql = "SELECT * FROM twitter_accounts WHERE Team LIKE '" . $teamA . "'";
        $result = $connection ->query($teamATwitterSql);
        $teamATwitterAssoc = $result ->fetch_assoc();
        $teamATwitter = $teamATwitterAssoc['Twitter'];
        
        $teamBTwitterSql = "SELECT * FROM twitter_accounts WHERE Team LIKE '" . $teamB . "'";
        $result = $connection ->query($teamBTwitterSql);
        $teamBTwitterAssoc = $result ->fetch_assoc();
        $teamBTwitter = $teamBTwitterAssoc['Twitter'];
        
        
?>