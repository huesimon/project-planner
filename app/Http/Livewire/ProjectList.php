<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectList extends Component
{
    public $projects;

    protected $listeners = ['projectAdded' => 'refreshProjects'];

    public function render()
    {
        return view('livewire.project-list');
    }

    public function refreshProjects()
    {
        $this->projects = Project::all();
    }
}
