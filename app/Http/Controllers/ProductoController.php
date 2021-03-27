<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;
class ProductoController extends Controller
{
    //
    public function index()
    {
        $product = DB::table('Producto')
        ->select('*')
        ->where('state','=','1')
        ->paginate(5);
        return view('Producto/index',compact('product'));
    }
    public function create()
    {
        return view('Producto.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:Producto,name',
            'price' => 'required|numeric',
        ]);
        $producto = new Producto();
        $producto->name = ucwords(strtolower($request->name));
        $producto->price = $request->price;
        $producto->save();
        return redirect()->route('producto.index');
    }
}
