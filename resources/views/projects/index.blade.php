<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
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
                {{-- Create project livewire component start --}}
                <livewire:create-project>
                {{-- Create project livewire component end --}}
        </div>
    </div>
</x-app-layout>
