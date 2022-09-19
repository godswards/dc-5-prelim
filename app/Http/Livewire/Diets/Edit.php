<?php

namespace App\Http\Livewire\Diets;
use App\Models\Diet;
use Livewire\Component;

class Edit extends Component
{

    public $dietId;
    public $name,$food,$type;


    public function mount(){

        $this->name = $this->diet->name;
        $this->food = $this->diet->food;
        $this->type = $this->diet->type;

    }

    public function editDiet()
    {
        $this->validate([
            'name'        => ['required','string','max:255'],
            'food'        => ['required'],
            'type'         => ['required','string','max:255'],
        ]);

        $this->diet->update([
            'name'=> $this->name,
            'food'=> $this->food,
            'type'=> $this->type,
        ]);

        return redirect('/dashboard')->with('message', $this->diet->name .' updated successfully');
    }


    public function getDietProperty(){
        return Diet::find($this->dietId);
    }

    public function render()
    {
        return view('livewire.diets.edit');
    }
}
