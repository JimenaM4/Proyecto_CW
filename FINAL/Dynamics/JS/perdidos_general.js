window.addEventListener("load", ()=>{
    const div = document.getElementById("contpubli");
    const btn_nuevoForo = document.getElementById("btn_nuevoForo");
    //petición que despliega las publicaciones registradas en la base de datos
        fetch("./desplegar_perdidos.php")
        .then((respuesta)=>{
            return respuesta.json();
        }).then((datosJSON)=>{
             div.innerHTML = "";
             datosJSON.forEach((a)=>{
                div.innerHTML +=` <div class="Foros" id="${a.ID_perdido}">
                                    <h1>${a.Titulo}</h1>
                                    <h2>${a.Descripcion}</h2>
                                    <h5>${a.Lugar}</h5>
                                    <p>${a.Recompensa}</p>
                                    <img src="${a.Img}">
                                </div>`;
            });
     });
     btn_nuevoForo.addEventListener("click", ()=>{
         window.location.href = "../../Templates/objetos_perdidos.html";//te redirecciona a crear nueva publicación
    });
    div.addEventListener("click",(e)=>{
        if(e.target.matches("div.Foros")){
            const id = e.target.id;
            console.log(id);
            window.location.href = `./publicacion_perdido.php?id=${id}`;
        }
    });
});
