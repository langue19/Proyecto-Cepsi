

function toggleMenu() {
  const navbarMenu = document.getElementById("navbarMenu");
  navbarMenu.classList.toggle("active");
}

// Función para abrir el primer modal
function openModal1(dni) {
  var modal = document.getElementById('id-modal1-' + dni);
  modal.style.display = 'block';
}


// Función para abrir el segundo modal
function openModal2(dni) {
  var modal = document.getElementById('id-modal2-' + dni);
  modal.style.display = 'block';
  
}

function openModal3(dni) {
  var modal = document.getElementById('id-modal3-' + dni);
  modal.style.display = 'block';
  
}

function openModal4(dni) {
  var modal = document.getElementById('id-modal4-' + dni);
  modal.style.display = 'block';
  
}
function openModal5(dni) {
  var modal = document.getElementById('id-modal5-' + dni);
  modal.style.display = 'block';
  
}


function closeModal(modalId) {
  var modal = document.getElementById(modalId);
  modal.style.display = 'none';
}

function closeModal1(modalId) {
  var modal = document.getElementById(modalId);
  modal.style.display = 'none';
  openModal1(dni);
}

function closeModal2(modalId) {
  var modal = document.getElementById(modalId);
  modal.style.display = 'none';
  openModal1(dni);
}

function openCity(evt, cityName, dni) {
  console.log("Abriendo ciudad:", cityName);
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("city");
  for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
      tablinks[i].classList.remove("w3-blue");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("w3-blue");
}

function confirmDelete() {
  return confirm("¿Estás seguro de que deseas eliminar este elemento?");
}

function toggleDiagnostico1(fechaIngresoFila) {
  var diagnosticoSpan = document.getElementById("diagnosticoSpan-" + fechaIngresoFila);
  var imgMostrar = document.getElementById("img-mostrar-" + fechaIngresoFila);
  
  if (diagnosticoSpan.style.display === "none") {
    diagnosticoSpan.style.display = "inline"; // Muestra el contenido
    imgMostrar.src = '/Proyecto-master/img/no-ver.png'; // Cambia la imagen a "Ocultar"
  } else {
    diagnosticoSpan.style.display = "none"; // Oculta el contenido
    imgMostrar.src = '/Proyecto-master/img/ver.png'; // Cambia la imagen a "Mostrar"
  }
}

function toggleMotivo1(fechaIngresoFila1) {
  var motivoSpan = document.getElementById("motivoSpan-" + fechaIngresoFila1);
  var imgMostrar1 = document.getElementById("img-mostrar1-" + fechaIngresoFila1);
  
  if (motivoSpan.style.display === "none") {
    motivoSpan.style.display = "inline"; // Muestra el contenido
    imgMostrar1.src = '/Proyecto-master/img/no-ver.png'; // Cambia la imagen a "Ocultar"
  } else {
    motivoSpan.style.display = "none"; // Oculta el contenido
    imgMostrar1.src = '/Proyecto-master/img/ver.png'; // Cambia la imagen a "Mostrar"
  }
}

function toggleDiagnostico2(fechaIngresoFila3) {
  var diagnosticoSpan2 = document.getElementById("diagnosticoSpan2-" + fechaIngresoFila3);
  var imgMostrar2 = document.getElementById("img-mostrar2-" + fechaIngresoFila3);
  
  if (diagnosticoSpan2.style.display === "none") {
    diagnosticoSpan2.style.display = "inline"; // Muestra el contenido
    imgMostrar2.src = '/Proyecto-master/img/no-ver.png'; // Cambia la imagen a "Ocultar"
  } else {
    diagnosticoSpan2.style.display = "none"; // Oculta el contenido
    imgMostrar2.src = '/Proyecto-master/img/ver.png'; // Cambia la imagen a "Mostrar"
  }
}

function toggleMotivo2(fechaIngresoFila4) {
  var motivoSpan2 = document.getElementById("motivoSpan2-" + fechaIngresoFila4);
  var imgMostrar3 = document.getElementById("img-mostrar3-" + fechaIngresoFila4);
  
  if (motivoSpan2.style.display === "none") {
    motivoSpan2.style.display = "inline"; // Muestra el contenido
    imgMostrar3.src = '/Proyecto-master/img/no-ver.png'; // Cambia la imagen a "Ocultar"
  } else {
    motivoSpan2.style.display = "none"; // Oculta el contenido
    imgMostrar3.src = '/Proyecto-master/img/ver.png'; // Cambia la imagen a "Mostrar"
  }
}