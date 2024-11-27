<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;

class EditCar extends Component
{
    public $is_flash_showing = false;

    public $car_id;

    public Car $car_data;

    public $nome;

    public $marca;

    public $motor;

    public $combustivel;

    public function mount($id){
        $this->car_id = $id;

        $this->car_data = Car::where('id', $id)->first();

        $this->nome = $this->car_data->nome;
        $this->marca = $this->car_data->marca;
        $this->motor = $this->car_data->motor;
        $this->combustivel = $this->car_data->combustivel;
    }

    public function update(){
        $this->validate([
            'nome' => 'required',
            'marca' => 'required',
            'motor' => 'required',
            'combustivel' => 'required'
        ]);

        try{
            Car::where('id', $this->car_id)->update([
                'nome' => $this->nome,
                'marca' => $this->marca,
                'motor' => $this->motor,
                'combustivel' => $this->combustivel
            ]);

            $this->is_flash_showing = true;

            $this->redirect('/cars', navigate:true);
        }  catch(\Throwable $th){
            dd($th);
        }
    }

    public function render()
    {
        return view('livewire.edit-car');
    }
}
