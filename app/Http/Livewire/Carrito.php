<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\cliente;
use App\Models\ventas;
use App\Models\carrito1;
use App\Models\producto1;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class Carrito extends Component
{
    // public $cantidad="3",$total="600",$date="19/06/2022",$nombre,$email="maria.moreira@espam.edu.ec",$direccion="Pichincha",$telefono="0976886112";
    public function render()
    {
    
        return view('livewire.carrito');
    }
    // protected $rules=[
    //     'nombre'=>'required',
    //     'email'=>'required',
    //     'direccion'=>'required',
    //     'telefono'=>'required'
    // ];
    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
    // protected $messages = [
    //     'nombre.required' => 'El campo Nombre es obligatorio.',
    //     'email.required' => 'El campo Email es obligatorio.',
    //     'direccion.required' => 'El campo Direccion es obligatorio.',
    //     'telefono.required' => 'El campo Telefono es obligatorio.',
    // ];
    public function guardar(Request $request){
        
        // $this->validate();
        $clientes=new cliente();
        $clientes->nombre=$request->nombre;
        $clientes->direccion=$request->direccion;
        $clientes->estado=1;
        $clientes->telefono=$request->telefono;
        $clientes->email=$request->email;
        $clientes->save();
        $clientes=cliente::all();
        session()->flash('message', 'Datos ingresados correctamente.');
        $ventas=new ventas();
        $ventas->date=$request->date;
        $ventas->estado=1;
        $ventas->id_cliente=1;
        $ventas->save();
        $cars=new carrito1();
        $cars->cantidad=1;
        $cars->total=200;
        $cars->estado=1;
        $cars->id_ventas=1;
        $cars->id_producto=1;
        $cars->save();
        $carrito=carrito1::all();
        $productos=producto1::all();
        $pdf = app('dompdf.wrapper');
        return PDF::loadView('livewire.factura',['carrito'=>$carrito, 'clientes'=>$clientes,'productos'=>$productos])
        ->stream('Factura.pdf');
        

    }
    // public function factura(){
    //     $carrito=carrito1::all();
    //     $pdf = app('dompdf.wrapper');
    //     return PDF::loadView('livewire.factura',['carrito'=>$carrito])
    //     ->stream('Factura.pdf');
        
    // }
}
