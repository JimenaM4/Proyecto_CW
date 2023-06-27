window.addEventListener("load", ()=>{
    //variables que vas a recibir del fomulario
    const titleB = document.getElementById("titulo");
    const desc = document.getElementById("descripcion");
    const place = document.getElementById("lugar");
    const rec = document.getElementById("recompensa");
    const continuar = document.getElementById("Continuar");

    continuar.addEventListener("click", (e)=>{
        //sanitización REGEX
        const titulo = /^\D{3,25}$/i;
        //titulo de 3 a 30 carácteres, sin números
        let title = titulo.test(titleB.value);
        if(!title){
            alert("Título invalido: verifica que no tenga números y que no pase de los 25 carácteres");
        }
        const descripcion = /^[\D\w]{5,100}$/i;
        //descripción de 5-100 carácteres, si acepta números
        let descrip = descripcion.test(desc.value);
        if(!descrip){
            alert("Descripción invalida: verifica que no pase de los 100 carácteres");
        }
        const lugar = /^[\D\w]{5,50}$/i;
        //lugar, si acepta números
        let lugarB = lugar.test(place.value);
        if(!lugarB){
            alert("Lugar invalido: verifica que no pase de los 50 carácteres");
        }
        if(rec.value!=false)
        {
            const recompensa = /^[\D\w]{5,80}$/i;
            //acepta números para el dinero
            let recom = recompensa.test(rec.value);
            if(!recom){
                alert("Recompensa invalida: verifica que no pase de los 80 carácteres");
            }
            if (title && descrip && lugarB && recom)
            {
                continuar.value = 3;//en caso de que haya recompensa
            }
        }else  if (title && descrip && lugarB)
        {
           continuar.value = 2;//en caso de que no haya recompensa
        }
        
    });

});
