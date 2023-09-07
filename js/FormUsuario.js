function toggleMenu() {
  const navbarMenu = document.getElementById("navbarMenu");
  navbarMenu.classList.toggle("active");
}


function confirmDelete() {
  return confirm("¿Estás seguro de que deseas eliminar este elemento?");
}

