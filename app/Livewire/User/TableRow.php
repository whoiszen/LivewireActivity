<?php

namespace App\Livewire\User;

use Livewire\Component;

class TableRow extends Component
{
    public $user;

    public function archive()
    {
        $this->user->update(['is_archived'=>true]);
    }
    public function render()
    {
        return view('livewire.user.table-row');
    }
}
