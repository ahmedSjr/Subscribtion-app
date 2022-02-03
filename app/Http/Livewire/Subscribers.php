<?php

namespace App\Http\Livewire;
use App\Models\Subscriber;

use Livewire\Component;

class Subscribers extends Component
{
    public $search = '';

    protected $queryString = [
        'search' => ['except' => '']
    ];
    public function delete(Subscriber $subscriber){
        $subscriber->delete();
    }
    public function render()
    {
        $subscriber = Subscriber::where('email', 'like', "%{$this->search}%")->get();
        return view('livewire.subscribers')->with([
            'subscribers' => $subscriber,
        ]);
    }
}
