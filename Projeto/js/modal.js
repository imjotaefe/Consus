function inicialModal(modalID) {
  const modal = document.getElementById(modalID);
  if (modal) {
    modal.classList.add("mostrar");
    modal.addEventListener("click", e => {
      if (e.target.id == "form-fechar") {
        modal.classList.remove("mostrar");
      }
    });
  }
}
