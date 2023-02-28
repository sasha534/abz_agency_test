<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UserList extends Component
{
    public $perPage = 6;

    public function loadMore()
    {
        $this->perPage += 6;
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.user-list',[
            'users' => User::query()->paginate($this->perPage),
        ]);
    }
}
