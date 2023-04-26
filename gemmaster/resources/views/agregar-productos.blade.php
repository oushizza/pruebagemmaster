@extends('base')
@section('content')
<div class="w-full bg-gray-200  p-4 h-screen flex justify-center">
    <form action="{{ route('agregar') }}" method="post" class="w-1/2 p-4 bg-gray-100">
        @csrf
        <div class="flex justify-center m-2 bg-white p-4">
            Conpletar datos de producto
        </div>
        <div class="flex justify-center flex-col m-2">
            <label for="nombre">Nombre</label>
            <input type="text" placeholder="escribe nombre del producto" id="nombre" name="nombre">
        </div>
        <div class="flex justify-center flex-col m-2">
            <label for="precio">Precio</label>
            <input type="number"  id="precio" name="precio">
        </div>
        <div class="flex justify-center flex-col m-2">
            <label for="stock">Stock</label>
            <input type="number"  id="stock" name="stock">
        </div>
        <div class="flex justify-center flex-col m-2">
            <label for="categoria">Categoria</label>
            
            <select name="categoria" id="cars">
                <option value="">Seleccione categoria</option>
                @foreach ($categorias as $itemcategorias)
                <option value="{{ $itemcategorias->id }}">{{ $itemcategorias->nombre }}</option>
                @endforeach
            </select>
        </div>
       
        
        <div class="flex justify-center flex-col m-2">
            <button type="submit" class="p-2 bg-blue-500">Agregar</button>    
        </div>
    </form>
    
</div>
@endsection