<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subscriber;
class Lara extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|email:filter|unique:subscribers,email'
    ];

    public function subscribe(){
        $this->validate();
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
