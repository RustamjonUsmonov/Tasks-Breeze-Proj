<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact Us') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-1/3 m-auto">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-validation-errors />
                    <x-success-message />

                    <form method="POST" action="#{{--{{ route('contact.store') }}--}}">
                        @csrf
                        <div class="grid grid-cols-1 gap-6">
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="name" :value="__('Name')" />
                                    <x-input id="name" class="block mt-1 w-full disabled:opacity-50" type="text" name="name" value="{{ auth()->user()->name }}" disabled />
                                </div>
                                <div>
                                    <x-label for="email" :value="__('Email')" />
                                    <x-input id="email" class="block mt-1 w-full disabled:opacity-50" type="email" name="email" value="{{ auth()->user()->email }}" disabled />
                                </div>
                            </div>
                            <div class="grid grid-rows-2 gap-6">
                                <div class="row-span-2">
                                    <x-label for="message" :value="__('Message')" />
                                    <textarea id="message" class="block mt-1 w-full md:rounded shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                             name="message"
                                             autocomplete="message" rows="5" cols="45" autofocus/></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('Send') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
