<?php

namespace App\Livewire;

use App\Models\Posts;
use Livewire\Component;

class ShowPosts extends Component
{
    public function delete(Posts $post): void
    {
        $post->delete();
    }

    public function render()
    {
        return view('livewire.show-posts', [
            'posts' => Posts::all(),
        ]);
    }
}
