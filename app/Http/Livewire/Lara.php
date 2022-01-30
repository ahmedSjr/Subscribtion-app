<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Lara extends Component
{
    public $email;
    public function subscribe(){
        \Log::debug($this->email);
    }
    public function render()
    {
        return view('livewire.lara');
    }
}
