window.addEventListener('load', ()=>{
    const f_portada=document.getElementById("per_portada");
    const f_perfil=document.getElementById("foto");
    const perfil=document.getElementById("perfil");
    const datos=document.getElementById("datosp");
    const portada=document.getElementById("portada");
    const Subir_foto=document.getElementById("Subir_foto");
    const Subir_portada=document.getElementById("Subir_portada");
    const btn_editar=document.getElementById("btn_editar");
    const cambios=document.getElementById("cambios");
    const formulario_actualizar=document.getElementById("formulario_actualizar");
    const ver_contra = document.getElementById("ver_contra");
    const no_ver_contra = document.getElementById("no_ver_contra");
    const nombre=document.getElementById("nombre");
    const num_cuenta=document.getElementById("num_cuenta");
    const telefono=document.getElementById("telefono");
    const usuario=document.getElementById("usuario");
    const grupo=document.getElementById("grupo");
    const contrasena=document.getElementById("contrasena");
    const actualizar=document.getElementById("actualizar");

    // Cargar datos del usuario
    fetch("./datos_usuario.php")
    .then((respuesta)=>{
        return respuesta.json();
    }).then((datosJSON)=>{
        datosJSON.forEach((a)=>{
            if(a.f_perfil != null)
            {
                perfil.innerHTML = `<img src="${a.f_perfil}" alt="Imagen de perfil" style="max-width: 300px; height: auto;" id="img">`;
            }
            if(a.f_portada != null)
            {
                f_portada.innerHTML = `<img src="${a.f_portada}" alt="Imagen de portada" style="max-width: 300px; height: auto;" id="img">`;
            }
            datos.innerHTML +=` <div class="datos" id="${a.ID_usuario}">
                                    <p>Nombre: ${a.Nombre}</p>
                                    <p>Némero de cuenta: ${a.num_cuenta}</p>
                                    <p>Telefono: ${a.num_telefono}</p>
                                    <p>Usuario: ${a.usuario}</p>
                                    <p>Grupo: ${a.grupo}</p>
                                </div>`;
            nombre.value = a.Nombre;
            num_cuenta.value = a.num_cuenta;
            usuario.value = a.usuario;
            telefono.value = a.num_telefono;
            grupo.value = a.grupo;
        });
    });

    btn_editar.addEventListener("click",(e)=>{
        //Confirmar contraseña para cambiar datos
        confimacion_contraseña = prompt("Ingresa tu contraseña para confirmar los cambios");
        datosForm = new FormData();
        datosForm.append("contra",confimacion_contraseña);
        fetch("./confirmar_contra.php", {
            method: "POST",
            body: datosForm,
        })
        .then((respuesta)=>{
            return respuesta.json();
        }).then((datosJSON)=>{
            console.log(datosJSON.mensaje);
            if(datosJSON.mensaje == "Contraseña correcta"){
                btn_editar.style.display = "none";
                cambios.style.display = "block";
                datos.style.display = "none";
                contrasena.value = confimacion_contraseña;
            }else if(datosJSON.mensaje == "Contraseña incorrecta"){
                alert("Contraseña incorrecta");
            }
            else{
                alert("Error al verificar la contraseña");
            }
        });
    });

    // Ver contraseña
    ver_contra.addEventListener('click', (e)=>{
        contrasena.type = "text";
        ver_contra.style.display = "none";
        no_ver_contra.style.display = "block";  
    });
    // No ver contraseña
    no_ver_contra.addEventListener('click', ()=>{
        contrasena.type = "password";
        no_ver_contra.style.display = "none";
        ver_contra.style.display = "block";
    });

    // Actualizar datos
    actualizar.addEventListener("click",(e)=>{
        const nom = /^[a-zA-ZáéíóúÁÉÍÓÚüÜñÑ]+(?:\s+[a-zA-ZáéíóúÁÉÍÓÚüÜñÑ]+){1,5}(?:\s+[-\sa-zA-ZáéíóúÁÉÍÓÚüÜñÑ]+)?$/i;
        //nombre de 5-30 carácteres, no acepta números
        const name = nom.test(nombre.value);
        const tel = /^(55?|52?|56?)[0-9]{8}$/i;
        //teléfono de 10 dígitos, solo acepta números
        const Ntelefono = tel.test(telefono.value);
        const usu = /^[a-z0-9_-]{3,10}$/i;
        //usuario de 5-30 carácteres, si acepta números
        const user = usu.test(usuario.value);
        const con = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8}$/i;
        //contraseña de 8 carácteres, si acepta números
        const contra = con.test(contrasena.value);
        const group = /^[4-6][0-6][0-9]$/i;
        //solo acepta grupos del 410 al 669
        const grupT = group.test(grupo.value);
        if(!grupT){
            alert("Grupo invalido");
        }
        if(!name){
            alert("Nombre invalido: verifica que el nombre este completo");
        }else if(!Ntelefono){
            alert("Telefono invalido: verifica que sean 10 dígitos");
        }else if(!user){
            alert("Usuario invalido: verifica que no pase de los 10 carácteres");
        }else if(!contra){
            alert("Contraseña invalida: verifica que no pase de los 8 carácteres");
        }else{
            datosForm = new FormData(formulario_actualizar);
            fetch("./Actualizar_datos_usu.php",{
                method: 'POST',
                body: datosForm
            }).then((respuesta)=>{
                return respuesta.json();
            }).then((datosJSON)=>{
                console.log(datosJSON.mensaje);
                alert(datosJSON.mensaje);
            });
        }
    });
       
    //imagen de perfil
    Subir_foto.addEventListener("click",(e)=>{
        const img = /(\w+\.(jpg|png|jpeg))$/i;
        //imagen de extencion jpg, png o jpeg
        const image = img.test(f_perfil.value);
        if(!image){
            alert("Imagen invalida: verifica que sea jpg, png o jpeg");
        }else{
            datosForm = new FormData();
            datosForm.append("imagen", f_perfil.files[0]);
            fetch("./upload.php",{
                method: 'POST',
                body: datosForm
            }).then((respuesta)=>{
                return respuesta.json();
            }).then((datosJSON)=>{
                console.log(datosJSON.mensaje);
                alert(datosJSON.mensaje);
                window.location.reload();
            });
        }
    });

    //imagen de portada
    Subir_portada.addEventListener("click",(e)=>{
        const img = /(\w+\.(jpg|png|jpeg))$/i;
        //imagen de extencion jpg, png o jpeg
        const image = img.test(portada.value);
        if(!image){
            alert("Imagen invalida: verifica que sea jpg, png o jpeg");
        }else{
            datosForm = new FormData();
            datosForm.append("imagen", portada.files[0]);
            fetch("./subir_portada.php",{
                method: 'POST',
                body: datosForm
            }).then((respuesta)=>{
                return respuesta.json();
            }).then((datosJSON)=>{
                console.log(datosJSON.mensaje);
                alert(datosJSON.mensaje);
                window.location.reload();
            });
        }
    });

});



