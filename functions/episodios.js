
let listaPodcasts = [];

const divListaPodcasts = document.getElementById("divListaPodcasts");
const contenedorBodyEpisodios = document.getElementById("contenedorBodyEpisodios");

document.addEventListener('DOMContentLoaded', async function () {

    await loadPodcasts();

    crearItems();

});

async function loadPodcasts() {
    let response = await fetch('docs/podcasts.json')
    listaPodcasts = await response.json();

    console.log(listaPodcasts);
}

function crearItems() {

    for (const podcast of listaPodcasts) {

        let divPreguntas = document.createElement("div");
        divPreguntas.id = "divPreguntas";
        divPreguntas.classList.add("bg-orange-300", "rounded-lg", "p-5", "hover:bg-orange-200");
        divPreguntas.onclick = function () {
            mostrarModalPlayer(podcast);
        }

        let textViewidPodcast = document.createElement("h2");
        textViewidPodcast.innerHTML = podcast.idPodcast;

        let textViewNombre = document.createElement("h2");
        textViewNombre.innerHTML = podcast.nombre;

        let textViewDescripcion = document.createElement("h2");
        textViewDescripcion.innerHTML = podcast.descripcion;

        let textViewUrl = document.createElement("h2");
        textViewUrl.innerHTML = podcast.url;

        divPreguntas.appendChild(textViewidPodcast);
        divPreguntas.appendChild(textViewNombre);
        divPreguntas.appendChild(textViewDescripcion);
        divPreguntas.appendChild(textViewUrl);

        divListaPodcasts.appendChild(divPreguntas);


    }
}

function mostrarModalPlayer(podcast) {

    // Crear un contenedor para el modal
    let divPreguntas = document.createElement("div");
    divPreguntas.id = "divPreguntas";
    divPreguntas.classList.add(
        "fixed",          // Para fijarlo a la pantalla
        "top-0",          // Alineado al tope
        "left-0",         // Alineado a la izquierda
        "w-full",         // Ancho completo
        "h-full",         // Alto completo
        "bg-black",       // Fondo negro con opacidad
        "bg-opacity-50",  // Opacidad para el fondo
        "flex",           // Usar flexbox
        "items-center",   // Centrado vertical
        "justify-center", // Centrado horizontal
        "z-50",            // Asegura que el modal esté encima de otros elementos
        "flex-col"
    );

    // 🔹 Crear el título
    let title = document.createElement("h2");
    title.innerText = "Reproductor";
    title.classList.add("text-xl", "mb-4", "text-white");

    // 🔹 Crear el elemento de audio
    let audio = document.createElement("audio");
    audio.id = "audioPlayer";
    audio.src = podcast.url;
    audio.controls = true; // Mostrar los controles predeterminados
    audio.classList.add("w-1/2");

    // 🔹 Crear el botón de cerrar
    let closeButton = document.createElement("button");
    closeButton.innerText = "Cerrar ❌";
    closeButton.classList.add("bg-red-500", "text-white", "px-4", "py-2", "rounded-lg", "cursor-pointer", "mt-4");
    closeButton.onclick = function () {
        divPreguntas.remove(); // Cierra el modal
    };

    // Agregar los elementos al modal
    divPreguntas.appendChild(title);
    divPreguntas.appendChild(audio);
    divPreguntas.appendChild(closeButton);

    // Agregar el modal al contenedorBodyEpisodios
    contenedorBodyEpisodios.appendChild(divPreguntas);
}


