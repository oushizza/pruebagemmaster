@extends('base')
@section('content')
<div class="flex justify-center items-center">
    <a href="{{ route('agregar-productos') }}" class="bg-blue-200 p-2 m-2">Agregar productos</a>
</div>
<div class="flex justify-center">
    <table class="table-auto border border-red-500 w-1/2 text-center">
        <thead class="p-4">
          <tr>
            <th>id</th>
            <th>nombre</th>
            <th>precio</th>
            <th>stock</th>
            <th>categoria</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody class="p-2">
            @foreach ($products as $itemdatos)
                <tr>
                    <td>{{ $itemdatos->id }}</td>
                    <td>{{ $itemdatos->nombre }}</td>
                    <td>{{ $itemdatos->precio }}</td>
                    <td>{{ $itemdatos->stock }}</td>
                    <td>{{ $itemdatos->categoria_id }}</td>
                    <td>
                        <form action="" method="get"> <!-- esto es para mandarle a la ruta y elparametro del producto con el que trabajaremos route('edit',$itemdatos->id)-->
                            @csrf
                            <button type="submit" class="bg-blue-500 rounded-lg p-2">Editar</button>
                        </form>
                    </td>
                    <td>
                        <form action="" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="bg-blue-500 rounded-lg p-2">Eliminar</button>
                        </form>
                    </td>
    
                </tr>
            @endforeach
          
          
          
        </tbody>
    </table>

</div>
@endsection