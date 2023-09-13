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


$(document).ready(function () {
	var current_fs, next_fs, previous_fs; //fieldsets
	var opacity;
	var current = 1;
	var steps = $("fieldset").length;
  
	setProgressBar(current);
  
	$(".next").click(function () {
	  current_fs = $(this).parent();
	  next_fs = $(this).parent().next();
  
	  //Add Class Active
	  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
  
	  //show the next fieldset
	  next_fs.show();
	  //hide the current fieldset with style
	  current_fs.animate(
		{ opacity: 0 },
		{
		  step: function (now) {
			// for making fielset appear animation
			opacity = 1 - now;
  
			current_fs.css({
			  display: "none",
			  position: "relative"
			});
			next_fs.css({ opacity: opacity });
		  },
		  duration: 500
		}
	  );
	  setProgressBar(++current);
	});
  
	$(".previous").click(function () {
	  current_fs = $(this).parent();
	  previous_fs = $(this).parent().prev();
  
	  //Remove class active
	  $("#progressbar li")
		.eq($("fieldset").index(current_fs))
		.removeClass("active");
  
	  //show the previous fieldset
	  previous_fs.show();
  
	  //hide the current fieldset with style
	  current_fs.animate(
		{ opacity: 0 },
		{
		  step: function (now) {
			// for making fielset appear animation
			opacity = 1 - now;
  
			current_fs.css({
			  display: "none",
			  position: "relative"
			});
			previous_fs.css({ opacity: opacity });
		  },
		  duration: 500
		}
	  );
	  setProgressBar(--current);
	});
  
	function setProgressBar(curStep) {
	  var percent = parseFloat(100 / steps) * curStep;
	  percent = percent.toFixed();
	  $(".progress-bar").css("width", percent + "%");
	}
  
	$(".submit").click(function () {
	  return false;
	});
  });
  
  function toggleMenu() {
	const navbarMenu = document.getElementById("navbarMenu");
	navbarMenu.classList.toggle("active");
  }
  

 

