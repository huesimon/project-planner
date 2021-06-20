<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class CreateProject extends Component
{
    public $name;

    public function create()
    {
        Project::create(['name' => $this->name]);
        $this->emit('projectAdded');
        $this->name = '';
    }
    public function render()
    {
        return view('livewire.create-project');
    }
}
