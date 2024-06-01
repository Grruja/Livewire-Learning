<div>
    <form wire:submit="add">
        <input wire:model.change="todo" type="text">
        <button>Add</button>
    </form>

    <span>Current input value: {{ $todo }}</span>

    <ul>
        @foreach($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
