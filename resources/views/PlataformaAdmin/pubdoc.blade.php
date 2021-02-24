@extends('platadmin')

@section('content')
<div class="x_title">
    <h2>Gestor de Archivos    -  <small>Seleccione el destino de los archivos</small></h2>

    <div class="clearfix"></div>
    <div class="x_content">
        <br />
        {!!Form::open(['route'=>'documento.store', 'method'=>'POST',
        'class'=>'form-horizontal form-label-left','id'=>'demo-form2'])!!}
            @csrf
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Menú :</label>
                <div class="col-md-9 col-sm-9 col-xs-12">

                   <select class="select2_group form-control" name="seccion">
                        @foreach($items as $item)
                        <optgroup label="{{$item->id}}. {{$item->nombre_item}}">

                            @if($item->id == 1)
                                @foreach($sec1 as $seccion)
                                <option value="{{$seccion->id}}">{{$seccion->titulo_seccion}}</option>
                                @endforeach
                            @endif
                            @if($item->id == 2)
                                @foreach($sec2 as $seccion)
                                <option value="{{$seccion->id}}">{{$seccion->titulo_seccion}}</option>
                                @endforeach
                            @endif
                            @if($item->id == 3)
                            @foreach($sec3 as $seccion)
                            <option value="{{$seccion->id}}">{{$seccion->titulo_seccion}}</option>
                            @endforeach
                            @endif
                            @if($item->id == 4)
                            @foreach($sec4 as $seccion)
                            <option value="{{$seccion->id}}">{{$seccion->titulo_seccion}}</option>
                            @endforeach
                            @endif
                            @if($item->id == 5)
                            @foreach($sec5 as $seccion)
                            <option value="{{$seccion->id}}">{{$seccion->titulo_seccion}}</option>
                            @endforeach
                            @endif
                            @if($item->id == 6)
                            @foreach($sec6 as $seccion)
                            <option value="{{$seccion->id}}">{{$seccion->titulo_seccion}}</option>
                            @endforeach
                            @endif
                            @if($item->id == 7)
                            @foreach($sec7 as $seccion)
                            <option value="{{$seccion->id}}">{{$seccion->titulo_seccion}}</option>
                            @endforeach
                            @endif
                            @if($item->id == 8)
                            @foreach($sec8 as $seccion)
                            <option value="{{$seccion->id}}">{{$seccion->titulo_seccion}}</option>
                            @endforeach
                            @endif
                            @if($item->id == 9)
                            @foreach($sec9 as $seccion)
                            <option value="{{$seccion->id}}">{{$seccion->titulo_seccion}}</option>
                            @endforeach
                            @endif
                            @if($item->id == 10)
                            @foreach($sec10 as $seccion)
                            <option value="{{$seccion->id}}">{{$seccion->titulo_seccion}}</option>
                            @endforeach
                            @endif
                            @if($item->id == 11)
                            @foreach($sec11 as $seccion)
                            <option value="{{$seccion->id}}">{{$seccion->titulo_seccion}}</option>
                            @endforeach
                            @endif
                            @if($item->id == 12)
                            @foreach($sec12 as $seccion)
                            <option value="{{$seccion->id}}">{{$seccion->titulo_seccion}}</option>
                            @endforeach
                            @endif
                            @if($item->id == 13)
                            @foreach($sec13 as $seccion)
                            <option value="{{$seccion->id}}">{{$seccion->titulo_seccion}}</option>
                            @endforeach
                            @endif
                            @if($item->id == 14)
                            @foreach($sec14 as $seccion)
                            <option value="{{$seccion->id}}">{{$seccion->titulo_seccion}}</option>
                            @endforeach
                            @endif
                            @if($item->id == 15)
                            @foreach($sec15 as $seccion)
                            <option value="{{$seccion->id}}">{{$seccion->titulo_seccion}}</option>
                            @endforeach
                            @endif
                            @if($item->id == 16)
                            @foreach($sec16 as $seccion)
                            <option value="{{$seccion->id}}">{{$seccion->titulo_seccion}}</option>
                            @endforeach
                            @endif
                            @if($item->id == 17)
                            @foreach($sec17 as $seccion)
                            <option value="{{$seccion->id}}">{{$seccion->titulo_seccion}}</option>
                            @endforeach
                            @endif
                            @if($item->id == 18)
                            @foreach($sec18 as $seccion)
                            <option value="{{$seccion->id}}">{{$seccion->titulo_seccion}}</option>
                            @endforeach
                            @endif
                            @if($item->id == 19)
                            @foreach($sec19 as $seccion)
                            <option value="{{$seccion->id}}">{{$seccion->titulo_seccion}}</option>
                            @endforeach
                            @endif
                            @if($item->id == 20)
                            @foreach($sec20 as $seccion)
                            <option value="{{$seccion->id}}">{{$seccion->titulo_seccion}}</option>
                            @endforeach
                            @endif
                            @if($item->id == 21)
                            @foreach($sec21 as $seccion)
                            <option value="{{$seccion->id}}">{{$seccion->titulo_seccion}}</option>
                            @endforeach
                            @endif


                        </optgroup>
                        @endforeach
                    </select>

                </div>
            </div>

            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    {!!Form::submit('Cargar',['class'=>'btn btn-success', 'id'=>'submit-all'])!!}

                </div>
            </div>
            {!!Form::close()!!}
    </div>
</div>

@endsection
