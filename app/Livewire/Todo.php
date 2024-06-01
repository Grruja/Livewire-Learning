<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todo')]
class Todo extends Component
{
    public string $todo = '';

    public array $todos = [
        'Wash dishes',
        'Make bread',
    ];

    public function updatedTodo(string $value): void
    {
        $this->todo = strtoupper($value);
    }

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
