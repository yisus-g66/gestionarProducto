<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    <center>
        <h1>Registrar Producto</h1>
    </center>
    <form action="{{ route('producto.store') }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>Nombre</label>
                <input type="text" class="form-control" name="name" value="" placeholder="Nombre">
                @error('name')
                    <br>
                    <small>* {{ $message }}</small>
                    <br>
                @enderror
            </div>
            <div class="col-md-4 mb-3">
                <label>Precio</label>
                <input type="text" class="form-control" name="price" placeholder="Precio">
                @error('price')
                    <br>
                    <small>* {{ $message }}</small>
                    <br>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-5 mb-3">
                <div class="form-check">
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <button class="btn btn-primary" type="submit">Registrar Producto</button>
            </div>
            <div class="col-md-5 mb-3">
            </div>
        </div>
    </form>

</body>
</html>