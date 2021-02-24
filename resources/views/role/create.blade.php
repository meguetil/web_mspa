@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Crear un Rol</h2></div>

                <div class="card-body">

                    @include('custom.message')
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="{{route('role.store')}}" method="POST">
                        @csrf
                        <div>

                            <h3>Datos Requeridos</h3>
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="Nombre de Rol" name="name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="slug" placeholder="slug" name="slug">
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" placeholder="Descripción" name="description" id="description" rows="3"></textarea>
                            </div>

                            <hr>

                            <h4>Acceso Total</h4>
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="fullaccessyes" name="full-access" class="custom-control-input" value="yes">
                            <label class="custom-control-label" for="fullaccessyes">Si</label>
                            </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="fullaccessno" name="full-access" class="custom-control-input" value="no" checked>
                            <label class="custom-control-label" for="fullaccessno">No</label>
                        </div>

                            <hr>
                            <h4>Lista de Permisos</h4>
                                @foreach($permissions as $permission)
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                       class="custom-control-input"
                                       id="permission_{{$permission->id}}"
                                        value="{{$permission->id}}"
                                        name="permission[]">
                                <label class="custom-control-label" for="permission_{{$permission->id}}">
                                {{$permission->id}}
                                -
                                {{$permission->name}}

                                <em>({{$permission->description}})</em>
                                </label>
                            </div>

                            @endforeach
                            <hr>
                            <input class="btn btn-primary" type="submit" value="Guardar">



                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
