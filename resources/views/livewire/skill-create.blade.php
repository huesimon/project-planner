<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <h2 class="text-xl font-bold">
        Create skill
    </h2>
    <div class="flex flex-row justify-between">
        <div class="">
            <input wire:model='name' type="text" placeholer="Skill Name">
        </div>
        <button wire:click='create' class="bg-blue-500 rounded-full p-2 text-white">Create</button>
</div>