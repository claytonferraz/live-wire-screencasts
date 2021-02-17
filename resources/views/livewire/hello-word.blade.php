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
</div>
