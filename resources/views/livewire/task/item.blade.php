<li>
    <p>
        {{ $title }}
    </p>
    <p>
        status: {{ $is_done ? 'Done' : 'Pending' }}
    </p>
    <button wire:click.prevent="toggle">
        Toggle Status
    </button>
</li>
