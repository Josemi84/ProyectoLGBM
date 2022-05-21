<div class="container-fluid mb-6">
    <button type="button" class="btn btn-danger " id="bt-4">Producto</button>
    <button type="button" class="btn btn-danger visually-hidden" id="bt-1">Añadir</button>
    <button type="button" class="btn btn-warning " id="bt-2">Limpiar</button>


    <div class="btn-group">
        <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" id="bt-3">
            Crear Web
        </button>
        <ul class="dropdown-menu p-0">

            <!--Formulario de envio de código al archivo de web principal-->
            <form action="../Proyecto/web/crear.php" method="post" target="_blank" class="d-grid" style="height: 4em">
                <textarea name="contenido" id="text-web" class="visually-hidden"></textarea>
                <button type="submit" name="generador" value="true" class="btn btn-danger">Generar</button>
            </form>
        </ul>
    </div>
</div>
<hr>
<div class="content " id="principal">





</div>