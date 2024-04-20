<div>
    <h1>Meu Contador!</h1>

    <button type="button" wire:click="increment">+</button>
    <p>Valor Atual: {{ $counter }}</p>
    <button type="button" wire:click="decrement">-</button>
</div>
