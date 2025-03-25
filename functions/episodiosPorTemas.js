const divListaTemas = document.getElementById("divListaTemas");
const temaElegido = JSON.parse(localStorage.getItem("temaElegido"));

let listaEpisodios = [];

document.addEventListener("DOMContentLoaded", async function () {

    console.log("temaElegido: ", temaElegido);

    await loadPodcasts();
    cargarHome();


});

async function loadPodcasts() {
    try {
        let response = await fetch("docs/homeItems.json");
        let lista = await response.json();

        // Buscar el tema elegido en la lista de temas
        let tema = lista.find(t => t.id === temaElegido.id);

        if (tema && tema.podcasts.length > 0) {
            listaEpisodios = tema.podcasts; // Guardar los podcasts del tema
        }

    } catch (error) {
        console.error("Error cargando los podcasts:", error);
    }
}

function cargarHome() {
    console.log("Tema elegido:", temaElegido);

    // Limpiar contenido previo
    divListaTemas.innerHTML = "";

    // Contenedor principal
    let container = document.createElement("div");
    container.className = "w-full bg-white p-6 rounded-lg shadow-md max-w-2xl mx-auto";

    // Agregar título del tema
    let textViewTitulo = document.createElement("h2");
    textViewTitulo.innerHTML = temaElegido.title;
    textViewTitulo.className = "text-2xl font-bold text-blue-600 mb-4 text-center";
    container.appendChild(textViewTitulo);

    if (listaEpisodios.length === 0) {
        let noPodcasts = document.createElement("p");
        noPodcasts.innerHTML = "No hay episodios disponibles para este tema.";
        noPodcasts.className = "text-gray-500 text-center";
        container.appendChild(noPodcasts);
        divListaTemas.appendChild(container);
        return;
    }

    // Contenedor de podcasts
    let podcastContainer = document.createElement("div");
    podcastContainer.className = "w-full space-y-6";

    // Mostrar la lista de podcasts
    listaEpisodios.forEach(podcast => {
        let card = document.createElement("div");
        card.className = "w-full bg-gray-100 p-4 rounded-lg shadow-sm";

        let textViewPodcast = document.createElement("h3");
        textViewPodcast.innerHTML = `🎧 ${podcast.nombre}`;
        textViewPodcast.className = "text-lg font-semibold text-gray-800";
        card.appendChild(textViewPodcast);

        let textViewDescripcion = document.createElement("p");
        textViewDescripcion.innerHTML = podcast.descripcion;
        textViewDescripcion.className = "text-gray-600 text-sm mb-2";
        card.appendChild(textViewDescripcion);

        let audioPlayer = document.createElement("audio");
        audioPlayer.controls = true;
        audioPlayer.src = podcast.url;
        audioPlayer.className = "w-full";
        card.appendChild(audioPlayer);

        podcastContainer.appendChild(card);
    });

    container.appendChild(podcastContainer);
    divListaTemas.appendChild(container);
}
