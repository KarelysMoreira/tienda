<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\cliente;
use App\Models\ventas;
use App\Models\carrito1;
use Barryvdh\DomPDF\Facade as PDF;

class Carrito extends Component
{
    public $cantidad="3",$total="600",$date="19/06/2022",$nombre,$email="maria.moreira@espam.edu.ec",$direccion="Pichincha",$telefono="0976886112";
    public function render()
    {
    
        return view('livewire.carrito');
    }
    protected $rules=[
        'nombre'=>'required',
        'email'=>'required',
        'direccion'=>'required',
        'telefono'=>'required'
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    protected $messages = [
        'nombre.required' => 'El campo Nombre es obligatorio.',
        'email.required' => 'El campo Email es obligatorio.',
        'direccion.required' => 'El campo Direccion es obligatorio.',
        'telefono.required' => 'El campo Telefono es obligatorio.',
    ];
    public function guardar(){
        dd($this->nombre);
        $this->validate();
        $clientes=new cliente();
        $clientes->nombre=$this->nombre;
        $clientes->direccion=$this->direccion;
        $clientes->estado=1;
        $clientes->telefono=$this->telefono;
        $clientes->email=$this->email;
        $clientes->save();
        session()->flash('message', 'Datos ingresados correctamente.');
        $ventas=new ventas();
        $ventas->date=$this->date;
        $ventas->estado=1;
        $ventas->id_cliente=1;
        $ventas->save();
        $cars=new carrito1();
        $cars->cantidad=$this->cantidad;
        $cars->total=$this->total;
        $cars->estado=1;
        $cars->id_ventas=1;
        $cars->id_producto=2;
        $cars->save();
        $carrito=carrito1::all();
        $pdf = app('dompdf.wrapper');
        return PDF::loadView('livewire.factura',['carrito'=>$carrito])
        ->stream('Factura.pdf');
        

    }
    // public function factura(){
    //     $carrito=carrito1::all();
    //     $pdf = app('dompdf.wrapper');
    //     return PDF::loadView('livewire.factura',['carrito'=>$carrito])
    //     ->stream('Factura.pdf');
        
    // }
}
