<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>

    <!--
        <div class="card text-bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Success card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    -->
    <!-- Example single danger button -->
    <div class="btn-group">
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="button" class="btn btn-danger" id="bt-1">Left</button>
            <button type="button" class="btn btn-warning" id="bt-2">Middle</button>
            <div class="btn-group">
                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" id="bt-3">
                    Crear
                </button>
                <ul class="dropdown-menu">
                    <form action="../web/crear.php" method="post" target="_blank">
                        
                        <textarea name="contenido" id="text-web"></textarea>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </ul>
            </div>
        </div>
    </div>
    <div class="content" id="principal"></div>
    
    


    
    <script src="./scripts.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>