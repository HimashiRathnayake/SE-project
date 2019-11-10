
<?php require_once("navigation.php")  ?>
<!-- Custom styles for this template -->
<link href="../../../public/3rdParty/css3/agency.min.css" rel="stylesheet">
  
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  
	<div class="container" style="background-color:black">    
            
		<div id="signupbox" style=" margin-top:50px"    class="mainbox col-md-12 col-md-offset-0 col-sm-6 col-sm-offset-6" >
			<div class="panel panel-info" style="background-color: #cab2c7">
				<div class="panel-heading" style="background-color: #9e6f99" >
					<div class="panel-title" style="color:white">Add Complain- Crime Report</div>
				</div>  
				<div class="panel-body" >
					<form method="post" action=".">
						<div id="div_id_reporterName" class="form-group required">
							<label for="id_reporterName" class="control-label col-md-4  requiredField"> Reporter Name<span class="asteriskField">*</span> </label>
							<div class="controls col-md-8 ">
								<input class="input-md  textinput textInput form-control" id="id_reporterName" maxlength="30" name="reporterName" placeholder="Enter your name" style="margin-bottom: 10px" type="text" />
							</div>
						</div>
						<div id="div_id_email" class="form-group required">
							<label for="id_email" class="control-label col-md-4  requiredField"> E-mail<span class="asteriskField">*</span> </label>
							<div class="controls col-md-8 ">
								<input class="input-md emailinput form-control" id="id_email" name="email" placeholder="Your current email address" style="margin-bottom: 10px" type="email" />
							</div>     
						</div>
						<div id="div_id_date" class="form-group required"> 
							<label for="id_date" class="control-label col-md-4  requiredField"> Date of the incident<span class="asteriskField">*</span> </label>
							<div class="controls col-md-8 "> 
								<input class="input-md textinput textInput form-control" id="id_date" name="date" placeholder="date of incident dd/mm/yyyy" style="margin-bottom: 10px" type="text" />
							</div>
						</div> 
						<div id="div_id_postalCode" class="form-group required">
							<label for="id_postalCode" class="control-label col-md-4  requiredField"> Postal Code of City<span class="asteriskField">*</span> </label>
							<div class="controls col-md-8 ">
								<input class="input-md textinput textInput form-control" id="id_postalCode" name="postalcode" placeholder="Postal code of the city" style="margin-bottom: 10px" type="text" />
							</div> 
						</div>
						<div id="div_id_number" class="form-group required">
							<label for="id_number" class="control-label col-md-4  requiredField"> contact number<span class="asteriskField">*</span> </label>
							<div class="controls col-md-8 ">
								<input class="input-md textinput textInput form-control" id="id_number" name="number" placeholder="provide your number" style="margin-bottom: 10px" type="text" />
							</div> 
						</div>
						<div id="div_id_discription" class="form-group required">
							<label for="id_discription" class="control-label col-md-4  requiredField" > Description of the incident<span class="asteriskField">*</span> </label>
							<div class="controls col-md-8 ">
								<textarea  name="description" rows="10" cols="30" style="width: 550px" paceholeder="description"></textarea>
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
  
	<script src="../../../public/3rdParty/vendor3/jquery/jquery.min.js"></script>
	<script src="../../../public/3rdParty/js3/addcomplain.js"></script>
  
</html>