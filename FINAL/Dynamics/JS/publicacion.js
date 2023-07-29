window.addEventListener('load', ()=> {
    const btn_mensj = document.getElementById('btn_mensj');
    const btn_coment = document.getElementById('btn_coment');
    const img = document.getElementById('img');
    const publicacion = document.getElementById('publi');
    const imagen = document.getElementById('imagen');
    const comentarios = document.getElementById('comentarios');
    const btn_enviar = document.getElementById('btn_enviar');
    const mensaje = document.getElementById('Comentario');
    const formulario_coment = document.getElementById('formulario_coment');
    const id_publi = document.getElementById('id_publi');
    const num_comen = document.getElementById('num_comen');
    const desp_coment = document.getElementById('cont_comen');

    //agrandar imagen
    img.addEventListener("click",(e)=>{
        publicacion.style.display = "none";
        console.log(img.getAttribute("src"));
        scr = img.getAttribute("src");
        imagen.innerHTML = "";
        imagen.style.display = "block";
        imagen.innerHTML = `<button id='btn_cerrar' class='btn_cerrar'>Cerrar</button>
                            <img id='img_focus' src='${scr}' alt='Producto' style='max-width: 100%; height: auto;'>`;
        const btn_cerrar = document.getElementById('btn_cerrar');
        btn_cerrar.addEventListener("click",(e)=>{
            imagen.style.display = "none";
            publicacion.style.display = "block";
            btn_back.style.display = "block";
        });
    });

    // crear comentarios
    btn_mensj.addEventListener("click",(e)=>{
        comentarios.style.display = "block";
        btn_mensj.style.display = "none";
        btn_enviar.addEventListener("click",(e)=>{
            const com = /^[\D\w]{5,250}$/i;
            //mensaje de 5-250 carácteres, si acepta números
            const comen = com.test(mensaje.value);
            if(!comen){
                alert("Mensaje invalido: verifica que no pase de los 250 carácteres");
                window.location.href = `./publicacion_ventas.php?id=${id_publi.value}`;
            }else{
                datosForm = new FormData(formulario_coment);
                fetch("./mensaje_ventas.php",{
                    method: 'POST',
                    body: datosForm
                }).then((respuesta)=>{
                    return respuesta.json();
                }).then((datosJSON)=>{
                    console.log(datosJSON.mensaje);
                    alert(datosJSON.mensaje);
                    window.location.href = `./publicacion_ventas.php?id=${id_publi.value}`;
                });
            }
        });
    });

    // desplegar comentarios
    btn_coment.addEventListener("click",(e)=>{
        datosForm = new FormData();
        datosForm.append("id_publi",id_publi.value);
        fetch("./desplegar_comentarios.php",{
            method: "POST",
            body: datosForm,
        })
        .then((respuesta)=>{
            return respuesta.json();
        }).then((datosJSON)=>{
            num_comen.style.display = "block";
            num_comen.innerHTML = `Hay ${datosJSON.length} comentario(s)`;
            desp_coment.style.display = "block";
            desp_coment.innerHTML = "";
            datosJSON.forEach((a)=>{
                desp_coment.innerHTML +=` <div class="comentario" id="${a.ID_mensajeV}">
                                            <h5>${a.usuario} dice: ${a.contenido}</h5>
                                            <h6>${a.FechaHora}</p>
                                        </div>`;
            
            });

        });
    });

});