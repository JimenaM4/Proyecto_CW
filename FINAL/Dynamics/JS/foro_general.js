window.addEventListener("load", ()=>{
    const div = document.getElementById("contpubli");
    const btn_nuevoForo = document.getElementById("btn_nuevoForo");
        fetch("./desplegar_foro.php")
        .then((respuesta)=>{
            return respuesta.json();
        }).then((datosJSON)=>{
             console.log(datosJSON);
       
             div.innerHTML = "";
             datosJSON.forEach((a)=>{
                console.log(a);
                div.innerHTML +=` <div class="Foros">
                                    <h1>${a.Titulo}</h1>
                                    <h2>${a.Tema}</h2>
                                    <h5>${a.Descripcion}</h5>
                                    <p>${a.Preguntas}</p>
                                    <img src="${a.Img}">
                                </div>`;
            });
     });
     btn_nuevoForo.addEventListener("click", ()=>{
         window.location.href = "../../Templates/foro.html";
    });
});
