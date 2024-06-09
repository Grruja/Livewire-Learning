<?php

namespace App\Livewire;

use App\Models\Posts;
use Livewire\Component;

class PostRow extends Component
{
    public Posts $post;

    public function archive(): void
    {
        $this->post->archive();
    }

    public function render()
    {
        return view('livewire.post-row');
    }
}
