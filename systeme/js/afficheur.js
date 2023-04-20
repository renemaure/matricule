jQuery(document).ready(function($){
	var etape;
	var vites;
	var tempo;
	var src_code;
	var ver_diff;
	var ext_img;
	$.get("systeme/donnees/code_perso.json", function(code){
		etape = code["dep_etap"];
		vites = code["vitesse"];
		tempo = code["tempo_dep"];
		src_code = code["src_code"];
		ver_diff = code["ver_diff"];
		ext_json = code["ext_json"];
		setTimeout(Animation, tempo);//Attendez avant de continuer dans la fonction suivante
	});
		function Animation()
		{
			$.get(src_code+ver_diff+ext_json, function(data){
      			for (let ind = 0; ind <= 4; ind++)
	  			{
					/*$("#ch"+ind).attr("src","systeme/images/digit_"+ data["etp"+etape]["ch"+ind]+".png");*/
					$("#ch"+ind).attr("src","systeme/images/digit_"+ data["etp"+etape].charAt(ind)+".png");
				}
 				etape ++;
 				if(etape > data["nbr_etp"]) 
 				{
					etape =1;
				}
				setTimeout(Animation, vites); // apres une seconde d'attente
	  		});
	 	} 
});

/*console.log(data.etp1.ch1);*/

/*alert(data["nbr_etp"]); */
