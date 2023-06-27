window.addEventListener("load", ()=>{
    const vend = document.getElementById("nombreV");
    const  produc = document.getElementById("producto");
    const descripcion = document.getElementById("des");
    const precio = document.getElementById("precio");
    const lugar = document.getElementById("lugar");
    const hora1 = document.getElementById("hora1");
    const hora2 = document.getElementById("hora2");
    const tel = document.getElementById("tel");
    const continuar = document.getElementById("continuar");

    continuar.addEventListener("click", ()=>{
        //Sanitizacion REGEX
        const usuario = /^[a-z0-9_-]{3,10}$/i;
        const userT = usuario.test(vend.value);
        //usuarios con letras y numeros, 3 caracteres minimo, 10 maximo
        if(!userT){
            alert("Usuario invalido");
        }
        const prod = /^\D{3,25}$/i;
        //titulo de 3 a 30 carácteres, sin números
        const produT = prod.test(produc.value);
        if(!produT){
            alert("Producto invalido: verifica que no tenga números y que no pase de los 25 carácteres");
        }
        const desc = /^[\D\w]{5,150}$/i;
        //descripción de 5-150 carácteres, si acepta números
        const descrip = desc.test(descripcion.value);
        if(!descrip){
            alert("Descripción invalida: verifica que no pase de los 150 carácteres");
        }
        const pre = /^\d{1,4}$/i;
        //numero de 1 a 4 cifras
        const preT = pre.test(precio.value);
        if(!preT){
            alert("Precio invalido: verifica que solo sean de 1 a 4 digitos");
        }
        const place = /^(Entrada?|Ventanillas?|Patio 4?|Patio 5?|Patio 6?|LUM?|LACE C?|LAF?|LUF o LUB?|Biblioteca?|Salones H?|LAQ?|LAB?|Cubiculos?|Mediateca?|Salones A?|Pimponeras?|Gimnasio o Canchas?)$/i
        const lug = place.test(lugar.value);
        if(!lug){
            alert("El lugar no es valido: verifica que sea alguna de las opciones");
        }
        const hor = /^(([01]\d)|(2[0-3])):([0-5]\d)$/i;
        //hora ejemplo: 02:30p.m, 12:56a.m
        const horaU = hor.test(hora1.value);
        const horaD = hor.test(hora2.value);
        if(!horaU && !horaD){
            alert("Horario invalido, verifica que siga este formato: HH:MM")
        }
        const phone = /^(55?|52?|56?)[0-9]{8}$/i;
        const telT = phone.test(tel.value);
        //10 digitos
        if(!telT){
            alert("Número de teléfono invalido");
        }
        if (userT && produT && descrip && preT && lug && horaU && horaD && telT){
            continuar.value = 2;//en caso de que los regex sean true
        }else{
            continuar.value = 1;
        }
    });
});
