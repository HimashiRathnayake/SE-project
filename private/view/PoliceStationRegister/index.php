<?php


if (isset($_SESSION["email"])) { ?>
<br>
<br>
<br>
<br>
<br>
	<div class="container" >    
            
		<div id="signupbox" style=" margin-top:50px"  class="mainbox col-md-12 col-md-offset-0 col-sm-6 col-sm-offset-6" >
			<div class="panel panel-info" style="background-color: #cab2c7">
				<div class="panel-heading" style="background-color: #9e6f99" >
					<div class="panel-title" style="color:white">Police Station Registration</div>
				</div>  
				<div class="panel-body" >
					<form method="post" action="<?php echo SITE_URL_BASE."/PoliceStationRegister/addNewPoliceStation"?>">
						
						<div id="div_id_date" class="form-group required"> 
							<label for="id_date" class="control-label col-md-4  requiredField"> Police Station Name<span class="asteriskField">*</span> </label>
							<div class="controls col-md-8 "> 
								<input class="input-md textinput textInput form-control"  name="name" placeholder="Enter police station name" required="required" style="margin-bottom: 10px" type="text" />
							</div>
						</div> 
						<div id="div_id_postalCode" class="form-group required">
							<label for="id_postalCode" class="control-label col-md-4  requiredField"> PostalCode<span class="asteriskField">*</span> </label>
							<div class="controls col-md-8 ">
								<input class="input-md textinput textInput form-control"  name="postalcode" placeholder="Enter Police Station PostalCode" required="required" style="margin-bottom: 10px" type="text" />
							</div> 
						</div>
						
						<div id="div_id_email" class="form-group required">
							<label for="id_email" class="control-label col-md-4  requiredField"> E-mail<span class="asteriskField">*</span> </label>
							<div class="controls col-md-8 ">
								<input class="input-md emailinput form-control" id="id_email" name="email" placeholder="Enter Police Station Email" style="margin-bottom: 10px" type="email" />
							</div>     
						</div>
						<div id="div_id_postalCode" class="form-group required"  data-validate=" telephone number is required">
							<label for="id_postalCode" class="control-label col-md-4  requiredField"> Telephone Number<span class="asteriskField">*</span> </label>
							<div class="controls col-md-8 ">
								<input class="input-md textinput textInput form-control"  name="telno" placeholder="Enter Police station Telephone Number" style="margin-bottom: 10px" type="text" />
							</div> 
						</div> 
						<div id="div_id_password" class="form-group required"  data-validate=" password is required">
							<label for="id_password" class="control-label col-md-4  requiredField">Password<span class="asteriskField">*</span> </label>
							<div class="controls col-md-8 ">
								<input class="input-md textinput textInput form-control"  name="password" placeholder="Enter Police station Telephone Number" style="margin-bottom: 10px" type="text" />
							</div> 
						</div>                               
						<div class="form-group">
							<input class="btn btn-primary btn-lg btn-block" style="width:200px; margin-left:auto;margin-right:auto"  type="submit" name="create" id="register" value="Submit" >
						</div>        
                            
                    </form>

                
				</div>
			</div>
		</div> 
	</div>
    

</body>
  
	<script src="../3rdParty/vendor3/jquery/jquery.min.js"></script>
	<script src="../3rdParty/js3/addcomplain.js"></script>
  
</html>

<?php
} else {
    echo "Please Sign In";
}

?>