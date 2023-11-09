function toggleMenu() {

  const navbarMenu = document.getElementById("navbarMenu");

  navbarMenu.classList.toggle("active");

}

function cancelForm() {
  // Redirige al usuario a la página deseada
  window.location.href = 'formularioAlumno.php';
}