<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;


class ProductoController extends Controller
{   

    public function productosDisponibles(){
        $products = Producto::all();
        return view('productos',compact('products'));
    }
    public function agregarProductos(){
        //muestra el formulario donde agregamos datos
        $categorias = Categoria::all();

        return view('agregar-productos',compact('categorias'));
    }
    public function agregar(Request $request){
        //guarda los datos agregados en el formulario

        //print_r($_POST); para ver si está funcionando en post
        $ultimoId = Producto::max('id');
        $products = new Producto();
        $products->codigo = $request->post('nombre').''.($ultimoId+1);

        $products->nombre = $request->post('nombre');
        $products->precio = $request->post('precio');
        $products->stock = $request->post('stock');
        $products->categoria_id = $request->post('categoria');
        $products->save();

        return redirect()->route('productos-disponibles');
    }

    public function edit($id){
        //sirve para mostrar un producto en un formulario y editar
        $product = Producto::find($id);
        return view('actualizar',compact('product'));
        
    }

    
}
