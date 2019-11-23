<head>
    <title>SignUp</title>
    <link rel="stylesheet" type="text/css" href="../3rdParty/css3/contactForm.css">
</head>
<body>
    <div class="login-page">
    <div class="form">
        <form class="register-form" method="post" action="<?php echo SITE_URL_BASE."/SignUp/createNewAccount"?>">
            <input type="text" name="name" id="name" placeholder="Name" required/>
            <span class="errorForm" id="nameErrorMsg"></span>
            <br>

            <input type="text" name="nic" id="nic" placeholder="NIC" required/>
            <span class="errorForm" id="nicErrorMsg"></span>
            <br>

            <input type="text" name="telephoneNo" id="telephoneNo" placeholder="Telephone No" required/>
            <span class="errorForm" id="telephoneNoErrorMsg"></span>
            <br>

            <input type="email"  name="email" id="email" placeholder="Email address" required/>
            <span class="errorForm" id="emailErrorMsg"></span>
            <br>

            <input type="text" name="postalCode" id="postalCode" placeholder="Postal Code" required/>
            <span class="errorForm" id="postalCodeErrorMsg"></span>
            <br>
            <input type="text" name="address"  placeholder="Address" required/>
            <span class="errorForm" ></span>
            <br>
            <input type="password"  name="password" id="password" placeholder="Password" required/>
            <span class="errorForm"   id="passwordErrorMsg"></span>
            <br>

            <input type="password" id="confirmPassword" placeholder="Confirm Password" required/>
            <span class="errorForm" id="confirmPasswordErrorMsg"></span>
            <br>

            <button id="submit">Sign Up</button>
            
            <p class="message">Already registered? <a href="http://localhost/SE/app/views/login.php">Login</a></p>
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="../3rdParty/js3/validateSignUp.js"></script>
        </form>
    </div>
    </div>
</body>