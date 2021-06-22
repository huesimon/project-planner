<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <h2 class="text-xl font-bold">
        {{ $project->name }}
    </h2>
    <h3 class="text-lg font-semibold">Team Members:</h3>
    <div class="bg-gray-100 flex flex-col">
        @foreach ($project->users as $user)
            <div class="flex flex-row mb-4 justify-between items-center">
                <div class="flex flex-row space-x-4">
                    <div class="w-32 h-32 bg-red-500"></div>
                    <div class="flex flex-col">
                        <div class="">{{ $user->name }}</div>
                        <div class="">
                            @foreach ($user->skills as $skill)
                                {{ $skill->name }} ({{ $skill->level }})
                            @endforeach
                        </div>
                        <a class="text-blue-500 hover:text-blue-200"
                            href="tel:{{ $user->phone }}">{{ $user->phone }}</a>

                        <a class="text-blue-500 hover:text-blue-200"
                            href="mailto:{{ $user->email }}?subject={{ $project->name }}">{{ $user->email }}</a>

                        <div class="flex flex-col">
                            <div>{{ $user->joined_at->format('Y-m-d') }}</div>
                            <div>Joined {{ $user->joined_at->diffForHumans() }}</div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <button wire:click='delete({{ $user }})'
                        class="bg-red-500 rounded-full py-1 px-2 text-white mr-2">Delete</button>
                </div>
            </div>
    @endforeach
    </div>
</div>
