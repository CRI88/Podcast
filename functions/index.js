const contenedorHome = document.getElementById("contenedorHome");


let listaItemsHome = [];


document.addEventListener('DOMContentLoaded', async function () {

    await loadHomeItems();

    cargarHome();

});

async function loadHomeItems() {
    let response = await fetch('docs/homeItems.json')
    listaItemsHome = await response.json();

    console.log(listaItemsHome);
}


function cargarHome() {

    for (const item of listaItemsHome) {

        let divItem = document.createElement("div");
        divItem.id = "divItem" + item.id;
        divItem.classList.add("w-100", "h-60", "flex", "items-center", "justify-center", 
            "text-white", "rounded-lg", "p-5", "text-2xl", "text-center", "font-bold", "hover:transform", "hover:scale-110", "transition-all", "duration-500");
        divItem.style.backgroundImage = "url(" + item.imagen + ")";
        divItem.style.backgroundSize = "cover";
        divItem.style.backgroundPosition = "center";
        divItem.onclick = function () {

            console.log("Se ha pulsado item: ", item.title);

            localStorage.setItem("temaElegido", JSON.stringify(item));

            navegar();

        
            //mostrarModalPlayer(item);
        }

        let textViewidItem = document.createElement("h2");
        textViewidItem.innerHTML = item.title;


        divItem.appendChild(textViewidItem);

        contenedorHome.appendChild(divItem);


    }

    function navegar() {
        window.location.href = "../Podcast/episodiosPorTemas.php";

    }

}