<h1>Edição De Restaurante</h1>
<hr>

<form action="{{route('restaurant.update', $restaurant->id)}}" method="post">
{{csrf_field()}}
    <p>     
        <label>Nome do Restaurante</label><br>
        <input type="text" name="name" value="{{$restaurant->name}}"> 
    </p>
    <p>     
        <label>Endereço</label><br>
        <input type="text" name="address" value="{{$restaurant->address}}> 
    </p>
    <p>     
        <label>Fale sobre o  Restaurante</label><br>
        <textarea name="description" id="" cols="30" rows="10">{{$restaurant->description}}</textarea> 
    </p>
    
    <input type="submit" value="atualizar">
</form>