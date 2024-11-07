<div class="flex p-10 items-center flex-col">
    <h1 class="text-3xl mb-2">{{$number}}</h1>
    <div>
    <button wire:click="decrement" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
    Decrement</button>
    <button wire:click="increment" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
    Increment</button>
</div>
</div>
