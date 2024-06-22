<div>
    <h4>
        My Username: {{ $username }}
    </h4>

    <livewire:task.stat
        :tasks="$tasks"
    />

    <x-task.item.stat
        :tasks="$tasks"
    />
    <hr>

    <form wire:submit.prevent="addTask">
        <div>
            <label for="input-task">
                Task
            </label>
            <input
                type="text"
                id="input-task"
                name="task"
                wire:model="task"
            >
        </div>
    </form>

    <ul>
        @foreach($tasks as $taskIndex => $taskItem)
            <livewire:task.item
                wire:key="task-item-{{ $loop->index }}"
                :task="$taskItem"
                :task_index="$taskIndex"
            />
        @endforeach
    </ul>

    <hr>

    <ul>
        @foreach($tasks as $taskIndex => $taskItem)
            <li>{{ json_encode($taskItem) }}</li>
        @endforeach
    </ul>
</div>
