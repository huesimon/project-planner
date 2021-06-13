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
                    <h2 class="text-xl font-bold">
                        {{ $project->name }}
                    </h2>
                    <h3 class="text-lg font-semibold">Team Members:</h3>
                    <div class="bg-gray-100 flex flex-col">
                        @foreach ($project->users as $user)
                            <div class="flex flex-row justify-between">
                                <div>{{ $user->name }}</div>
                                <div>
                                    Vue, php, laravel
                                    {{-- use user->skills --}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- Add team mebmer livewire component start --}}
                <livewire:add-member-to-project :project='$project'>
                {{-- Add team mebmer livewire component end --}}
            </div>
        </div>
    </div>
</x-app-layout>
