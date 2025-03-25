const divListaTemas = document.getElementById("divListaTemas");

const temaElegido = JSON.parse(localStorage.getItem("temaElegido"));

let listaEpisodios = [];


document.addEventListener('DOMContentLoaded', async function () {

    await loadPodcasts();

    cargarHome();

});

async function loadPodcasts() {
    let response = await fetch('docs/podcasts.json')
    let lista = await response.json();

    for (let i = 0; i < lista.length; i++) {
        const element = lista[i];

        console.log("Prueba", temaElegido);

        console.log("Prueba", temaElegido.podcasts);

        let resutlado = temaElegido.podcasts.includes(element.idPodcast);
        console.log("Resultado: ", resutlado);

        if (temaElegido.podcasts.includes(element.idPodcast)) {
            listaEpisodios.push(element);
        }

    }

}

function cargarHome() {

    console.log("TemaElejido: ", temaElegido);

    let textViewTitulo = document.createElement("h2");
    textViewTitulo.innerHTML = temaElegido.title;
    divListaTemas.appendChild(textViewTitulo);

    for (let i = 0; i < listaEpisodios.length; i++) {
        const element = array[i];

        let textViewidItem = document.createElement("h2");
        textViewidItem.innerHTML = element.title;


        divListaTemas.appendChild(textViewidItem);

    }
}

function buscarSiAparece(numero, lista) {
    let i = 0;
    let encontrado = false;

    while (!encontrado && i < lista.length){
        
        if(lista[i].idPodcast == numero) {

            encontrado = false;
        }
        
        i++;
    }

    return encontrado;
}