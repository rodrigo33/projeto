<table>
<thead>
<th>#</th>
<th>nome</th>
<th>criado em </th>
<th>açoes</th>
</thead>

<tbody>
@foreach($restaurants as $r)
<tr>
<td>{{$r->id}}</td>
<td>{{$r->name}}</td>
<td>{{$r->created_at}}</td>
<td>
<a href="{{route('restaurant.edit', ['restaurant' => $r->id])}}">editar</a>
<a href="{{route('restaurant.remove', ['id' => $r->id])}}">remover</a>
</td>
</tr>
@endforeach
</tbody>
</table>