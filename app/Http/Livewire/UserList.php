<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Collection;

class UserList extends Component
{
    public $users;

    public $pageNumber = 1;

    public $hasMorePages;

    public function mount()
    {
        $this->users = new Collection();

        $this->loadUsers();
    }

    public function loadUsers()
    {
        $users = User::paginate(6, ['*'], 'page', $this->pageNumber);

        $this->pageNumber += 1;

        $this->hasMorePages = $users->hasMorePages();

        $this->users->push(...$users->items());
    }

    public function render()
    {
        return view('livewire.user-list',[
            'users' => $this->users,
        ])->extends('layouts.app');

    }
}
