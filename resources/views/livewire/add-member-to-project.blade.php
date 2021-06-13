<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <h2 class="text-xl font-bold">
        Add team member
    </h2>
    <div class="flex flex-row items-center justify-between">
        
        <div class="flex flex-row space-x-4 items-center">
            <p class="text-lg">User</p>
            <select wire:model="selectedUser" id="">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" class="">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="flex flex-row spapce-x-4 items-center">
            <p class="text-lg">Skills</p>
            <select name="" id="">
                <option value="" class="">Php</option>
            </select>
        </div>
        <button wire:click='add' class="bg-blue-500 rounded-full py-2 px-2 text-white">Add</button>
    </div>
</div>