
class Persona {
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
    const card = document.createElement("div");
    card.className = "card mb-3 border-0 w-50 mx-auto shadow-sm";

    card.innerHTML = `
    
      <div class="card-body d-flex align-items-center">
        <div class="rounded-circle bg-primary contact-text text-white d-flex align-items-center justify-content-center me-3"
             style="  width:45px; height:45px; font-weight:bold; font-size:1.2rem;">
          ${persona.nombre[0].toUpperCase()}
        </div>
        <div>
          <h6 class="card-title mb-1 fw-semibold text-start text-dark">${persona.nombre}</h6>
          <p class="card-text text-muted mb-0">${persona.correo}</p>
        </div>
      </div>
    `;

    personasList.appendChild(card);
  });
};

formulario.addEventListener("submit", (event) => {
  event.preventDefault();

  const nombre = document.getElementById("nombre").value.trim();
  const correo = document.getElementById("correo").value.trim();

  if (!nombre || !correo) {
    alert("Por favor, completa todos los campos.");
    return;
  }

  const nuevaPersona = new Persona(nombre, correo);
  personas.push(nuevaPersona);
  actualizarpersonaList();
  formulario.reset();
});