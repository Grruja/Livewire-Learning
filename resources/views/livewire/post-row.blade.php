<tr @class(['archived' => $post->is_archived])>
    <td>{{ $post->title }}</td>
    <td>{{ $post->content }}</td>
    <td>
        @unless($post->is_archived)
            <button wire:click="archive" type="button">Archive</button>
        @endunless

        <button type="button"
                wire:click="$parent.delete({{ $post->id }})"
                wire:confirm="Are you sure you want to delete this post?"
        >
            Delete
        </button>
    </td>
</tr>
