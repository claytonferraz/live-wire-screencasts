<div>
    {{-- aqui ele é PHP --}}


    <input wire:model="name" type="text">

    <input wire:model='loud' type="checkbox" id="">
    <select wire:model='greeting' multiple>
        <option> Hello</option>
        <option> Goodbye</option>
        <option> Adios</option>
    </select>

    {{ implode(',',$greeting)}}  {{ strtoupper($name) }} @if ($loud) ! @endif

    {{-- <button wire:click="resetName($event.target.innerText)" > {{$name}}</button> --}}
    {{-- <button wire:mouseover="resetName('Bingo')" > {{$name}}</button> --}}
    {{-- <button wire:custom-event="resetName('Bingo')" > {{$name}}</button> --}}
    
    
    {{-- <form action="#" wire:submit.prevent="resetName('Bingo')">
    
   
    <button > Mudar nome</button>
     </form> --}}

    {{-- sem funcao no controller, passa direto --}}
    <form action="#" wire:submit.prevent="$set('name','Bingo')">
    
   
    <button > Mudar nome</button>
     </form>

</div>
