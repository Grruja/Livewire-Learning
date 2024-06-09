<div>
    <h2>New Post</h2>

    <form wire:submit="save">
        <label for="title">Title</label>
        <br>
        <input id="title" wire:model="title" type="text">
        <br>
        @error('title') <em>{{ $message }}</em> @enderror

        <br>
        <label for="content">Content</label>
        <br>
        <textarea wire:model="content"></textarea>
        <br>
        @error('content') <em>{{ $message }}</em> @enderror

        <br>
        <button type="submit">Create</button>
    </form>

    <hr>

    <div>
        <h3>Alpine Counter</h3>
        <div x-data="{ count: 0 }">
            <button x-on:click="count--">-</button>
            <span x-text="count"></span>
            <button x-on:click="count++">+</button>
        </div>
    </div>
</div>
