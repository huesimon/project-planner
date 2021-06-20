<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <h2 class="text-xl font-bold">
        {{ $project->name }}
    </h2>
    <h3 class="text-lg font-semibold">Team Members:</h3>
    <div class="bg-gray-100 flex flex-col">
        @foreach ($project->users as $user)
            <div class="flex flex-row justify-between">
                <div>{{ $user->name }}</div>
                <div class="flex flex-row justify-between space-x-4 ">
                    @foreach ($user->skills as $skill)
                        {{ $skill->name }} ({{ $skill->level }})
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>