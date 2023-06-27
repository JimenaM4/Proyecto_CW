//Este archivo despliega los registros de foro, por medio de una peticion asincrona
window.addEventListener("load", ()=>{
    const div = document.getElementById("contpubli");
    const btn_nuevoForo = document.getElementById("btn_nuevoForo");
    let corazonv = "../../Statics/media/foro/coralikeb.png"
    let corazonll = "../../Statics/media/foro/coralikell.png"
    //peticion asincrona que mostrará las publicaciones registradas en la base de datos
    fetch("./desplegar_foro.php")
    .then((respuesta)=>{
        return respuesta.json();
    }).then((datosJSON)=>{
        console.log(datosJSON);
        
        div.innerHTML = "";
        datosJSON.forEach((a)=>{
        console.log(a);
        let like =a.Likes;
        // let IDf =a.ID_foro;
        div.innerHTML +=` <div class="Foros" id="${a.ID_foro}">
                            <h1>${a.Titulo}</h1>
                            <h2>${a.Tema}</h2>
                            <h5>${a.Descripcion}</h5>
                            <p>${a.Preguntas}</p>
                            <img src="${a.Img}">
                            <div id="contlikes">
                                <div class="corazon"></div>
                                <!--<h2>${like}</h2>-->
                                <div class="comentarios"></div>
                            </div>
                        </div>`;
        
                    
     });
     });
    //boton que te redireccionará a crear foro
     btn_nuevoForo.addEventListener("click", ()=>{
         window.location.href = "../../Templates/foro.html";
    });
    
    div.addEventListener("click",(e)=>{
        if(e.target.className=="corazon")
        {
            e.target.innerHTML=`<img class="corazon" src="${corazonll}">`;
            // like++;
            // console.log(like);
            // fetch("./likes.php", {
            //     datosForm = new FormData();
            //     datosForm.append(like, IDf)
            //     method: "POST",
            //     body: datosForm
            // }).then((respuesta)=>{
            //     return respuesta.json();
            // }).then ((datosJSON)=>{
            //     alert(datosJSON.mensaje);
            //     console.log(datosJSON);
            // });
        }
        // div.addEventListener("click",(e)=>{
        //     if(e.target.className=="corazon")
        //     {
        //         e.target.innerHTML=`<img class="corazon" src="${corazonv}">`;
        //     }
        // });
    });
    div.addEventListener("click",(e)=>{
        if(e.target.className=="comentarios")
        {
            console.log(e.currentTarget.getAttribute("id"));
        }
    });

});
