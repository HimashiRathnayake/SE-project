<br>
<br>
<br>
<br>
<br>
<br>

	<div class="container" >    
            
		<div id="signupbox" style=" margin-top:50px"    class="mainbox col-md-12 col-md-offset-0 col-sm-6 col-sm-offset-6" >
			<div class="panel panel-info" style="background-color: #10111d">
				<div class="panel-heading" style="background-color: #9e6f99" >
					<div class="panel-title" style="color:white">Services</div>
				</div>  
				
				
				<div class="list-group">
                <?php 
                foreach ($servicesList as &$service) { 
                    $data=explode("/", $service);
                    ?>
                    <a href="<?php echo SITE_URL_BASE."/".$data[1]."/index"?>" class="list-group-item list-group-item-action "><?php echo $data[0]?></a>
                                            <?php }?>
					
				</div>
				
			</div>
		</div> 
	</div>
    

</body>
  
	<script src="../3rdParty/vendor3/jquery/jquery.min.js"></script>

  
</html>