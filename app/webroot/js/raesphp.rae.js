$(document).ready(function(){
	
     saveRae () 
     listdescription () 
     listIso ()
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
            
            
             listdescription () 
             listIso ()
            }
        });
        
    });
		
  
}

function listdescription () {

	
	
	
	     $.ajax({
            type: "POST",
            url: webroot + "/rae/listDescription",
           
            success: function(response){
            
            $("#deslist").html(response) 
             
            }
        });
        
   }
   

function listIso () {

	$.ajax({
		type : "POST",
		url : webroot + "/rae/listIso",

		success : function(r) {
			var response = jQuery.parseJSON(r)
 
			$("#isolist").html('<table id=" isotable " class="basic_table" style="width: 100%;"></table>');
			var table = $('#isotable').dataTable({
				"bJQueryUI" : true,
				"aaData" : response.iso,
				"bAutoWidth" : false,
				"aoColumns" : response.columnas
				//"sScrollY": "330px",
		

			});
			
			

		}
	});

}


