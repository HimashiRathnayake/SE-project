$('#id_reporterName' ).on('keyup', function () {
    var regex = /^[A-Za-z\s]+$/;
	var value=$('#id_reporterName').val();

    if (regex.test(value)) {
        $('#id_reporterName').html('Valid name').css('color', 'black');
    } else 
        $('#id_reporterName').html('Invalid name').css('color', 'red');
    
});

$('#id_email' ).on('keyup', function () {
    var regex = /\S+@\S+\.\S+/;
	var value=$('#id_email').val();

    if (regex.test(value)) {
        $('#id_email').html('Valid name').css('color', 'black');
    } else 
        $('#id_email').html('Invalid name').css('color', 'red');
    
});

$('#id_date' ).on('keyup', function () {
    var regex = /^\d{1,2}\/\d{1,2}\/\d{4}$/;
	var value=$('#id_date').val();
	
    if (regex.test(value)) {
		
		var parts = value.split("/");
		var day = parseInt(parts[0], 10);
		var month = parseInt(parts[1], 10);
		var year = parseInt(parts[2], 10);
		var result=false;
		
		if(year < 1000 || year > 3000 || month == 0 || month > 12){
			$('#id_date').html('valid name').css('color', 'red');
		}
		else{
			var monthLength = [ 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ];
			
			if(year % 400 == 0 || (year % 100 != 0 && year % 4 == 0)){
				monthLength[1] = 29;
			}
			if(day > 0 && day <= monthLength[month - 1]){
				$('#id_date').html('valid name').css('color', 'black');
			}
			else{
				$('#id_date').html('Invalid name').css('color', 'red');
			}
			
		}
		
    } else 
        $('#id_date').html('Invalid name').css('color', 'red');
    
});

$('#id_postalCode' ).on('keyup', function () {
    var regex = /^[0-9]{5}$/;
	var value=$('#id_postalCode').val();

    if (regex.test(value)) {
        $('#id_postalCode').html('Valid location').css('color', 'black');
	} else 
        $('#id_postalCode').html('Invalid location').css('color', 'red');
    

	
});

$('#id_number' ).on('keyup', function () {
    var regex = /^0\d{9,10}$/;
	var value=$('#id_number').val();

    if (regex.test(value)) {
        $('#id_number').html('Valid location').css('color', 'black');
	} else 
        $('#id_number').html('Invalid location').css('color', 'red');
    

	
});



function isChecked(chk,term) {
    var myLayer = document.getElementById(term);
    if (chk.checked == true) {
        myLayer.disabled = false;
    } else {
        myLayer.disabled = true;
    };
}

	
