@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Inserção De Restaurante</h1>
    <hr>

    <form action="{{route('restaurant.store')}}" method="POST">

    {{csrf_field()}}
        <p class="form-group">     
            <label>Nome do Restaurante</label><br>
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
        <p class="form-group">      
            <label>Fale sobre o  Restaurante</label><br>
            <textarea name="description" id="" cols="30" rows="10" class="form-control @if($errors->has('description')) is-invalid @endif">{{old('description')}}</textarea> 
            @if($errors->has('description'))
                <span class="invalid-feedback">
                    <strong>{{$errors->first('description')}}</strong>
                </span>
            @endif
        </p>
        
        <input type="submit" value="Cadastrar" class="btn btn-success btn-lg">
    </form>
</div>
@endsection