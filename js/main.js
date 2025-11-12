class persona {
  constructor(nombre, correo) {
    this.nombre = nombre;
    this.correo = correo;
  }
}

const formulario = document.getElementById("formularioPersona");
const personasList = document.getElementById("personasList");
const personas = [];

const actualizarpersonaList = () => {
    personasList.innerHTML = "";
    personas.forEach((persona) => {
        const li = document.createElement("li");
        li.textContent = `Nombre: ${persona.nombre}, Correo: ${persona.correo}`;
        personasList.appendChild(li);
    }
)};

formulario.addEventListener("submit", function (event) {
  event.preventDefault();

  const nombre = document.getElementById("nombre").value;
  const correo = document.getElementById("correo").value;

  const nuevaPersona = new persona(nombre, correo);
  personas.push(nuevaPersona);
  console.log(personas);
  actualizarpersonaList();
  formulario.reset();
});
