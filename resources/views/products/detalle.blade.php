@extends('layout.main')

@section('content')
    <h1 class="text-center">Detalle del producto</h1>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-8">
                <img src="img/producto1.png" class="img-fluid" alt="...">
            </div>
            <div class="col-md-4">
                <h1>Nombre del producto</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, hic dolorem! Nam nisi fugiat id
                    totam possimus fugit consequuntur unde minima maxime corrupti, repudiandae ut deleniti ducimus
                    laudantium, obcaecati optio?</p>
                <h3>$ 1.000.000</h3>
                <button type="button" class="btn my-background">Añadir al carrito</button>
            </div>
        </div>
    </div>

@endsection