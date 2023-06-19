window.addEventListener("load", ()=>{
    //variables que voy a recibir del formulario
    const nombre = document.getElementById("nombre");
    const numcuen = document.getElementById("numdecuen");
    const telefono = document.getElementById("telefono");
    const grup = document.getElementById("grupo");
    const usu = document.getElementById("usuario");
    const password = document.getElementById("contraseña");
    const acceder = document.getElementById("entrar");

    acceder.addEventListener("click", ()=>{
    //sanitización
        const name = /^[a-zA-ZáéíóúÁÉÍÓÚüÜñÑ]+(?:\s+[a-zA-ZáéíóúÁÉÍÓÚüÜñÑ]+){1,5}(?:\s+[-\sa-zA-ZáéíóúÁÉÍÓÚüÜñÑ]+)?$/i;
        //nombre completo, con espacios, recive mayusculas, minusculas y acéntos
        if(!name.test(nombre.value)){
            alert("Verifica que el nombre este completo");
        }
        const cuenta = /^\d{9}$/i;
        //numero de 9 digitos
        if(!cuenta.test(numcuen.value)){
            alert("Número de cuenta invalido");
        }
        const phone = /^(55?|52?|56?)[0-9]{8}$/i;
        //10 digitos
        if(!phone.test(telefono.value)){
            alert("Número de teléfono invalido");
        }
        const group = /^[4-6][1-6][0-9]$/i;
        //solo acepta grupos del 410 al 669
        if(!group.test(grup.value)){
            alert("Grupo invalido");
        }
        const user = /^[a-z0-9_-]{3,10}$/i;
        //usuarios con letras y numeros, 3 caracteres minimo, 10 maximo
        if(!user.test(usu.value)){
            alert("Usuario invalido");
        }
        const pass = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8}$/i;
        //contraseña (8 digitos) que inicie con letras y/o numeros y al final caracteres especiales, ejemplo: J1m3n4$3
        if(!pass.test(password.value)){
            alert("Contraseña invalida");
        }
    });
});