<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserList extends Component
{
    public $perPage = 10;
    public $search = "";
    public function render()
    {
        return view('livewire.user-list', [
            'title' => 'User - List',
            'users' => User::search($this->search)
                ->paginate($this->perPage)
        ]);
    }
}
