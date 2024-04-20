{{-- This component counter.blade is a FATHER --}}
<div>
    <h1>Meu Contador!</h1>

    <button type="button" wire:click="increment">+</button>
    <p>Valor Atual: {{ $counter }}</p>
    <button type="button" wire:click="decrement">-</button>

    {{-- Call componet accepted-types.blade is a SUN in this case --}}
    {{-- @livewire('accepted-types') --}}
    <livewire:accepted-types :fruits="['apple', 'banana', 'orange']"/> {{-- :fruits subscreve em segundo plano --}}
</div>
