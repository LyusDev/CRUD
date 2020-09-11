$(document).ready(function() {
	$('#save').on('click', function() {
		$("save").attr("disabled", "disabled");
		var prod_name = $('#prod_name').val();
		var prod_price = $('#prod_price').val();
		var prod_desc = $('#prod_desc').val();
		if(prod_name!=""){
			$.ajax({
				url: "../controller/store.php",
				type: "POST",
				data: {
                    prod_name:prod_name,
                    prod_price:prod_price,
                    prod_desc:prod_desc				
                },
                cache: false,
				success: function(dataResult){
					var dataResult = JSON.toString(dataResult);
					if(dataResult.statusCode==200){
						$("#save").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html('Data added successfully !'); 						
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
            });
		}
		else{
			alert('Please fill all the fields !');
        }
        
      
	});
});