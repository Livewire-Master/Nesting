<?php

namespace App\Livewire\Task;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class Stat extends Component
{
    #[Reactive]
    public array $tasks;
}
