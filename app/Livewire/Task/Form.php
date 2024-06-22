<?php

namespace App\Livewire\Task;

use Livewire\Component;

class Form extends Component
{
    public array $tasks = [];
    public string $task;

    public string $username;

    public function addTask(): void
    {
        $this->tasks[] = $this->task;
        $this->reset('task');
    }
}
