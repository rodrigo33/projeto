@extends('layouts.app')

@section('content')
	<div class="container">
		<a href="{{route('client.new')}}" class="float-right btn btn-success">Novo</a>		
		<h1 class="float-left">Clientes</h1>
		<table class="table table-striped">
				<thead>
				<tr>
					<th>#</th>				
					<th>Nome</th>
					<th>Criado em </th>
					<th>Ações</th>
				</tr>
				</thead>
				<tbody>
				@foreach($clients as $r)
					<tr>
						<td>{{$r->id}}</td>
						<td>{{$r->name}}</td>
						<td>{{$r->created_at}}</td>
						<td>
							<a href="{{route('client.edit', ['id' => $r->id])}}" class="btn btn-primary">Editar</a>

							<a href="{{route('client.remove', ['id' => $r->id])}}" class="btn btn-danger">
							Excluir</a>
						</td>
					</tr>
				@endforeach
				</tbody>
		</table>
	</div>

@endsection
