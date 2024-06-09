<div>
    <h1>New Post</h1>

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
</div>
