$(document).ready(function(){
	
     saveRae () 
});


function saveRae () {
$(".mainContainer").delegate(".register-button", "click", function(event){
	
	event.preventDefault();
	var parameters = $("#raesForm").serialize()
	     $.ajax({
            type: "POST",
            url: webroot + "/rae/saveRae",
            data: parameters,
            success: function(response){
            
            $("#raelist").html(response) 
             
            }
        });
        
    });
		
  
}