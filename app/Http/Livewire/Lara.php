<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subscriber;
class Lara extends Component
{
    public $email;

    public function subscribe(){
        $subscriber = Subscriber::create([
            'email' => $this->email
        ]);

        $this->reset('email');
    }
    public function render()
    {
        return view('livewire.lara');
    }
}
