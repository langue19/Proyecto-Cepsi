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
  

  document.addEventListener("DOMContentLoaded", function() {
	const botonAgregarFamilia = document.getElementById("agregarFamilia");
	const contenedorFamilia = document.getElementById("contenedorFamilia");
	let contadorFamilia = 0;

	botonAgregarFamilia.addEventListener("click", function() {
		if (contadorFamilia < 10) { // Limitar a 10 familiares
			contadorFamilia++;

			// Ocultar el formulario del familiar anterior si existe
			const formularioAnterior = contenedorFamilia.querySelector(".campo-familia.visible");
			if (formularioAnterior) {
				formularioAnterior.classList.remove("visible");
				formularioAnterior.style.height = "auto"; // Restaurar la altura
			}

			const nuevoCampoFamilia = document.createElement("div");
			nuevoCampoFamilia.classList.add("campo-familia");
			nuevoCampoFamilia.classList.add("visible"); // Mostrar el nuevo formulario
			nuevoCampoFamilia.innerHTML = `
				<h4>Familiar ${contadorFamilia}</h4>
				<div class="fila">
					<input type="text" placeholder="Nombre" name="nombre${contadorFamilia}">
					<input type="text" placeholder="Apellido" name="apellido${contadorFamilia}">
				</div>
				<div class="fila">
					<input type="text" placeholder="Edad" name="edad${contadorFamilia}">
				</div>
				<div class="fila">
					<input type="text" placeholder="Rol familiar" name="rol${contadorFamilia}">
					<input type="text" placeholder="Ocupacion" name="ocupacion${contadorFamilia}">
					<input type="text" placeholder="Escolaridad alcanzada" name="escolaridad${contadorFamilia}">
				</div>
				<div class="fila">
					<input type="text" placeholder="Salario/Asignacion/Pension" name="salario/asignacion/pension${contadorFamilia}">
					<input type="text" placeholder="Asist. sanit." name="asist${contadorFamilia}">
				</div>
				<div class="fila">
					<input type="text" placeholder="Observaciones" name="observaciones${contadorFamilia}">
					<button class="guardarFamilia">Guardar</button>
					<button class="eliminarFamilia">Eliminar</button>
				</div>
				<style>/* Estilos para las filas */
				.fila {
					display: flex;
					flex-wrap: wrap;
					align-items: center;
					margin-bottom: 10px;
				}
				
				/* Estilo para los campos de entrada */
				.fila input[type="text"] {
					flex: 1;
					margin-right: 10px;
					padding: 5px;
					border: 1px solid #ccc;
					border-radius: 3px;
				}
				
				/* Estilo para el botón "Eliminar" */
				.fila .eliminarFamilia {
					background-color: #ff0000;
					color: #fff;
					border: none;
					padding: 5px 10px;
					cursor: pointer;
					border-radius: 3px;
				}
				
				.fila .guardarFamilia {
					background-color: green;
					color: #fff;
					border: none;
					padding: 5px 10px;
					cursor: pointer;
					border-radius: 3px;
				}

				/* Estilo para el botón "Eliminar" al pasar el mouse sobre él */
				.fila .eliminarFamilia:hover {
					background-color: #cc0000;
				}

				.fila .guardarFamilia:hover {
					background-color: #075200;
				}
				
				/* Estilo para el botón "Eliminar" al pasar el mouse sobre él */
				.fila .eliminarFamilia:hover {
					background-color: #cc0000;
				}
				/* Estilos para los contenedores de familiares */
				/* Estilos para los contenedores de familiares */
				.campo-familia {
					border: 1px solid #ccc;
					padding: 15px;
					margin: 20px 0;
					background-color: #f5f5f5;
					overflow: hidden; /* Ocultar contenido que exceda la altura */
					transition: height 0.3s; /* Agregar transición para suavizar el cambio de altura */
				}
				
				.campo-familia.visible {
					height: auto; /* Restaurar la altura automáticamente */
				}
				

				</style>
			`;

			contenedorFamilia.appendChild(nuevoCampoFamilia);

			// Agregar evento para eliminar el familiar
			const botonesEliminar = contenedorFamilia.querySelectorAll(".eliminarFamilia");
			botonesEliminar.forEach(function(boton) {
				boton.addEventListener("click", function() {
					this.parentElement.parentElement.remove();
					if(contadorFamilia==0){
						contadorFamilia=0;
					}else{contadorFamilia--;}
				});
			});
		} else {
			alert("No se pueden agregar más de 10 familiares.");
		}
	});
});
 

