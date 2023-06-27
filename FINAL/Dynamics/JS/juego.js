const forogj = document.getElementById("forog");
const dimensaj = document.getElementById("dimensaj");
//peticion que te muestra los datos guardados en la base de datos sobre el juego
fetch("../Dynamics/PHP/juego.php")
    .then((respuesta)=>{
        return respuesta.json();
    }).then((datosJSON)=>{
        console.log(datosJSON);

        for (resultado of datosJSON)
                {
                    forogj.innerHTML += `<div class="contlol"style= "color:white"><h1 style= "font-size: 
                    30px"><img align="center "id="lollo" src="../Statics/media/chatsjuegos/league_logo.png" alt="Lollo"></h1>${resultado.clasificacion}<br>${resultado.fecha_lanzamiento}<br>
                    ${resultado.descripcion}<br>${resultado.consola}<br><img align="center "id="lol" src="../Statics/media/chatsjuegos/LOL.jpeg" alt="Lol"></div>`;
                }

    });

    btne.addEventListener("click",()=>{
        const desc = /^[\D\w]{3,30}$/i;
        //descripción de 3-30 carácteres, si acepta números
        const descrip = desc.test(input.value);
        if(!descrip){
            alert("Mensaje invalido, verifica que no se mayor a 30 caracteres o inferior a 3");
        }
        else{
            console.log(input.value);
            datosForm= new FormData();
            datosForm.append("input", `${input.value}`);
            //peticion que incerta mensajes a la base de datos
            fetch("../Dynamics/PHP/insert_mensajes.php",
            {
                method:"POST",
                body:datosForm,
            })
            .then((respuesta)=>{
                return respuesta.json();
            }).then((datosJSON)=>{
                console.log(datosJSON.mensaje);
            });
            window.location.href="./juego.html";
        }
        
    });
    //peticion que muestra los mensajes guardados en la base de datos
    fetch("../Dynamics/PHP/mensajes.php")
    .then((respuesta)=>{
        return respuesta.json();
    }).then((datosJSON)=>{
        console.log(datosJSON);
        for (resultado of datosJSON)
                {
                    dimensaj.innerHTML += `<div class="mensajj"><h1 class="contm"><h1 id="usua">${resultado.Usuario}</h1>: ${resultado.Contenido} </h1></div>`;
                }

    });

    

