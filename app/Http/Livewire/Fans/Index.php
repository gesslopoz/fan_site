<?php

namespace App\Http\Livewire\Fans;

use Livewire\Component;
use App\Models\Fan;

class Index extends Component
{

    public function loadFans() {
        $fans = Fan::orderBy('name')->get();

        return compact('fans');
    }

    public function render()
    {
        return view('livewire.fans.index', $this->loadFans());
    }
}
