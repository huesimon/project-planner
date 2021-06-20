<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectComponent extends Component
{
    protected $listeners = ['projectMemberAdded' => 'refreshProjectMembers'];

    public Project $project;
    public $users;

    public function render()
    {
        return view('livewire.project-component');
    }

    public function refreshProjectMembers()
    {
        $this->project = Project::find($this->project->id);
    }
}
