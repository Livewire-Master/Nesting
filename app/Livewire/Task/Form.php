<?php

namespace App\Livewire\Task;

use Livewire\Attributes\On;
use Livewire\Component;

class Form extends Component
{
    public array $tasks = [];
    public string $task;

    public string $username;

    public function addTask(): void
    {
        $this->tasks[] = [
            'title' => $this->task,
            'is_done' => false
        ];
        $this->reset('task');
    }

    #[On('toggle-task')]
    public function toggle(int $task_index): void
    {
        $this->tasks[$task_index]['is_done'] = !$this->tasks[$task_index]['is_done'];
    }
}
