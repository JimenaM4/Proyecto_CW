const fotop=document.getElementById("foto2");
const datos=document.getElementById("datosp");
fetch("./datos_usuario.php")
    .then((respuesta)=>{
        return respuesta.json();
    }).then((datosJSON)=>{
        datosJSON.forEach((a)=>{
            if(a.f_perfil == null)
            {
                img_perfil.innerHTML = <img src="../../Statics/Media/usuario.svg" alt="Imagen de perfil" style="max-width: 200px; height: auto;" id="img">;
                img_perfil.addEventListener("mouseover",(e)=>{
                    img_perfil.innerHTML = <img src="../../Statics/Media/add.svg" alt="Imagen de perfil" style="max-width: 200px; height: auto;" id="img">;
                });
                img_perfil.addEventListener("mouseout",(e)=>{
                    img_perfil.innerHTML = <img src="../../Statics/Media/usuario.svg" alt="Imagen de perfil" style="max-width: 200px; height: auto;" id="img">;
                });
            }else{
                img_perfil.innerHTML = <img src="${a.f_perfil}" alt="Imagen de perfil" style="max-width: 300px; height: auto;" id="img">;
            }
            datos_usu.innerHTML += <div class="datos" id="${a.ID_USUARIO}">
                                    <p>Nombre: ${a.Nombre}</p>
                                    <p>Telefono: ${a.num_telefono}</p>
                                    <p>Usuario: ${a.N_usuario}</p>
                                    <p>Correo: ${a.correo}</p>
                                </div>;
            name.value = a.Nombre;
            tel.value = a.num_telefono;
            usuario.value = a.N_usuario;
            correo.value = a.correo;
        });
        });
