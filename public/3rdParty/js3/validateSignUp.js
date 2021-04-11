$(function () {

    $("#nameErrorMsg").hide();
    $("#nicErrorMsg").hide();
    $("#telephoneNoErrorMsg").hide();
    $("#emailErrorMsg").hide();
    $("#postalCodeErrorMsg").hide();
    $("#passwordErrorMsg").hide();
    $("#confirmPasswordErrorMsg").hide();

    var errorName = false;
    var errorNic = false;
    var errorTelephoneNo = false;
    var errorEmail = false;
    var errorPostalCode = false;
    var errorPassword = false;
    var errorConfirmPassword = false;

    $('#name').focusout(function () {
        checkName();
    });
    $('#nic').focusout(function () {
        checkNic();
    });
    $('#telephoneNo').focusout(function () {
        checkTelephoneNo();
    });
    $('#email').focusout(function () {
        checkEmail();
    });
    $('#postalCode').focusout(function () {
        checkPostalCode();
    });
    $('#password').focusout(function () {
        checkPassword();
    });
    $('#confirmPassword').focusout(function () {
        checkConfirmPassword();
    });

    function checkName() {
        var pattern = /^[a-zA-Z]*$/;
        var name = $('#name').val();
        if (pattern.test(name)) {
            $("#nameErrorMsg").hide();
        } else {
            $("#nameErrorMsg").html("Should contain only characters<br>");
            $("#nameErrorMsg").show();
            $("#nameErrorMsg").css("color", "#F90A0A");
            errorName = true;
        }
    }

    function checkNic() {
        var pattern = /^([0-9]{9}[x|X|v|V]|[0-9]{12})$/;
        var nic = $('#nic').val();
        if (pattern.test(nic)) {
            $("#nicErrorMsg").hide();
        } else {
            $("#nicErrorMsg").html("Invalid NIC<br>");
            $("#nicErrorMsg").show();
            $("#nicErrorMsg").css("color", "#F90A0A");
            errorNic = true;
        }
    }

    function checkTelephoneNo() {
        var pattern = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
        var telephoneNo = $('#telephoneNo').val();
        if (pattern.test(telephoneNo)) {
            $("#telephoneNoErrorMsg").hide();
        } else {
            $("#telephoneNoErrorMsg").html("Invalid Telephone Number<br>");
            $("#telephoneNoErrorMsg").show();
            $("#telephoneNoErrorMsg").css("color", "#F90A0A");
            errorTelephoneNo = true;
        }
    }

    function checkEmail() {
        var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var email = $('#email').val();
        if (pattern.test(email)) {
            $("#emailErrorMsg").hide();
        } else {
            $("#emailErrorMsg").html("Invalid Email<br>");
            $("#emailErrorMsg").show();
            $("#emailErrorMsg").css("color", "#F90A0A");
            errorEmail = true;
        }
    }

    function checkPostalCode() {
        var pattern = /^\d{5}$/;
        var postalCode = $('#postalCode').val();
        if (pattern.test(postalCode)) {
            $("#postalCodeErrorMsg").hide();
        } else {
            $("#postalCodeErrorMsg").html("Invalid Postal Code<br>");
            $("#postalCodeErrorMsg").show();
            $("#postalCodeErrorMsg").css("color", "#F90A0A");
            errorPostalCode = true;
        }
    }

    function checkPassword() {
        var passwordLength = $('#password').val().length;
        if (passwordLength < 8) {
            $("#passwordErrorMsg").html("Password should contain atleast 8 characters<br>");
            $("#passwordErrorMsg").show();
            $("#passwordErrorMsg").css("color", "#F90A0A");
            errorPassword = true;
        } else {
            $("#passwordErrorMsg").hide();
        }
    }

    function checkConfirmPassword() {
        var password = $('#password').val();
        var confirmPassword = $('#confirmPassword').val();
        if (password !== confirmPassword) {
            $("#confirmPasswordErrorMsg").html("Passwords did not match<br>");
            $("#confirmPasswordErrorMsg").show();
            $("#confirmPasswordErrorMsg").css("color", "#F90A0A");
            errorConfirmPassword = true;
        } else {
            $("#confirmPasswordErrorMsg").hide();
            errorConfirmPassword = false;
        }
    }

    // $('#submit').click(function (e) {
    //     var name = $('#name').val();
    //     var nic = $('nic').val();
    //     var telephoneNo = $('telephoneNo').val();
    //     var email = $('#email').val();
    //     var postaclCode = $('#postalCode').val();
    //     var password = $('#password').val();
    //     var confirmPassword = $('#confirmPassword').val();
    //     if ( errorName == false && errorNic == false && errorTelephoneNo == false && errorEmail == false && errorPostalCode == false && errorPassword == false && errorConfirmPassword == false  && name !== ''  && nic !== ''  && telephoneNo !== ''  && email != '' && postalCode !== ''  && password != '' && confirmpassword != '') {

    //         e.preventDefault();
    //         $.ajax({
    //             type: 'POST',
    //             url: 'http://localhost/crimereportSystem/public/Signup/createNewAccount',
    //             data: {
    //                 name: name,
    //                 nic : nic,
    //                 telephoneNo : telephoneNo,
    //                 email: email,
    //                 postalCode : postalCode,
    //                 password: password,
    //                 confirmPassword: confirmPassword
    //             },
    //             success: function (data) {
    //                 alert('Registration Successfull');
    //                 window.location = 'home.php'
    //             },
    //             error: function (data) {
    //                 alert('There was errors while saving data');
    //             }

    //         });
    //     } else {
    //         alert("Please fill the information correctly");
    //     }
    // });

});