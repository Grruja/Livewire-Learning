<div>
    <p>Count:</p>
    <button wire:click="reduceCount(2)">-</button>
    <span>{{ $count }}</span>
    <button wire:click="addCount(2)">+</button>
</div>
