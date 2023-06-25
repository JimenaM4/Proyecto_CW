const forogj = document.getElementById("forog");


fetch("../Dynamics/PHP/juego.php")
    .then((respuesta)=>{
        return respuesta.json();
    }).then((datosJSON)=>{
        console.log(datosJSON);

        for (resultado of datosJSON)
                {
                    forogj.innerHTML += `<div class="contlol"style= "color:white"><h1 style= "font-size: 
                    30px">${resultado.Nombre_juego}</h1>${resultado.clasificacion}<br>${resultado.fecha_lanzamiento}<br>
                    ${resultado.descripcion}<br>${resultado.consola}</div>`;
                }

    });