@extends('platadmin')

@section('content')
@include('custom.message')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Publicar Documento - Potestades, competencias, facultades, atribuciones y tareas</div>

                <div class="card-body">

                    {!!Form::open(['route'=>'sdositb.store', 'method'=>'POST',
                    'class'=>'form-horizontal form-label-left','id'=>'demo-form2','files' => true])!!}
                    @csrf

                        <div>

                            <h3>Datos Requeridos</h3>
                            <div class="form-group">
                                <input type="text" class="form-control" id="tipo_norma" placeholder="Unidad u órgano Interno" name="unidad">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="numero" placeholder="Facultades Funciones o Atribuciones" name="facultades">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="denominacion" placeholder="Fuente Legal" name="fuente_legal">
                            </div>
                            <div class="form-group">
                                <label for="link"> Seleccione el Archivo: </label>
                                <input class="form-check-input"  name="link" type="file" accept="doc/*" id="link">
                            </div>

                            <hr>
                            {!!Form::submit('Publicar',['class'=>'btn btn-success', 'id'=>'submit-all'])!!}

                    {!!Form::close()!!}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection


<!-- /input mask -->