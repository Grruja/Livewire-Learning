<?php

namespace App\Livewire;

use App\Models\Posts;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreatePost extends Component
{
    #[Rule('required', message: 'Yo, add title')]
    #[Rule('min:2', message: 'Yo, add at least 2 characters')]
    public string $title = '';

    #[Rule('required', as: 'paragraph')]
    public string $content = '';

    public function save(): void
    {
        $this->validate();

        Posts::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->redirect(route('posts'));
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
