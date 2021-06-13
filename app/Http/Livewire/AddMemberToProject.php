<?php

namespace App\Http\Livewire;

use App\Models\Project;
use App\Models\User;
use Livewire\Component;

class AddMemberToProject extends Component
{
    public $selectedUser;  
    public Project $project;

    public function render()
    {
        return view('livewire.add-member-to-project', ['users' => User::all()]); // don't include users that's already in the project
    }

    public function add()
    {
        $this->project->users()->attach($this->selectedUser);

        // Send event to refresh list
    }
}
