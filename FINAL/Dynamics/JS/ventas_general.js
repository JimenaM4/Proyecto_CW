window.addEventListener("load", ()=>{
    const div = document.getElementById("contpubli");
    const btn_nuevoForo = document.getElementById("btn_nuevoForo");
    //peticion que despliega las publicaciones de ventas registradas en la base de datos
    fetch("./desplegar_ventas.php")
    .then((respuesta)=>{
    return respuesta.json();
    }).then((datosJSON)=>{
     div.innerHTML = "";
     datosJSON.forEach((a)=>{
        div.innerHTML +=` <div class="Foros" id="${a.ID_venta}">
                            <h1>${a.Nombre_producto}</h1>
                            <h2> Por: ${a.Usuario}</h2>
                            <div id="contd"
                                <h2>Descripción: ${a.Descripcion}</h2>
                                <h2>Precio: $${a.Precio}</h2>
                                <h2>Lugar de entrega: ${a.Lugar}</h2>
                                <h2>Horario: ${a.Hora1 } a ${a.Hora2} </h2>
                                <h4> Contáctame: <p>${a.Telefono}</p></h4>
                            </div>
                            <img src="${a.Img}">
                        </div>`;
     });
     });
     btn_nuevoForo.addEventListener("click", ()=>{
         window.location.href = "../../Templates/ventas.html";//te redirecciona a crear publicación de ventas
    });
    div.addEventListener("click",(e)=>{
        if(e.target.matches("div.Foros")){
            const id = e.target.id;
            console.log(id);
            window.location.href = `./publicacion_ventas.php?id=${id}`;
        }
    });
});
