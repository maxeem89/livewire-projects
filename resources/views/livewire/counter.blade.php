<div class="p-16 flex justify-center gap-6 items-center">
    {{-- Be like water. --}}
    <button wire:click="increment" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white ">+</button>
    <span>{{$count}}</span>
    <button wire:click="decrement" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white ">-</button>
</div>
