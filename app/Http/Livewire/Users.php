<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Users extends Component
{
    public $deleteId = '';


    public function deleteId($id)
    {
        $this->deleteId = $id;
        $this->delete();
    }

    public function delete()
    {
        $user = User::find($this->deleteId)->delete();
        
    }
    public function render()
    {
        return view('livewire.users',[
            'users' => User::all()
        ]);
    }
}
