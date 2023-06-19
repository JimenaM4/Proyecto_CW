window.addEventListener("load", ()=>{
    //variables que va a recibir del formulario
    const user = document.getElementById("usuario");
    const pass = document.getElementById("contraseña");
    const acceder = document.getElementById("acceder");

    acceder.addEventListener("click", ()=>{
    //sanitización
        const usuario = /^[a-z0-9_-]{3,10}$/i;
        //usuarios con letras y numeros, 3 caracteres minimo, 10 maximo
        if(!usuario.test(user.value)){
            alert("Usuario invalido");
        }
        const password = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8}$/i;
        //contraseña (8 digitos) que inicie con letras y/o numeros y al final caracteres especiales, ejemplo: J1m3n4$3
        if(!password.test(pass.value)){
            alert("Contraseña invalida");
        }
    });
});