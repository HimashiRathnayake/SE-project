
<link rel="stylesheet" type="text/css" href="../3rdParty/css3/report.css">
    <div class="reportContainer" >
        
    

          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
        

          <br>
          <br>
          <br>
          
          
        
       
        
          <?php if(($_SESSION["accessLevel"]=="Public") or ($_SESSION["accessLevel"]=="Police") ){ ?>
                
        <!-- most wanted people details -->
        <div class='mostWantedContainer '>
            <br><h2>Most Wanted People</h2>
          <?php  while ($mw = $stmt2->fetch()) { 
               
               ?>  
            <br>
            <div class="card mb-3" style>
                <div class="row no-gutters">
                    <div class="col-md-4">
                    <img src="../3rdParty/img/header-bg.jpg" style="height: 100%;" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Place Of Last Seen:<?php echo $mw["placeOfLastSeen"]; ?></h5>
                        <h5 class="card-title">Date Of Last Seen:<?php echo $mw["dateOfLastSeen"]; ?></h5>
                        <p class="card-text">Description: <?php echo $mw["descriptionOfMostWanted"]; ?></p>
                        <p class="card-text"><a href="#">Inform</a></p>
                    </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
          <?php }?>    
    <?php if($_SESSION["accessLevel"]=="Public"){ ?>
        <!-- Missing Person Details -->
        <div class='mostWantedContainer'>
            <br><h2>Missing People</h2>
            
            <?php while ($mp = $stmt1->fetch()) { 
                    ?> 
            <br>
            <div class="card mb-3" >
                <div class="row no-gutters">
                    <div class="col-md-4">
                    <img src="../3rdParty/img/header-bg.jpg" style="height: 100%;" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Place Of Last Seen:<?php echo $mp["placeOfLastSeen"]; ?></h5>
                        <h5 class="card-title">Date Of Last Seen:<?php echo $mp["dateOfLastSeen"]; ?></h5>
                        <p class="card-text">Description: <?php echo $mp["descriptionOfMissingPerson"]; ?></p>
                        <p class="card-text"><a href="#">Inform</a></p>
                    </div>
                    </div>
                </div>
            </div>
            <?php
    }?>
        </div>
        <?php
    }?>
        <?php if($_SESSION["accessLevel"]=="PoliceStation"){ ?>
        <!-- Complain Details -->
        <div class='mostWantedContainer'>
            <br><h2>Complains</h2>
            
              <?php while ($c = $stmt3->fetch()) { 
                    ?>   
            <br>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                    <img src="../3rdParty/img/header-bg.jpg" style="height: 100%;" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Place Of Incident:<?php echo $c["placeOfIncident"]; ?></h5>
                        <h5 class="card-title">Date Of Incident:<?php echo $c["dateOfIncident"]; ?></h5>
                        <p class="card-text">Description: <?php echo $c["incidentDescription"]; ?></p>
                        <p class="card-text"><a href="#">File A Case</a></p>
                    </div>
                    </div>
                </div>
            </div>
            <?php
    }?>
        </div>
        <?php
    }?>
    </div>
</body>

