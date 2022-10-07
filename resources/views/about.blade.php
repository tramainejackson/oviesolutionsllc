<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About US') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="">Vision</h1>
                    <p class="">Deliver competent service and superior customer experience.</p>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="">Mission</h1>
                    <p class="">To provide customer driven business solutions to key problems faced during daily operations</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
