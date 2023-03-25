<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

            

            
            </div>
            
            <x-secondary-button class="ml-4" >
                <a href="{{ route('setting.tag') }}" class="ml-4 btn btn-primary">
                {{ __('タグを設定する') }}
                </a>
                
                
            </x-secondary-button>
        </div>
    </div>
</x-app-layout>
