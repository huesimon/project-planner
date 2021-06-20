<?php

namespace App\Http\Livewire;

use App\Models\Skill;
use Livewire\Component;

class SkillCreate extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.skill-create');
    }

    public function create()
    {
        for ($i = 1; $i <= 5; $i++) {
            Skill::create(['name' => $this->name, 'level' => $i]);
        }

        $this->name = null;
    }
}
