<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(auth()->user()->is_approve && auth()->user()->is_admin)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                       <h3>Mr/Mrs <strong>{{auth()->user()->name}} </strong></h3>
                        <h4> Welcome to Our Dashboard</h4>
                    </div>
                </div>
            @else
                <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h4 class="text-red-600">We are sorry . Your Your Request Is Pending Now </h4>
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
