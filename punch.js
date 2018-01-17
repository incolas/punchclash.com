var myForm = document.forms.roundselector;
var input = document.getElementById("input");
var quoten = document.getElementById("quoten");
var quoteb = document.getElementById("quoteb");


myForm.onsubmit = function(){
	
	if (input.value < 0 || input.value > 93){
		
		console.log(input.value);
		
		quoten.textContent = "Très cher monsieur, le round que vous cherchez n'existe pas. Veuillez en sélectionner un entre 0 et 93.";
		quoteb.textContent = "Bah alors morray... On s'est perdu ?!";
		
		input.className = "wrongnumber";
		
		quoten.className = "wrongway";
		quoteb.className = "wrongway";
		
		refn.textContent = "";
		refb.textContent = "";	

		return false;
		
		}
	}