document.getElementById("btnMenu").addEventListener("click",
function () {
let elemento = document.getElementById("navbar");
if (elemento.classList.contains("navbar")) {
    elemento.classList.remove("navbar");
    elemento.classList.add("no_navbar");
} else {
    elemento.classList.remove("no_navbar");
    elemento.classList.add("navbar")
}
    
}
)
const nombre = document.querySelector("#name");
const apellido = document.querySelector("#lastname");
const telefono = document.querySelector("#telef");
const correo = document.querySelector("#email");
const contraseña = document.querySelector("#password");
const formulario = document.querySelector(".formulario-registro");
formulario.addEventListener("submit", validaFormulario);

function validaFormulario(e) {
  e.preventDefault();

  if (
    nombre.value === "" ||
    telefono.value === "" ||
    correo.value === "" ||
    contraseña.value === ""
  ) {
    mostrarError("Todos los campos son obligatorios");
    return;
  }

  alert("Hemos recibido sus datos, pronto nos pondremos en contacto.");

  window.location.reload();

}

function mostrarError(mensaje) {
  const alerta = document.createElement("p");
  alerta.textContent = mensaje;
  alerta.style.background = "red";
  alerta.style.color = "white";
  alerta.style.borderRadius ="5px";
  formulario.appendChild(alerta);
  setTimeout(() => {
    alert.remove();
  }, 5000);
}