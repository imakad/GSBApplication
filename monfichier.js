

$(document).ready(function()
  {
  	

  	 			$(".go").click(function(){
  	 				
  	 				 $.ajax({
  	 				 	type:"GET",
				        url: "http://localhost/PPEGSB/API/api/v1/affiche"
				    })
				    .then(function(data) {
				    /*	alert(data.pseudo);*/
				    
				     //$('#pseudo').append(data.pseudo);
				     // $('#motdepasse').append(data.motdepasse);
				  	 
				  	  
				  	  
				  		 if(data.pseudo==$('#pseudo').val()&& data.motdepasse==$('#motdepasse').val())
				  		 			{
				  	  	alert("Bienvenue ");
							 document.location="http://localhost/PPEGSB/HTML/RechercheVisiteur.html";
									}
						else{
							alert("verifier votre mot depasse ");
							}
					 });
		   	 	  });
		   	 	  
		   	 
	    
	
  	 			
  	
  	
  				
  	 			// funcrion rechercher 	
  	 				
  	 				
  	 				
		  	 			
		  // détection de la saisie dans le champ de recherche
		  $('.rechercher').keyup( function(){
		      if($(this).val()== ""){$('#results').html('');
		      }
		      else{
		    $field = $(this);
		    $('#results').html(''); // on vide les resultats
		   // $('#ajax-loader').remove(); // on retire le loader
		 
		     // on envoie la valeur recherché en GET au fichier de traitement
		      $.ajax({
		  	type : 'GET', // envoi des données en GET ou POST
			url : 'http://localhost/PPEGSB/API/api/v1/rechercher' , // url du fichier de traitement
			data : 'rechercher='+$(this).val() , // données à envoyer en  GET ou POST
			beforeSend : function() { // traitements JS à faire AVANT l'envoi
				//$field.after('<img src="ajax-loader.gif" alt="loader" id="ajax-loader" />'); // ajout d'un loader pour signifier l'action
			},
			success : function(data){ // traitements JS à faire APRES le retour d'ajax-search.php
				//$('#ajax-loader').remove(); // on enleve le loader
				alert(data);
				
		                var chaine ="";
		             $.each(data,function(key,value){
		                 
          
              chaine +=' <li class="table-view-cell media"><a href="informationVisiteur.html" class="navigate-right">'+
              '<div class="id">'+ value.id +
              '<div class="nom">'+ value.nom +
              '<span class="prenom">'+ value.prenom+'</span></div></a></li>' 
       });
               $('#results').html( chaine);
     
	}
	
      });
}
     });





});
      
    
      

      
      


  	 				
 			
  	 				
  	 				
  	 				
  	 				
  	 				
  	 				
  	 				
  	 				
  	 				
  	 				
  	 				
  	 				
  	 				
  	 				
  	 				
  	 	
      
  	 				
  