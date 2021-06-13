<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <h2 class="text-xl font-bold">
        Create Project
    </h2>
    <div class="flex flex-row justify-between">
        <input wire:model='name' type="text" placeholer="Project Name">
        <button wire:click='create' class="bg-blue-500 rounded-full p-2 text-white">Create</button>
    </div>
</div>