@extends('visor')

@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Portada Transparencia Activa  </a></li>
            <li class="breadcrumb-item active" aria-current="page">Actos y documentos del organismo que hayan sido objeto de publicación en el Diario Oficial</li>
        </ol>
    </nav>
</div>
<br>
<div class="container">
    <div class="table-responsive-sm">
        <main role="main" class="">
            <table class="table table-hover text-center">
                <thead>
                <tr>
                    <th scope="col">Tipo de Norma</th>
                    <th scope="col">Número de Norma</th>
                    <th scope="col">Denominación Norma</th>
                    <th scope="col">Fecha de Publicación en el D.O</th>
                    <th scope="col">Fecha de Modificación o Derogación</th>
                    <th colspan="3">Enlace Archivo</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($sunoitas as $archivo)
                <tr>

                    <td>{{$archivo->tipo_norma}}</td>
                    <td>{{$archivo->numero}}</td>
                    <td>{{$archivo->denominacion}}</td>
                    <td>{{$archivo->fecha_pub}}</td>
                    <td>{{$archivo->fecha_mod}}</td>
                    <td><a class="btn btn-info" href="{{$archivo->link}}" target="_blank">Visualizar</a></td>


                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-center">
                <!--<nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>-->
                {!!$sunoitas->render()!!}
            </div>


    </div>
    </main>
</div>

@endsection