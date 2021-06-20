<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    @foreach ($projects as $project)
        <div class="flex flex-row justify-between items-center mb-8">
            <div>{{ $project->name }}</div>
            <div>
                @foreach ($project->users as $user)
                    {{ $user->name }}
                    @if (!$loop->last)
                        ,
                    @endif
                @endforeach
            </div>
            <div>
                <a href="{{ route('projects.show', $project->id) }}" class="bg-blue-500 rounded-full p-2 text-white">Go to</a>
            </div>
        </div>
    @endforeach
</div>