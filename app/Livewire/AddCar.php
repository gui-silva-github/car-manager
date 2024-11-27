<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;

class AddCar extends Component
{
    public $nome = '';

    public $marca = '';

    public $motor = '';

    public $combustivel = '';

    public function render()
    {
        return view('livewire.add-car');
    }

    public function saveCar(){
        $this->validate([
            'nome' => 'required',
            'marca' => 'required',
            'motor' => 'required',
            'combustivel' => 'required'
        ]);

       try{

        $new_car = new Car;
        $new_car->nome = $this->nome;
        $new_car->marca = $this->marca;
        $new_car->motor = $this->motor;
        $new_car->combustivel = $this->combustivel;

        $new_car->save();

        return $this->redirect('/cars', navigate:true);

       } catch(\Exception $e){
        dd($e);
       }
    }
}
