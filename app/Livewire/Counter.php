<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class Counter extends Component
{
    public int $count = 1;

    public function addCount(int $number): void
    {
        $this->count = $this->count + $number;
    }

    public function reduceCount(int $number): void
    {
        $this->count = $this->count - $number;
    }

    public function render(): View
    {
        return view('livewire.counter');
    }
}
