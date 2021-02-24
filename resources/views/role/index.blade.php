@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Roles</div>

                <div class="card-body">

                    <a href="{{route('role.create')}}" class="btn btn-primary float-right">
                        Crear
                    </a>
                    @include('custom.message')

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Description</th>
                            <th scope="col">Full Access</th>
                            <th colspan="3"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($roles as $role)
                        <tr>
                            <th scope="row">{{$role->id}}</th>
                            <td>{{$role->name}}</td>
                            <td>{{$role->slug}}</td>
                            <td>{{$role->description}}</td>
                            <td>{{$role['full-access'] }}</td>
                            <td><a class="btn btn-info" href="{{route('role.show', $role->id)}}">Mostrar</a></td>
                            <td><a class="btn btn-success" href="{{route('role.edit', $role->id)}}">Editar</a></td>
                            <td><a class="btn btn-danger" href="{{route('role.edit', $role->id)}}">Eliminar</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{ $roles->links()}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
