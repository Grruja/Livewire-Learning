<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public string $todo = '';

    public array $todos = [
        'Wash dishes',
        'Make bread',
    ];

    public function add(): void
    {
        $this->todos[] = $this->todo;
        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.todo');
    }
}
