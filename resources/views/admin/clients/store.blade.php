@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Inserção De Cliente</h1>
    <hr>

    <form action="{{route('client.store')}}" method="POST">

    {{csrf_field()}}
        <p class="form-group">     
            <label>Nome do Cliente</label><br>
            <!-- acrescentado helper old para manter dados no formulario quando retornado mensagem de preenchmento obrigatorio -->
            <input type="text" name="name" value="{{old('name')}}" class="form-control @if($errors->has('name')) is-invalid @endif">
            @if($errors->has('name'))
                <span class="invalid-feedback">
                    <strong>{{$errors->first('name')}}</strong>
                </span>
            @endif   
        </p>
        <p class="form-group">       
            <label>Endereço</label><br>
            <input type="text" name="address" value="{{old('address')}}" class="form-control @if($errors->has('address')) is-invalid @endif">
            @if($errors->has('address'))
                <span class="invalid-feedback">
                    <strong>{{$errors->first('address')}}</strong>
                </span>
            @endif 
        </p>
        
        
        <input type="submit" value="Cadastrar" class="btn btn-success btn-lg">
    </form>
</div>
@endsection