<!-- Custom styles for this template -->
<?php

if (isset($_SESSION["email"])){?>
<br>
<br>
<br>
<br>
<br>
	<div class="container" >    
            
		<div id="signupbox" style=" margin-top:50px"  class="mainbox col-md-12 col-md-offset-0 col-sm-6 col-sm-offset-6" >
			<div class="panel panel-info" style="background-color: #cab2c7">
				<div class="panel-heading" style="background-color: #9e6f99" >
					<div class="panel-title" style="color:white">Add Complain- Crime Report</div>
				</div>  
				<div class="panel-body" >
					<form method="post" action="<?php echo SITE_URL_BASE."/Complain/addComplain"?>">
						
						<div id="div_id_date" class="form-group required"> 
							<label for="id_date" class="control-label col-md-4  requiredField"> Date of the incident<span class="asteriskField">*</span> </label>
							<div class="controls col-md-8 "> 
								<input class="input-md textinput textInput form-control" id="id_date" name="date" placeholder="date of incident dd/mm/yyyy" style="margin-bottom: 10px" type="text" />
							</div>
						</div> 
						<div id="div_id_postalCode" class="form-group required">
							<label for="id_postalCode" class="control-label col-md-4  requiredField"> Place of incident<span class="asteriskField">*</span> </label>
							<div class="controls col-md-8 ">
								<input class="input-md textinput textInput form-control" id="id_postalCode" name="place" placeholder="province,district,city,place" style="margin-bottom: 10px" type="text" />
							</div> 
						</div>
						
						<div id="div_id_discription" class="form-group required">
							<label for="id_discription" class="control-label col-md-4  requiredField" > Description of the incident<span class="asteriskField">*</span> </label>
							<div class="controls col-md-8 ">
								<textarea  class="input-md textinput textInput form-control" name="description" rows="20" cols="30"  paceholeder="description"></textarea>
							</div>
						</div>
            				
						<div class="form-group">
							<div class="controls col-md-offset-4 col-md-8 ">
								<div id="div_id_terms" class="checkbox required">
									<label for="id_terms" class=" requiredField">
										<input class="input-ms checkboxinput"   id="id_terms" onchange="isChecked(this,'register')" name="terms" style="margin-bottom: 10px" type="checkbox"  />
										<b>I certified that my report is based on true facts
									</label>
								</div> 
							</div>
							
						</div>                                    
						<div class="form-group">
							<input class="btn btn-primary btn-lg btn-block" style="width:200px; margin-left:auto;margin-right:auto"  type="submit" name="create" id="register" value="Submit" disabled>
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
}
else{
	echo "Please Sign In ";
}
	?>
	
