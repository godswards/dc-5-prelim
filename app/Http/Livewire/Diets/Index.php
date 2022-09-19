<?php

namespace App\Http\Livewire\Diets;

use App\Models\Diet;
use Livewire\Component;

class Index extends Component
{
    public function loadFood() {
        $diets = Diet::orderBy('name')->get();

        return compact('diets');
    }

    public function render()
    {
        return view('livewire.diets.index', $this->loadFood());
    }
}
