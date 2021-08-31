<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-1 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-info-message :info="__('You are logged in!')"></x-info-message>
        <x-universal-message :text="__('You are logged in!')" :color="__('yellow')"
                             :title="__('Custom')"></x-universal-message>
        <x-universal-message :text="__('You are logged in Gray!')" :color="__('gray')"
                             :title="__('Custom')"></x-universal-message>
        <x-universal-message :text="__('You are logged in Red!')" :color="__('red')"
                             :title="__('Custom')"></x-universal-message>
    </div>
</x-app-layout>
