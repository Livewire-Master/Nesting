<div>
    <h4>
        My Username: {{ $username }}
    </h4>

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
        @foreach($tasks as $taskItem)
            <livewire:task.item
                wire:key="task-item-{{ $loop->index }}"
                :task="$taskItem"
            />
        @endforeach
    </ul>

    <hr>

    <ul>
        @foreach($tasks as $taskItem)
            <livewire:task.item
                wire:key="base-task-item-{{ $loop->index }}"
                :task="$taskItem"
            />
        @endforeach
    </ul>
</div>
