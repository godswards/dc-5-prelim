<?php

namespace App\Http\Livewire\Diets;
use App\Models\Diet;
use Livewire\Component;

class Delete extends Component
{

    public $dietId;



    public function getDietProperty(){
        return Diet::find($this->dietId);
    }

    public function render()
    {
        return view('livewire.diets.delete');
    }
    public function delete() {
        $this->diet->delete();

        return redirect('/dashboard')->with('message', $this->diet->name . ' deleted successfully');
    }

    public function back() {
        return redirect('/dashboard');
    }
}
