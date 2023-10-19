function showForm(selectedValue) {
	var form1 = document.getElementById("form1");
	var form2 = document.getElementById("form2");

	if (selectedValue === "Internado") {
		form1.style.display = "block";
		form2.style.display = "none";
	} else if (selectedValue === "Domiciliario") {
		form1.style.display = "none";
		form2.style.display = "block";
	} else {
		form1.style.display = "none";
		form2.style.display = "none";
	}
}

function showForm(selectedValue) {
	var nivelInicialForm = document.getElementById("nivelInicialForm");
	var nivelPrimarioForm = document.getElementById("nivelPrimarioForm");

	if (selectedValue === "NivelInicial") {
		nivelInicialForm.style.display = "block";
		nivelPrimarioForm.style.display = "none";
	} else if (selectedValue === "NivelPrimario") {
		nivelInicialForm.style.display = "none";
		nivelPrimarioForm.style.display = "block";
	} else {
		nivelInicialForm.style.display = "none";
		nivelPrimarioForm.style.display = "none";
	}
}


function toggleMenu() {
	const navbarMenu = document.getElementById("navbarMenu");
	navbarMenu.classList.toggle("active");
}


var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}