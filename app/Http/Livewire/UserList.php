<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    public int $paginationCount = 10;

    public string $sortUsersByName = 'asc';

    public $search = null;

    public $shownTableTitles = [
        'id', 'name', 'email', 'email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at'
    ];

    public function render()
    {
        $users = User::select($this->shownTableTitles);
        if($this->search != null)
        {
            $users = $users->where('name', 'like', $this->search . '%');
        }

        $users = $users->orderBy('name', $this->sortUsersByName)
                    ->paginate($this->paginationCount);

        return view('livewire.user-list',[
                'users' => $users,
            ])->extends('layouts.app')->section('content');

    }
}
