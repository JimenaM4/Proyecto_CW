function quitar(){
    document.getElementsById("tit").textContent= "Vista previa";
    document.getElementById("datos").style.display= "none";
}

function despejar(){
    document.getElementById("submit").onclick=quitar;
}

window.onload=despejar;
