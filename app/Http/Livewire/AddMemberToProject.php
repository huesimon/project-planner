<?php

namespace App\Http\Livewire;

use App\Models\Project;
use App\Models\User;
use App\Models\Skill;
use Livewire\Component;

class AddMemberToProject extends Component
{
    public $selectedUser;  
    public $skills;
    public $users;
    public $selectedSkill;
    public Project $project;

    public function render()
    {
        return view('livewire.add-member-to-project');
    }

    public function updatedSelectedSkill($value)
    {
        // Not happy with this, could do it all with eloquent, but yeah... works for now
        $users = [];
        foreach (User::with('skills')->get() as $user) {
            foreach ($user->skills as $skill) {
                if ($skill->id == $value) {
                    $users[] = $user;
                }
            }
        }
        $this->users = collect($users); 
        $this->selectedUser = $this->users->first();
    }

    public function add()
    {
        $this->project->users()->attach($this->selectedUser);

        // Send event to refresh list
        $this->emit('projectMemberAdded');
    }
}
