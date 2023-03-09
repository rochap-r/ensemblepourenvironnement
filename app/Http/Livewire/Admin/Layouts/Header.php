<?php

namespace App\Http\Livewire\Admin\Layouts;

use App\Models\User;
use Livewire\Component;

class Header extends Component
{    
    protected $listeners=[
        'UpdateHeader'=>'$refresh'
    ];  
    public $user;
    public function mount(){
        $this->user=User::find(auth()->id());
    }
    public function render()
    {
        return view('livewire.admin.layouts.header');
    }
}
