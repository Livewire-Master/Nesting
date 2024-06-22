<?php

namespace App\Livewire\Task;

use Livewire\Component;

class Item extends Component
{
    public string $title;
    public bool $is_done;

    public function mount(array $task): void
    {
        $this->title = $task['title'];
        $this->is_done = $task['is_done'];
    }

    public function toggle(): void
    {
        $this->is_done = !$this->is_done;
    }
}
