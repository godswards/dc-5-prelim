<?php

namespace App\Http\Livewire\Diets;

use App\Models\Diet;
use Livewire\Component;

class Create extends Component
{
    public $name,$food,$type;

    public function addDiet(){

            $this->validate([
                'name'        => ['required','string','max:255'],
                'food'         => ['required'],
                'type'          => ['required','string','max:255'],
            ]);

            Diet::create([
                'name'        => $this->name,
                'food'         => $this->food,
                'type'          => $this->type,
            ]);

            return redirect('/dashboard')->with('message', $this->name . ' added successfully');
    }



    public function render()
    {
        return view('livewire.diets.create');
    }
}
