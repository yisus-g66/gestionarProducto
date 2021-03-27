<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Lista de Productos</h1>
    <table style="text-align: center" class="table table-bordered table-hover table-responsive-xl">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Fecha de productoeación</th>
                <th>Fecha de Modificación</th>
            </tr>
        </thead>
        <tbody>
    @foreach($product as $producto)
    <tr>
        <td> {{$producto->name}}</td>
        <td>{{$producto->price}}</td>
        <td>{{$producto->created_at}}</td>
        <td>{{$producto->updated_at}}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
    <nav aria-label="Page navigation example " class="float-right">
        <ul class="pagination">
            <li class=" {{ $product->currentPage() == 1 ? ' disabled' : '' }} page-item"><a class="page-link"
                    href="{{ $product->url(1) }}">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            @for ($i = 1; $i <= $product->lastPage(); $i++)
                <li class="{{ $product->currentPage() == $i ? ' seleccionar ' : '' }} page-item">
                    <a class=" page-link " href="{{ $product->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
            <li class="{{ $product->currentPage() == $product->lastPage() ? ' disabled' : '' }} page-item">
                <a href="{{ $product->url($product->currentPage() + 1) }}" class="page-link" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>

</body>
</html>