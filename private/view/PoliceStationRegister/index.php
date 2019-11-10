<?php

//$_SESSION["email"] = "";
if (isset($_SESSION["email"])) { ?>

<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post"  id="submit" action="<?php echo SITE_URL_BASE."/PoliceStationRegister/addNewPoliceStation"?>">
				<span class="contact100-form-title">
					Police Station Register Form
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Police Station Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter police station name">
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input" data-validate=" postalcode is required">
					<span class="label-input100">PostalCode</span>
					<input class="input100" type="text" name="postalcode" placeholder="Enter police station postalcode">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Enter police station email addess">
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input" data-validate=" telephone number is required">
					<span class="label-input100">Telephone Number</span>
					<input class="input100" type="text" name="telno" placeholder="Enter police station telephonenumber">
					<span class="focus-input100"></span>
				</div>
				
			
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" onclick="submit()">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="../3rdParty/vendor2/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../3rdParty/vendor2/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../3rdParty/vendor2/bootstrap/js/popper.js"></script>
	<script src="../3rdParty/vendor2/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../3rdParty/vendor2/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="../3rdParty/vendor2/daterangepicker/moment.min.js"></script>
	<script src="../3rdParty/vendor2/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../3rdParty/vendor2/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../3rdParty/js2/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
  function submit(){
    document.getElementById("submit").submit();
  }
</script>

</body>
</html>
<?php
} else {
    echo "Please Sign Up";
}

?>