<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class EditParticipantMetaData extends Component
{
    public $user_id;

    public function render()
    {
        $user = User::find($this->user_id);

        if($user == null) $user = collect([]);

        return view('livewire.edit-participant-meta-data', compact('user'));
    }
}
