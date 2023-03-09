<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class ProfileInfos extends Component
{
    public $user;
    public $name,$fname,$lname,$email,$phone,$gender;
    public function mount(){
        $this->user=User::find(auth()->id());
        $this->name=$this->user->name;
        $this->fname=$this->user->fname;
        $this->lname=$this->user->lname;
        $this->email=$this->user->email;
        $this->phone=$this->user->phone;
        $this->gender=$this->user->gender;
    }

    public function UpdateInfos(){
        $this->validate([
            'name'=>'required|string',
            'fname'=>'required|string',
            'lname'=>'required|string',
            'phone'=>'required|string',
            'email'=>'required|unique:users,email,'.auth()->id()
        ]);
        User::Where('id',auth()->id())->update([
            'name'=>$this->name,
            'fname'=>$this->fname,
            'lname'=>$this->lname,
            'phone'=>$this->phone,
            'email'=>$this->email,
            'gender'=>$this->gender,
        ]);

        //listener
        $this->emit('UpdateHeader');
        $this->emit('UpdateProfile');

        //toastr
        $this->showToastr('Vos Informations personnelles ont été mises à jour avec succès.','success');
    }
    public function showToastr($message,$type){
        return $this->dispatchBrowserEvent('showToastr',[
            'type'=>$type,
            'message'=>$message
        ]);
    }
    public function render()
    {
        return view('livewire.admin.user.profile-infos');
    }
}
