function addDiv() {
    var principal = document.getElementById('principal');
    var newDiv = document.createElement('div');
    newDiv.setAttribute("class", "boton-Cont");


    var p = "prueba";
    var contenido = "<button type='button' class='btn btn-primary' id='boton'>" + p + "</button>";

    newDiv.innerHTML = contenido;
    principal.appendChild(newDiv);
    console.log('botón creado');
}

function resetPg() {
    var principal = document.getElementById('principal');
    principal.innerHTML = "";
    console.log("Contenido borrado");
}

function generarWeb() {
    var TextArea = document.getElementById('text-web');
    var divBtn = document.getElementsByClassName('boton-Cont');



    for (var i = 0; i < divBtn.length; i++) {
        TextArea.value += divBtn[i].innerHTML;
    }
    
    console.log(divBtn.length);
    console.log(TextArea.value);
}

function load() {
    console.log("Window cargada");

    var boton1 = document.getElementById("bt-1");
    boton1.addEventListener("click", addDiv, false);

    var boton2 = document.getElementById("bt-2");
    boton2.addEventListener("click", resetPg, false);

    var boton3 = document.getElementById("bt-3");
    boton3.addEventListener("click", generarWeb, false);
}
window.onload = load;