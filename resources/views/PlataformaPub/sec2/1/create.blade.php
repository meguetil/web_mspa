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
                <div class="card-header">Publicar Documento - Normas Organicas</div>

                <div class="card-body">

                    {!!Form::open(['route'=>'sdosita.store', 'method'=>'POST',
                    'class'=>'form-horizontal form-label-left','id'=>'demo-form2','files' => true])!!}
                    @csrf

                        <div>

                            <h3>Datos Requeridos</h3>
                            <div class="form-group">
                                <input type="text" class="form-control" id="tipo_norma" placeholder="Tipo de Norma" name="tipo_norma">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="numero" placeholder="Número de Norma" name="numero">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="denominacion" placeholder="Denominación de Norma" name="denominacion">
                            </div>
                            <div class="form-group">
                          <!--      {!! Form::date('name', \Carbon\Carbon::now());!!} -->


                                <input type="text" class="form-control" data-inputmask="'mask': '99-99-9999'" id="fecha_pub" placeholder="Fecha de Publicación en el D.O y/o Dictación" name="fecha_pub">
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