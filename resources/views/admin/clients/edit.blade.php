@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Edição De Cliente</h1>
    <hr>
    <form action="{{route('client.update', $client->id)}}" method="post">

    {{csrf_field()}}
        <p class="form-group">    
            <label>Nome do Cliente</label><br>
            <input type="text" name="name" value="{{$client->name}}" class="form-control @if($errors->has('name')) is-invalid @endif"> 
            @if($errors->has('name'))
                <span class="invalid-feedback">
                    <strong>{{$errors->first('name')}}</strong>
                </span>
            @endif   
        </p>
        <p class="form-group">   
            <label>Endereço</label><br>
            <input type="text" name="address" value="{{$client->address}}" class="form-control @if($errors->has('address')) is-invalid @endif"> 
            @if($errors->has('address'))
                <span class="invalid-feedback">
                    <strong>{{$errors->first('address')}}</strong>
                </span>
            @endif 
        </p>
       
        
        <input type="submit" value="atualizar" class="btn btn-success btn-lg">
    </form>
</div>
@endsection