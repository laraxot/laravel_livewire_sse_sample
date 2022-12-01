<?php

namespace App\Http\Livewire;

use App\Models\SSELog;
use Livewire\Component;

class Broad extends Component
{

    protected $listeners = ['eventSourceReceived' => 'eventSourceReceived'];



    public function render()
    {
        return view('livewire.broad');
    }

    public function try(){
        app(SSELog::class)->saveEvent('ciao','info','message');
        session()->flash('message', 'send message ['.now().']');
    }

    public function eventSourceReceived($data){
        dd($data);
        session()->flash('message', 'message received ['.now().']');
        //18:26:29
        //18:26:48
    }
}