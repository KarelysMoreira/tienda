<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\producto1;
use App\Models\categorias1;

use Illuminate\Support\Facades\DB;
class Products extends Component
{
   
    public function render($id)
    {
       
        $categorias=categorias1::find($id);
        $productos=DB::table('productos')
        ->join('categorias', 'productos.id_categoria','=','categorias.id')
        ->select('productos.*','categorias.category')
        ->where('categorias.id','=',$id)
        ->get();
        return view('livewire.productos',['categoria'=>$categorias,'products'=>$productos]); 
    }
    public function enviar($id){
        
        $product=producto1::find($id);
        return view('livewire.carrito',['product'=>$product]);
    }
    public function categorys($id){
        $categorias=categorias1::find($id);
        $productos=DB::table('productos')
        ->join('categorias', 'productos.id_categoria','=','categorias.id')
        ->select('productos.*','categorias.category')
        ->where('categorias.id','=',$id)
        ->get();
        return view('productos',['categoria'=>$categorias,'products'=>$productos]); 

    }
    

}
