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
            <x-task.item :title="$taskItem"/>
        @endforeach
    </ul>
</div>
