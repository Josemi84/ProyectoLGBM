
//Función para añadir los elementos que queremos dentro de la web editable de manera dinámica

function addBoton() {
    var principal = document.getElementById('principal');
    var newDiv = document.createElement('div');
    newDiv.setAttribute("class", "web-cont");


    var p = "prueba";
    var contenido = "<button type='button' class='btn btn-primary' id='boton'>" + p + "</button>";

    newDiv.innerHTML = contenido;
    principal.appendChild(newDiv);
    console.log('botón creado');
}

function addProducto() {
    var principal = document.getElementById('principal');
    var newDiv = document.createElement('div');             //Contenedor de los productos para web pública

    newDiv.setAttribute("class", "web-cont col-6 d-inline-block align-middle");

                                                      
    //Código de elemento producto
    var contenido = "<div class='card d-inline-block mx-5 my-5 productoWEB'><img src='../Proyecto/img/imgP.png' class='card-img-top ' alt='imagen de prueba producto'><div class='card-body'><h5 class='card-title'>Nombre del producto</h5><p class='card-text'>Descripción detallada del producto, características, promociones,etc....</p></div><ul class='list-group list-group-flush'><button class='list-group-item btn-success'>Añadir a la cesta</button><button class='list-group-item btn-warning'>Comprar ahora</button><button class='list-group-item btn-info'>Información adicional</button></ul></div>";

    newDiv.innerHTML = contenido;
    principal.appendChild(newDiv);
    console.log('Producto Creado');
}

//Fin de funciones que añaden elementos



function resetPg() {                                        //Reseteamos todos los elementos de la web editable
    var principal = document.getElementById('principal');
    principal.innerHTML = "";
    console.log("Contenido borrado");
}

//Con esta función añadimos en un elemento oculto el código de todos los elementos que tenemos en la web editable
function generarWeb() {
    var TextArea = document.getElementById('text-web');
    var divBtn = document.getElementsByClassName('web-cont');

    TextArea.value="";  //Reseteo del valor para evitar repeticiones de código

    for (var i = 0; i < divBtn.length; i++) {
        TextArea.value += divBtn[i].innerHTML;
    }
    
    console.log(divBtn.length);
    console.log(TextArea.value);
}

function load() {
    console.log("Window cargada");

    var boton1 = document.getElementById("bt-1");
    boton1.addEventListener("click", addBoton, false);

    var boton2 = document.getElementById("bt-2");
    boton2.addEventListener("click", resetPg, false);

    var boton3 = document.getElementById("bt-3");
    boton3.addEventListener("click", generarWeb, false);

    var boton4 = document.getElementById("bt-4");
    boton4.addEventListener("click", addProducto, false);
}


window.onload = load;